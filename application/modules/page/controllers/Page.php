<?php
class Page extends MX_Controller {
    public function __construct()
    {
        header("Access-Control-Allow-Origin: *");
        parent::__construct();
        $this->load->helper('url');
        $this->load->library("pagination");
        $this->load->model('frontend/Frontend_model');
        $this->load->model('manage_menumanager/Data_menumanager');
        $this->load->helper('my_publicmenus');
    }
    public function detail($id)
    {
        $data['settings'] = $this->Frontend_model->getSpecificData('settings', array('id_settings' => '1'));
        $data['top_menumanager']      = $this->Frontend_model->getAllData('top_menumanager');
        $data['menumanager']      = $this->Frontend_model->getAllData('menumanager');
        $data['menumanager_detail'] = $this->Frontend_model->getSpecificData('menumanager', array('id' => $id));

        $this->template->set_template('frontend/template');
        $this->template->title = 'Godrive';
        $this->template->description = 'Godrive';
        $this->template->keyword = 'Godrive';
        $this->template->header->view('frontend/partials/header',$data);//, $data);
        $this->template->content->view('page/index',$data);
        $this->template->footer->view('frontend/partials/footer');//, $data);
        $this->template->publish();
    }

}