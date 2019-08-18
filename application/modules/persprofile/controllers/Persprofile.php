<?php
class Persprofile extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home/Home_model');
    }

    public function index()
    {
        $myaccount = $this->myglobal->getLoggedInMember();

        $crud = new Grocery_CRUD();
        $crud->set_table('member');
        $crud->set_theme('bootstrap');
        $crud->set_language("english");

        $crud->set_subject('Personal Profile');

        //kolom tabelnya apa aja yg di tampilin di tabel data
        $crud->columns('first_name','last_name','email','address','phone_number'); 
        //kolom apa aja yang mau di tampilin saat tambah data
        $crud->add_fields('first_name','last_name','email','address','phone_number');
        //kolom apa aja yang mau di tampilin saat edit data
        $crud->edit_fields('first_name','last_name','email','address','phone_number');
        //kolom apa aja yang mau di tampilin saat view detail data
        $crud->set_read_fields('first_name','last_name','email','address','phone_number');

        //set kolom yang mandatory(wajib diisi)
        $crud->required_fields('first_name','last_name','email','address','phone_number');

        $crud->unset_bootstrap();
        $crud->unset_list(); 
        $crud->unset_back_to_list();        
        $crud->unset_delete();
        $crud->unset_add();
        $crud->unset_read();
        $crud->unset_export();
        $crud->unset_print();

        try {
            
            $output = $crud->render(); //this will raise an exception when the action is list

            $this->template->set_template('frontend/template');
            $this->template->title = 'Kensington Trader';
            $this->template->description = 'Kensington Tradera';
            $this->template->keyword = 'Kensington Trader';
            $this->template->header->view('frontend/partials/header', $data);
            $this->template->content->view('persprofile/index', $output);
            $this->template->footer->view('frontend/partials/footer', $data);
            $this->template->publish();
            
        } catch (Exception $e) {

            if ($e->getCode() == 14) {  //The 14 is the code of the error on grocery CRUD (don't have permission).
                //redirect using your user id
                redirect(strtolower(__CLASS__) . '/' . strtolower(__FUNCTION__) . '/edit/' . $myaccount->id_member);
                
            } else {
                show_error($e->getMessage());
                return false;
            }
        }
    }
    
    public function change_password()
    {
        $myaccount = $this->myglobal->getLoggedInMember();

        $crud = new Grocery_CRUD();
        $crud->set_table('member');
        $crud->set_theme('bootstrap');
        $crud->set_language("english");

        $crud->set_subject('Change Password');

        //kolom tabelnya apa aja yg di tampilin di tabel data
        $crud->columns('password'); 
        //kolom apa aja yang mau di tampilin saat tambah data
        $crud->add_fields('password');
        //kolom apa aja yang mau di tampilin saat edit data
        $crud->edit_fields('password');
        //kolom apa aja yang mau di tampilin saat view detail data
        $crud->set_read_fields('password');

        //set kolom yang mandatory(wajib diisi)
        //$crud->required_fields('password');

        //sebelum insert data enrypt dulu field password
        $crud->callback_edit_field('password', function ($value, $primary_key) {
            return '<input class="form-control" type="text" maxlength="50" value="" name="password" style="width:462px">';
        });

        $crud->callback_before_insert(array($this,'encrypt_password'));
        //sebelum update data enrypt dulu field password
        $crud->callback_before_update(array($this,'encrypt_password'));

        $crud->unset_bootstrap();
        $crud->unset_list(); 
        $crud->unset_back_to_list();        
        $crud->unset_delete();
        $crud->unset_add();
        $crud->unset_read();
        $crud->unset_export();
        $crud->unset_print();

        try {
            
            $output = $crud->render(); //this will raise an exception when the action is list

            $this->template->set_template('frontend/template');
            $this->template->title = 'Kensington Trader';
            $this->template->description = 'Kensington Tradera';
            $this->template->keyword = 'Kensington Trader';
            $this->template->header->view('frontend/partials/header', $data);
            $this->template->content->view('persprofile/index', $output);
            $this->template->footer->view('frontend/partials/footer', $data);
            $this->template->publish();
            
        } catch (Exception $e) {

            if ($e->getCode() == 14) {  //The 14 is the code of the error on grocery CRUD (don't have permission).
                //redirect using your user id
                redirect(strtolower(__CLASS__) . '/' . strtolower(__FUNCTION__) . '/edit/' . $myaccount->id_member);
                
            } else {
                show_error($e->getMessage());
                return false;
            }
        }
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