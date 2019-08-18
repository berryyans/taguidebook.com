<?php
class Home extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->template->set_template('frontend/template');
        $this->template->title = 'Kensington Trader';
        $this->template->description = 'Kensington Tradera';
        $this->template->keyword = 'Kensington Trader';
        $this->template->header->view('frontend/partials/header', $data);
        $this->template->content->view('home/index', $data);
        /*$this->template->sidebar->view('frontend/partials/sidebar');*/
        $this->template->footer->view('frontend/partials/footer', $data);
        $this->template->publish();
    }

}