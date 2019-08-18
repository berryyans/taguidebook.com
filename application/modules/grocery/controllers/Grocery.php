<?php

/**
 * Created by Yanno Dwi Ananda
 * Date: 1/19/2018
 * Time: 12:09 PM
 */
class Grocery extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->form_validation->CI =& $this;
        $this->load->model('DataAccount');
        $this->load->model('User');
        if (empty($this->session->userdata('logged_in')))
            redirect(base_url() . 'backoffice');
    }

    public function index()
    {
        $this->template->set_template('backoffice/template');

        // instance object
        $crud = new grocery_CRUD();

        // pilih theme
        $crud->set_theme('adminlte');

        // pilih tabel yang akan digunakan
        $crud->set_table('pegawai');
        // simpan hasilnya kedalam variabel output
        $output = $crud->render();
        // tampilkan di view
        $this->template->content->view('grocery/template.php', $output);
        $this->template->publish();
    }

    public function employees() {
        // instance object
        $crud = new grocery_CRUD();

        // pilih theme
        $crud->set_theme('bootstrap');

        // pilih tabel yang akan digunakan
        $crud->set_table('user');
        // simpan hasilnya kedalam variabel output
        $output = $crud->render();
        // tampilkan di view 
        //$this->_example_output($output);
        $this->load->view('template.php', $output);
    }
}