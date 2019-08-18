<?php

class Main extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DataAgenda');
        $this->load->model('DataAlbum');
        $this->load->model('DataArtikel');
        $this->load->model('DataBanner');
        $this->load->model('DataBerita');
        $this->load->model('DataKontak');
        $this->load->model('DataKritik');
        $this->load->model('Data_menumanager');
        $this->load->model('DataPengaturan');
        $this->load->model('DataPengumuman');
        $this->load->model('DataPolling');
        $this->load->model('DataPopup');
        $this->load->model('DataRunning');
        $this->load->model('DataSitus');
        $this->load->model('DataSlider');
        $this->load->model('DataStatistic');
    }

    public function index()
    {
        $data['album'] = $this->DataAgenda->getData('10','0','album');
        $data['agenda'] = $this->DataAgenda->getData('5','0','agenda');
        $data['artikel'] = $this->DataArtikel->getAllData('artikel');
        $data['banner'] = $this->DataBanner->getAllData('banner');
        $data['berita'] = $this->DataBerita->getData('7','4','berita');
        $data['kontak'] = $this->DataKontak->getAllData('kontak');
        $data['kritik'] = $this->DataKritik->getAllData('kritik');
        $data['menumanager'] = $this->Data_menumanager->getAllData('menumanager');
        $data['pengaturan'] = $this->DataPengaturan->getAllData('pengaturan');
        $data['pengumuman'] = $this->DataPengumuman->getAllData('pengumuman');
        $data['polling'] = $this->DataPolling->getAllData('polling');
        $data['popup'] = $this->DataPopup->getAllData('popup');
        $data['running'] = $this->DataRunning->getAllData('running');
        $data['situs'] = $this->DataSitus->getAllData('situs');
        $data['sliders'] = $this->DataSlider->getAllData('slider');
        $data['pengunjung']       = $this->DataStatistic->pengunjung()->num_rows();
        $data['totalpengunjung']  = $this->DataStatistic->totalpengunjung()->row_array();
        $data['hits']             = $this->DataStatistic->hits()->row_array();
        $data['totalhits']        = $this->DataStatistic->totalhits()->row_array();
        $data['pengunjungonline'] = $this->DataStatistic->pengunjungonline()->num_rows();

        $this->template->set_template('frontend/template');
        $this->template->title = 'Website Portal Resmi Pemerintah Kabupaten Subang';
        $this->template->description = 'Rakyat Subang Gotong Royong, Subang Maju Website Resmi Pemkab. Subang menyediakan informasi mengenai potensi daerah Subang, berita, dan informasi publik lainnya';
        $this->template->keyword = 'subang, pemkab subang, nanas, profil subang, berita subang, potensi subang, informasi subang, rambutan, sisingaan, ciater, perak, emas, intan, permata, serasi, gapura, gotong royong, singa';
        $this->template->stylesheet->add(base_url() . "public/css/index.css");
        $this->template->content->view('frontend/partials/index', $data);
        $this->template->header->view('frontend/partials/header');
        $this->template->footer->view('frontend/partials/footer');
        $this->template->sidebar->view('frontend/partials/sidebar');
        $this->template->publish();
    }

}
