<?php
class Vendor_listing extends MX_Controller {

    public function __construct()
    {
        header("Access-Control-Allow-Origin: *");
        parent::__construct();
        $this->load->helper('url');
        $this->load->library("pagination");
        $this->load->model('vendor_listing/Vendor_listing_model');
    }
    public function index()
    {
        $data = array();
        $data['title'] = 'Home';
        $data['sort_cols'] = array(
            'nama' => 'Nama',
            'rate' => 'Rate',
            'alamat' => 'Alamat',
            'telpon' => 'telpon',
            'email' => 'email'
        );
        $config = array();
        //base_url () . 'index.php/questions/page/'.$sortfield.'/'.$order.'/',
        $search_string = $this->input->post('search');
        
        $config["per_page"] = 10;

        $data['per_page'] = $config["per_page"];
        //max number of page links
        $config['num_links'] = 2;
        //use page number as parameter
        $config['use_page_numbers'] = TRUE;

        $data['search_string'] = '';
        if(!empty($search_string)) {
            
            $this->uri->segment(6, $this->uri->segment(5, 1));
            $data['search_string'] = $this->uri->segment(5, $search_string);
            
        } elseif($this->uri->segment(5) != null && !empty($this->uri->segment(5)) && $this->uri->segment(6) != null) {
            $data['search_string'] = $this->uri->segment(5);
        }
        //set default page uri 
        $page_uri = 5;
        
        if(!empty($data['search_string']))
        $page_uri = 6;
        
        $config["uri_segment"] = $page_uri;
        
        $config["total_rows"] = $this->Vendor_listing_model->record_count($data['search_string']);
        
        $data['page'] = $this->uri->segment($page_uri, 1);
        
        $data['sort_by'] = $this->uri->segment(3, 'nama');
        $orderBy = $this->uri->segment(4, "desc");
        $offset = ($data['page']-1) * $config['per_page'];
        $data['total_rows'] = $config["total_rows"];
        if($orderBy == "asc") $data['sort_order'] = "desc"; else $data['sort_order'] = "asc";

        $config["base_url"] = base_url().'vendor_listing/index/'.$data['sort_by'].'/'.$orderBy.'/'.$data['search_string'];
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&larr; Previous';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        
        $data["data"] = $this->Vendor_listing_model->get_vendors($config["per_page"], $offset, $data['sort_by'], $data['sort_order'], $data['search_string']);
       
        $this->pagination->initialize($config);
        $data["links"] = $this->pagination->create_links();

        $this->template->set_template('frontend/template');
        $this->template->title = 'Godrive';
        $this->template->description = 'Godrive';
        $this->template->keyword = 'Godrive';
        $this->template->header->view('frontend/partials/header');//, $data);
        $this->template->content->view('vendor_listing/index', $data);
        $this->template->footer->view('frontend/partials/footer');//, $data);
        $this->template->publish();
    }

    public function detail($id)
    {
        //only this section
        $data['result']    = $this->Vendor_listing_model->getSpecificData('vendor', array('id_vendor' => $id));
        //only this section

        $this->template->set_template('frontend/template');
        $this->template->title = 'Godrive';
        $this->template->description = 'Godrive';
        $this->template->keyword = 'Godrive';
        $this->template->header->view('frontend/partials/header');//, $data);
        $this->template->content->view('vendor_listing/detail', $data);
        $this->template->footer->view('frontend/partials/footer');//, $data);
        $this->template->publish();
    }

}