<?php

/**
 * Created by Yanno Dwi Ananda
 * Date: 1/19/2018
 * Time: 12:09 PM
 */
class Manage extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        //validasi sudah login apa belum
        $this->form_validation->CI =& $this;
        $this->load->model('DataAccount');
        $this->load->model('User');

        //kalau belum redirect ke login backoffice
        if (empty($this->session->userdata('logged_in')))
            redirect(base_url() . 'backoffice');
    }

    public function index()
    {
    }  

    public function settings()
    {
        try{
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',false);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            //$crud->set_language("indonesian");

            $crud->set_table('settings');
            $crud->set_subject('General Settings');

            $crud->columns('company_name','company_address','company_phone','company_email','company_office_hour','company_logo','image_preloader','footer_text'); 
            $crud->add_fields('company_name','company_address','company_phone','company_email','company_office_hour','company_logo','image_preloader','footer_text');
            $crud->edit_fields('company_name','company_address','company_phone','company_email','company_office_hour','company_logo','image_preloader','footer_text');
            $crud->set_read_fields('company_name','company_address','company_phone','company_email','company_office_hour','company_logo','image_preloader','footer_text');

            $crud->set_field_upload('company_logo','uploads/settings','gif|jpeg|jpg|png');
            $crud->set_field_upload('image_preloader','uploads/settings','gif|jpeg|jpg|png');
            //$crud->required_fields('company_name','company_address','company_phone','company_email','company_office_hour','company_logo','footer_text''why_choose_kingcuan','title_product_section','subtitle_product_section','title_exchange_section','subtitle_exchange_section','title_roadmap_section','title_token_data_section','title_cuan_coin','description_cuan_coin','title_team_section','subtitle_team_section','title_advisory_section','subtitle_advisory_section','title_allocation_section','subtitle_allocation_section','footer_text');
            
            /*
            I know this is not a proper way to do it but if you want to have a redirection add insert and/or update operation without changing the functionality of grocery CRUD you can simply do:

            for insert:
               $crud->set_lang_string('insert_success_message',
                     'Your data has been successfully stored into the database.<br/>Please wait while you are redirecting to the list page.
                     <script type="text/javascript">
                      window.location = "'.site_url(strtolower(__CLASS__).'/'.strtolower(__FUNCTION__)).'";
                     </script>
                     <div style="display:none">
                     '
               );

            for update:
               $crud->set_lang_string('update_success_message',
                     'Your data has been successfully stored into the database.<br/>Please wait while you are redirecting to the list page.
                     <script type="text/javascript">
                      window.location = "'.site_url(strtolower(__CLASS__).'/'.strtolower(__FUNCTION__)).'";
                     </script>
                     <div style="display:none">
                     '
               );
            */

            $crud->set_lang_string('update_success_message',
                 'Your data has been successfully stored into the database.<br/>Please wait while you are redirecting to the list page.
                 <script type="text/javascript">
                  window.location = "'.site_url(strtolower(__CLASS__).'/'.strtolower(__FUNCTION__)).'";
                 </script>
                 <div style="display:none">
                 '
            );

            $crud->order_by('id_settings','desc');
            $crud->unset_bootstrap();
            $crud->unset_export();
            $crud->unset_list(); 
            $crud->unset_back_to_list();        
            $crud->unset_delete();
            $crud->unset_add();
            $crud->unset_read();
            $crud->unset_export();
            $crud->unset_print();
            $crud->unset_bootstrap();
            $crud->unset_export();
            $crud->unset_clone();
            $output = $crud->render();
            //ini ga perlu diubah
            //set template view
            $this->template->set_template('backoffice/template');
            $this->template->content->view('manage/template_edit.php', $output);
            $this->template->publish();
        
        
        }catch(Exception $e){
            if ($e->getCode() == 14) {  //The 14 is the code of the error on grocery CRUD (don't have permission).
                //redirect using your user id
                redirect(strtolower(__CLASS__) . '/' . strtolower(__FUNCTION__) . '/edit/' . '1');
                
            } else {
                show_error($e->getMessage());
                return false;
            }
        }
    }

    public function slider() {
        try{
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            //$crud->set_language("indonesian");

            $crud->set_table('slider');
            $crud->set_subject('Slider');

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('name','image','status'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('name','image','status');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('name','image','status');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('name','image','status');

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('name','image','status');

            //set jenis file yang boleh diupload
            $crud->set_field_upload('image','uploads/slider','gif|jpeg|jpg|png');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_slider','desc');
            $crud->unset_bootstrap();
            $output = $crud->render();
            //ini ga perlu diubah
            //set template view
            $this->template->set_template('backoffice/template');
            $this->template->content->view('manage/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function patner() {
        try{
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            //$crud->set_language("indonesian");

            $crud->set_table('patner');
            $crud->set_subject('Patner');

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('name','image','status'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('name','image','status');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('name','image','status');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('name','image','status');

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('name','image','status');

            //set jenis file yang boleh diupload
            $crud->set_field_upload('image','uploads/patner','gif|jpeg|jpg|png');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_patner','desc');
            $crud->unset_bootstrap();
            $output = $crud->render();
            //ini ga perlu diubah
            //set template view
            $this->template->set_template('backoffice/template');
            $this->template->content->view('manage/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function document() {
        try{
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            //$crud->set_language("indonesian");

            $crud->set_table('documents');
            $crud->set_subject('Data Documents');

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('document_name','description','image','file','status'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('document_name','description','image','file','status');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('document_name','description','image','file','status');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('document_name','description','image','file','status');

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('document_name','description','image','status');

            //set jenis file yang boleh diupload
            $crud->set_field_upload('image','uploads/documents','gif|jpeg|jpg|png');
            $crud->set_field_upload('file','uploads/documents','pdf|doc|docx|xls|xlsx');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_document','desc');
            $crud->unset_bootstrap();
            $output = $crud->render();
            //ini ga perlu diubah
            //set template view
            $this->template->set_template('backoffice/template');
            $this->template->content->view('manage/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function _open_your_redirection_page($post_array, $primary_key)
    {
            // create a full redirection link with primary key (last insert id)
            $link = site_url(strtolower(__CLASS__) . "settings/" . $primary_key);
            // html and javascript code
            $data = "Your data has been successfully stored into the database.<br/>Please wait while you are redirecting to the another page.";
            $data .= "<script type='text/javascript'> window.location = '" . $link . "';</script><div style='display:none'></div>";
            
            // set it in gc crud
            $this->crud->set_lang_string('insert_success_message', $data);

            // return array to complete action
            return $post_array;

    }

    function callback_before_upload($files_to_upload,$field_info)
    {
        foreach($files_to_upload as $value) {
            $ext = pathinfo($value['name'], PATHINFO_EXTENSION);
        }

        $allowed_formats = array("jpg","jpeg","gif","png");
        if(in_array($ext,$allowed_formats))
        {
            return true;
        }
        else
        {
            return 'File yang dijinkan hanya "jpg","jpeg","gif","png".';    
        }

    }
    
    function callback_after_upload($uploader_response,$field_info, $files_to_upload)
    {
        $this->load->library('image_moo');
         
        //Is only one file uploaded so it ok to use it with $uploader_response[0].
        $file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 
         
        $this->image_moo->load($file_uploaded)->resize_crop(500,500)->save($file_uploaded,true);
         
        return true;
    }
	
	public function encrypt_password($post_array, $primary_key = null)
    {
	    $this->load->helper('security');
	    $post_array['password'] = $this->encryption->encrypt($post_array['password']);//do_hash($post_array['password'].'@adDunyaa2$MataaAdDunyaa%4#AlMarAtus91Sholihah', 'md5');
	    return $post_array;
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
            $dash_str .= substr($password, 0, $dash_len) . '-';
            $password = substr($password, $dash_len);
        }
        $dash_str .= $password;
        return $dash_str;
    }
}