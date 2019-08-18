<?php

/**
 * Created by Yanno Dwi Ananda
 * Date: 1/19/2018
 * Time: 12:09 PM
 */
class Manage_top_menumanager extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        //validasi sudah login apa belum
        $this->form_validation->CI =& $this;
        $this->load->model('DataAccount');
        $this->load->model('User');
        $this->load->model('Data_top_menumanager');

        //kalau belum redirect ke login backoffice
        if (empty($this->session->userdata('logged_in')))
            redirect(base_url() . 'backoffice');
    }

     public function index()
    {
        $search = $this->input->post('search');
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        if (isset($search))
        {
            $this->search();
        } else
        {
            $data['datas'] = $this->Data_top_menumanager
            ->getAllData('top_menumanager');
            $this->template->set_template('backoffice/template');
            $this->template->content->view('manage_top_menumanager/top_menumanager', $data);
            $this->template->publish();
        }
    }
    
     public function search()
    {
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $searchCache = $this->session->flashdata('search');
        $search = $this->input->post('search');
        $search = isset($search) ? $search : $searchCache;
        $this->initialize_pagination(base_url("manage_top_menumanager/search"),
            'top_menumanager',
            'Data_top_menumanager',
            $this->Data_top_menumanager->countSearchData(
                'top_menumanager',
                null,
                null,
                'MENU_TITLE LIKE \'%' . $search . '%\'')
        );
        $data['datas'] = $this->Data_top_menumanager
            ->searchData(
                $this->numOfContentsPerPage,
                $page,
                'top_menumanager',
                null,
                null,
                'MENU_TITLE LIKE \'%' . $search . '%\' OR MENU_TITLE LIKE \'%' . $search . '%\''
            );
        $data['search'] = $search;
        $data['page'] = $page;
        $this->template->set_template('backoffice/template');
        $this->template->content->view('manage_top_menumanager/top_menumanager', $data);
        $this->template->publish();
    }

    public function tambahTopMenuManager()
    {
        if ($this->isPost())
        {
            $this->top_menumanager_submit();
            $order = $this->Data_top_menumanager->getTopOrderPlusOne();
            if ($this->input->post('top_menu') != 0)
            {
                $order = $this->Data_top_menumanager->getParentOrder($this->input->post('top_menu'));
                $this->Data_top_menumanager->incrementOrder($order);
            }
            $this->Data_top_menumanager->addData('top_menumanager', array(
                'MENU_PARENT'     => $this->input->post('top_menu'),
                'MENU_TITLE'      => $this->input->post('title_id'),
                'URL'             => $this->input->post('url'),
                'MENU_SORT'       => 1,
                'MENU_KONTEN'     => $this->input->post('content_id'),
                'MENU_TARGET'     => $this->input->post('target'),
                'STATUS'          => $this->input->post('status'),
                'MENU_ORDER'      => $order
            ));
            $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Success </h4>
                    <p>Add data has been successfully</p>
                </div>');  
            redirect(base_url() . 'manage_top_menumanager', 'refresh');
        } else
        {
            $data['top_menus'] = $this->Data_top_menumanager->getAllData('top_menumanager');
            $this->template->set_template('backoffice/template');
            $this->template->content->view('manage_top_menumanager/tambah_top_menumanager', $data);
            $this->template->publish();
        }
    }

    public function editTopMenuManager($menuid)
    {
        if ($this->isPost())
        {
            $this->top_menumanager_submit();
            if ($this->input->post('top_menu') != 0)
            {
                $order = $this->Data_top_menumanager->getParentOrder($this->input->post('top_menu'));
                $this->Data_top_menumanager->incrementOrder($order);
                $this->Data_top_menumanager->updateData(array(
                    'MENU_PARENT'     => $this->input->post('top_menu'),
                    'MENU_TITLE'      => $this->input->post('title_id'),
                    'URL'             => $this->input->post('url'),
                    'MENU_SORT'       => 1,
                    'MENU_KONTEN'     => $this->input->post('content_id'),
                    'MENU_TARGET'     => $this->input->post('target'),
                    'STATUS'          => $this->input->post('status'),
                    'MENU_ORDER'      => $order
                ), array('id' => $menuid), 'top_menumanager');
            } else
            {
                $this->Data_top_menumanager->updateData(array(
                    'MENU_PARENT'     => $this->input->post('top_menu'),
                    'MENU_TITLE'      => $this->input->post('title_id'),
                    'URL'             => $this->input->post('url'),
                    'MENU_SORT'       => 1,
                    'MENU_KONTEN'     => $this->input->post('content_id'),
                    'MENU_TARGET'     => $this->input->post('target'),
                    'STATUS'          => $this->input->post('status')
                ), array('id' => $menuid), 'top_menumanager');
            }
            $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Success </h4>
                    <p>Update data has been successfully</p>
                </div>');  
            redirect(base_url() . 'manage_top_menumanager', 'refresh');
        } else
        {
            $data['top_menus'] = $this->Data_top_menumanager->getAllData('top_menumanager');
            $data['menu'] = $this->Data_top_menumanager->getSpecificData('top_menumanager', array('id' => $menuid));
            $this->template->set_template('backoffice/template');
            $this->template->content->view('manage_top_menumanager/edit_top_menumanager', $data);
            $this->template->publish();
        }
    }

    public function deleteTopMenuManager($id)
    {
        $this->Data_top_menumanager->deleteData('top_menumanager', array('id' => $id));
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Success </h4>
                    <p>Delete data has been successfully</p>
                </div>');  
        redirect(base_url() . 'manage_top_menumanager', 'refresh');
    }

    public function sorting()
    {
        $this->template->set_template('backoffice/template');
        $this->template->content->view('manage_top_menumanager/sorting_top_menumanager', $data);
        $this->template->publish();
    }

    public function showmenus()
    {
        $categories = array();
        $pool = array();
        $q = $this->Data_top_menumanager->returnparentmenus();
        foreach ($q as $row)
        {
            if (in_array($row['lvl0_id'], $pool) === false && isset($row['lvl0_name']) && !is_null($row['lvl0_name']))
            {
                $c = array('id'   => $row['lvl0_id'],
                           'name' => $row['lvl0_name'],
                           'link' => $row['lv10_link'],
                           'level' => 0);
                $categories[] = $c;
            }
            if (in_array($row['lvl1_id'], $pool) === false && isset($row['lvl1_name']) && !is_null($row['lvl1_name']))
            {
                $c = array('id'    => $row['lvl1_id'],
                           'name'  => $row['lvl1_name'],
                           'link'  => $row['lv11_link'],
                           'level' => 1);
                $categories[] = $c;
            }
            if (in_array($row['lvl2_id'], $pool) === false && isset($row['lvl2_name']) && !is_null($row['lvl2_name']))
            {
                $c = array('id'    => $row['lvl2_id'],
                           'name'  => $row['lvl2_name'],
                           'link'  => $row['lv12_link'],
                           'level' => 2);
                $categories[] = $c;
            }
            if (in_array($row['lvl3_id'], $pool) === false && isset($row['lvl3_name']) && !is_null($row['lvl3_name']))
            {
                $c = array('id'    => $row['lvl3_id'],
                           'name'  => $row['lvl3_name'],
                           'link'  => $row['lv13_link'],
                           'level' => 3);
                $categories[] = $c;
            }
            $pool[] = $row['lvl0_id'];
            $pool[] = $row['lvl1_id'];
            $pool[] = $row['lvl2_id'];
            $pool[] = $row['lvl3_id'];
        }
        /*
        Sample outoput: [{"id":"1","name":"Home","class":null,"link":"#","level":0},{"id":"2","name":"How","class":null,"link":"#","level":0}]
        */
        echo json_encode($categories);
        exit;

    }

    public function updateSorting()
    {
        $this->Data_top_menumanager->resetTopMenuManagerOrder();
        $response = json_decode($_POST['s'], true); // decoding received JSON to array
        if (is_array($response))
        {
            //start saving now
            $topmenusorder = 1;
            foreach ($response as $key => $block)
            {
                $menuid = $this->Data_top_menumanager->updateMenu($block['id'], 0, $topmenusorder);

                if (isset($block['children']))
                {
                    //loopMe($block['children']);
                    // loopChildren($block['link']['children']); /* children loop*/
                    $this->updateChildSubmenus($menuid, $block['children']);
                }
                $topmenusorder ++;
            }
        } //if is_array($response);
        echo 1;
        exit;
    }

    public function updateChildSubmenus($menuid, $e)
    {
        $topmenusorder = 1;
        foreach ($e as $key => $block)
        {
            //echo $block['link'].' '.$block['cls'].' '.$block['id'].' '.$block['label'].'<br/>'; /* echo parent*/
            $menu = $this->Data_top_menumanager->updateMenu($block['id'], $menuid, $topmenusorder);
            if (isset($block['children']))
            {
                $this->updateChildSubmenus($menu, $block['children']);
            }
            $topmenusorder ++;
        }
    }

    protected function top_menumanager_submit()
    {
        $this->form_validation->set_rules('top_menu', 'Top Menu', 'required');
        $this->form_validation->set_rules('title_id', 'Title ID', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('target', 'Target', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == false)
        {
            $this->session->set_flashdata('error', validation_errors('<p class="alert alert-danger">', '</p>'));
            $this->setMenumanagerFlash();
            redirect(current_url() . "#errors");
        }
    }

    public function setMenumanagerFlash()
    {
        $this->session->set_flashdata('top_menu', $this->input->post('top_menu'));
        $this->session->set_flashdata('title_id', $this->input->post('title_id'));
        $this->session->set_flashdata('content_id', $this->input->post('content_id'));
        $this->session->set_flashdata('url', $this->input->post('url'));
        $this->session->set_flashdata('target', $this->input->post('target'));
        $this->session->set_flashdata('status', $this->input->post('status'));
    }
}