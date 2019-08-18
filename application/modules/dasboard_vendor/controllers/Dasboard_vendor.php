<?php

/**
 * Created by Arby Pratama Putra Gunawan
 * Date: 2/20/2019
 * Time: 5:10 PM
 */
class Dasboard_vendor extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dasboard_vendor/vendor');
        $this->load->model('dasboard_vendor/Captcha');
        $this->numOfContentsPerPage = 10;
        $this->form_validation->CI =& $this;
    }

    public function index()
    {
        if ($this->session->logged_in_vendor)
        {
            $data['datas'] = "";
            $this->template->set_template('backoffice/template_vendor');
            $this->template->content->view('dasboard_vendor/dashboard', $data);
            $this->template->publish();
        } else
        {
            $vals = array(
                'word'        => '',
                'img_path'    => './captcha/',
                'img_url'     => base_url() . 'captcha/',
                'font_path'   => site_url() . 'fonts/comicbd.ttf',
                'img_width'   => '230',
                'img_height'  => '50',
                'expiration'  => 7200,
                'word_length' => 4,
                'font_size'   => '50',
                'img_id'      => 'Imageid',
                'pool'        => '0123456789',

                // White background and border, black text and red grid
                'colors'      => array(
                    'background' => array(255, 255, 255),
                    'border'     => array(255, 255, 255),
                    'text'       => array(0, 0, 0),
                    'grid'       => array(255, 40, 40)
                )
            );
            $cap = create_captcha($vals);
            $this->Captcha->addCaptcha($cap, $this->input->ip_address());
            $data['image'] = $cap['image'];
            $this->load->view('dasboard_vendor/login-page', $data);
        }
    }


    public function verifyLogin()
    {
        //This method will have the credentials validation
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_check');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_verify_vendor');
        if ($this->form_validation->run() == false)
        {
            //Field validation failed.  vendor redirected to login page
            $this->index();
        } else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->session->set_userdata('logged_in_vendor', $this->vendor->login($username, $password));
            redirect(base_url() . 'dasboard_vendor');
        }
    }

    public function verify_vendor()
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //query the database
        $result = $this->vendor->login($username, $password);
        if ($result)
        {
            return true;
        } else
        {
            $this->form_validation->set_message('verify_vendor', 'Invalid username or password');
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
        $this->session->unset_userdata('logged_in_vendor');
        session_destroy();
        redirect(base_url() . 'dasboard_vendor');
    }
}