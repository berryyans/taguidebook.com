<?php

/**
 * Created by Yanno Dwi Ananda
 * Date: 12/13/2017
 * Time: 10:04 AM
 */
class Member extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home/Home_model');
        $this->load->model('member/member_model');
        $this->load->model('member/Captcha');
        $this->numOfContentsPerPage = 10;
        $this->form_validation->CI =& $this;
    }

    public function index()
    {
        if ($this->session->logged_in_member)
        {
            $data['documents']       = $this->Home_model->getAllData('documents');
            $this->template->set_template('frontend/template');
            $this->template->title = 'Taguidebook';
            $this->template->description = 'Taguidebook';
            $this->template->keyword = 'Taguidebook';
            $this->template->header->view('frontend/partials/header');//, $data);
            $this->template->content->view('member/dashboard', $data);
            $this->template->footer->view('frontend/partials/footer');//, $data);
            $this->template->publish();
        } else
        {
            $data="";
            $this->load->view('member/login-page', $data);
        }
    }


    public function verifyLogin()
    {
        //This method will have the credentials validation
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        //$this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_check');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_verify_member');
        if ($this->form_validation->run() == false)
        {
            //Field validation failed.  Driver redirected to login page
            $this->index();
        } else
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->session->set_userdata('logged_in_member', $this->member_model->login($email, $password));
            redirect(base_url());
        }
    }

    public function verify_member()
    {
        //Field validation succeeded.  Validate against database
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        //query the database
        $result = $this->member_model->login($email, $password);
        if ($result)
        {
            return true;
        } else
        {
            $this->form_validation->set_message('verify_member', 'Invalid email or password');
            return false;
        }
    }

    public function captcha_Check()
    {
        $expiration = time() - 7200; // Two hour limit
        $this->Captcha->deleteCaptcha($expiration);

        // Then see if a captcha exists:
        if ($this->Captcha->checkCaptcha($expiration) == 0)
        {
            $this->form_validation->set_message('captcha_check', 'You must submit the word that appears in the image.');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            return false;
        } else
            return true;
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in_member');
        session_destroy();
        redirect(base_url());
    }
    
    public function openaccount()
    {
        $data="";
        $this->load->view('member/openaccount', $data);
    }

    public function send() {
        if ($this->isPost()){
            //load library form validation
            $this->load->library('form_validation');
            //jika anda mau, anda bisa mengatur tampilan pesan error dengan menambahkan element dan css nya
            $this->form_validation->set_error_delimiters('<span style="color:red">', '</span>');
            //rules validasi
            $this->form_validation->set_rules('firstName', 'First Name', 'required');
            $this->form_validation->set_rules('lastName', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('phoneInput', 'Phone Number', 'required');
            $this->form_validation->set_rules('acceptTerms', 'Accept Terms', 'required');//Please Accept Our Terms 

            if ($this->form_validation->run() == FALSE) {
                //jika validasi gagal
                /*$this->session->set_flashdata('error', validation_errors('<p class="alert alert-danger">', '</p>'));*/

                $data = array('firstName' => set_value('firstName', ''),
                              'lastName' =>set_value('lastName', ''),
                              'email' => set_value('email', ''),
                              'password' => set_value('password', ''),
                              'address' => set_value('address', ''),
                              'phoneInput' => set_value('phoneInput', ''),
                              'acceptTerms' => set_value('acceptTerms', '')
                );

                $this->load->view('member/openaccount', $data);
            } else {
                //jika validasi berhasil
                $this->load->helper('security');
                $activation_code=$this->generateStrongPassword(50, false, 'lud');
                $simpan=$this->Home_model->addData('member', array(
                                                                    'first_name' => $this->input->post("firstName"),
                                                                    'last_name' => $this->input->post("lastName"),
                                                                    'email' =>$this->input->post("email"),
                                                                    'password' => $this->encryption->encrypt($this->input->post("password")),
                                                                    'address' => $this->input->post("address"),
                                                                    'phone_number' => $this->input->post("phoneInput"),
                                                                    'status' => 'Pending',
                                                                    'activation_code' => $activation_code,
                                                                    ));
                                                                    
                $this->load->library('email');
                // Konfigurasi email
                $config = [
                       'mailtype'  => 'html',
                       'charset'   => 'utf-8',
                       'protocol'  => 'smtp',
                       'smtp_host' => 'ssl://mail.taguidebook.com',
                       'smtp_user' => 'sender@taguidebook.com',    // Ganti dengan email gmail kamu
                       'smtp_pass' => 'kasitaugaya?:)',      // Password gmail kamu
                       'smtp_port' => 465,
                       'crlf'      => "\r\n",
                       'newline'   => "\r\n"
                   ];

                // Load library email dan konfigurasinya
                $this->load->library('email', $config);
        
                // Email dan nama pengirim
                $this->email->from('sender@taguidebook.com', 'Link Account Activation - taguidebook.com');
        
                // Email penerima
                $this->email->to($this->input->post("email")); // Ganti dengan email tujuan kamu
        
                // Lampiran email, isi dengan url/path file
                //$this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');
        
                // Subject email
                $this->email->subject('Link Account Activation - taguidebook.com');
        
                // Isi email
$pesannya="Link Account Activation - taguidebook.com \n\n
Thank you for registering.\n
To activate your account, please click the link below:\n\n
".base_url()."openaccount/activation/".$activation_code."";
                $this->email->message($pesannya);
                $this->email->send();
                // Tampilkan pesan sukses atau error
                /*if ($this->email->send()) {
                    echo 'Sukses! email berhasil dikirim.';
                } else {
                    echo 'Error! email tidak dapat dikirim.';
                }*/

                $this->session->set_flashdata('msg', 
                            '<div class="alert alert-success">
                                <h4>Success </h4>
                                <p>Registration is successful, we have sent an account activation link to your email, if there is no inbox please check the spam folder. You can log in after activating your account.
                                </p>
                            </div>');  
                redirect(base_url() . 'member/openaccount', 'refresh');
            }
        }else{
                $this->template->content->view('member/openaccount');//, $data);
        } 
    }

    public function activation($id){
        $membernya = $this->db->query("SELECT * FROM member WHERE activation_code='$id' LIMIT 1")->row();
        if($membernya->id_member==""){
            $pesannya="Link Account Validation Not Valid";
        }else{
            $membernya = $this->db->query("UPDATE member SET status='Active' WHERE activation_code='$id' LIMIT 1");
            $pesannya="Your Account has ben activated, please login.";
        }
        $data['activation']='True';
        $data['pesan']=$pesannya;

        $this->template->set_template('frontend/template');
        $this->template->title = 'Kensington Trader';
        $this->template->description = 'Kensington Tradera';
        $this->template->keyword = 'Kensington Trader';
        $this->template->header->view('frontend/partials/header');//, $data);
        $this->template->content->view('openaccount/activation', $data);
        /*$this->template->sidebar->view('frontend/partials/sidebar');*/
        $this->template->footer->view('frontend/partials/footer');//, $data);
        $this->template->publish();
    }

    public function generate_api_key($post_array, $primary_key = null)
    {
        $post_array['api_key'] = generateStrongPassword();
        return $post_array;
    }

    public function generateStrongPassword($length = 20, $add_dashes = false, $available_sets = 'lud')
    {
        $sets = array();
        if(strpos($available_sets, 'l') !== true)
            $sets[] = 'abcdefghjkmnpqrstuvwxyz';
        if(strpos($available_sets, 'u') !== true)
            $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
        if(strpos($available_sets, 'd') !== true)
            $sets[] = '23456789';
        if(strpos($available_sets, 's') !== false)
            $sets[] = '!@#$%&*?';

        $all = '';
        $password = '';
        foreach($sets as $set)
        {
            $password .= $set[array_rand(str_split($set))];
            $all .= $set;
        }

        $all = str_split($all);
        for($i = 0; $i < $length - count($sets); $i++)
            $password .= $all[array_rand($all)];

        $password = str_shuffle($password);

        if(!$add_dashes)
            return $password;

        $dash_len = floor(sqrt($length));
        $dash_str = '';
        while(strlen($password) > $dash_len)
        {
            $dash_str .= substr($password, 0, $dash_len);// . '-';
            $password = substr($password, $dash_len);
        }
        $dash_str .= $password;
        return $dash_str;
    }
}