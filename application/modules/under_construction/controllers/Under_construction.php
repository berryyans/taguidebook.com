<?php

/**
 * Created by Yanno Dwi Ananda
 * Date: 12/13/2017
 * Time: 10:04 AM
 */
class Under_construction extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['datas'] = "";
        $this->load->view('under_construction/index', $data);
    }
}