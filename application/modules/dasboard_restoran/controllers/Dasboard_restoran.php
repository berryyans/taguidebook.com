<?php

/**
 * Created by Arby Pratama Putra Gunawan
 * Date: 2/20/2019
 * Time: 5:10 PM
 */
class Dasboard_restoran extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dasboard_restoran/restoran');
        $this->load->model('dasboard_restoran/Captcha');
        $this->numOfContentsPerPage = 10;
        $this->form_validation->CI =& $this;
    }

    public function index()
    {
        if ($this->session->logged_in_restoran)
        {
            $data['datas'] = "";
            $this->template->set_template('backoffice/template_restoran');
            $this->template->content->view('dasboard_restoran/dashboard', $data);
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
            $this->load->view('dasboard_restoran/login-page', $data);
        }
    }


    public function verifyLogin()
    {
        //This method will have the credentials validation
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_check');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_verify_restoran');
        if ($this->form_validation->run() == false)
        {
            //Field validation failed.  restoran redirected to login page
            $this->index();
        } else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->session->set_userdata('logged_in_restoran', $this->restoran->login($username, $password));
            redirect(base_url() . 'dasboard_restoran');
        }
    }

    public function verify_restoran()
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //query the database
        $result = $this->restoran->login($username, $password);
        if ($result)
        {
            return true;
        } else
        {
            $this->form_validation->set_message('verify_restoran', 'Invalid username or password');
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
        $this->session->unset_userdata('logged_in_restoran');
        session_destroy();
        redirect(base_url() . 'dasboard_restoran');
    }
}