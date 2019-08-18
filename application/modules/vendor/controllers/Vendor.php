<?php

/**
 * Created by Yanno Dwi Ananda
 * Date: 1/19/2018
 * Time: 12:09 PM
 */
class Vendor extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        //validasi sudah login apa belum
        $this->form_validation->CI =& $this;
        $this->load->model('vendor_model');
       

        //kalau belum redirect ke login backoffice
        if (empty($this->session->userdata('logged_in_vendor')))
            redirect(base_url() . 'backoffice');
    }

    
    

     public function vendor() {
        try{
            //set template view
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            $crud->set_language("indonesian");

            $crud->set_table('vendor');
            $crud->set_subject('Manage Data Vendor');

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('foto','nama','rate','lokasi','jam_buka','alamat','telpon','email','status','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('foto','nama','rate','lokasi','jam_buka','alamat','telpon','email','status','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('foto','nama','rate','lokasi','jam_buka','alamat','telpon','email','status','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('foto','nama','rate','lokasi','jam_buka','alamat','telpon','email','status','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit');

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('nama','telpon','email');

            $this->load->config('grocery_crud');
            //set jenis file yang boleh diupload
            $crud->set_field_upload('foto','uploads/vendor','gif|jpeg|jpg|png');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_vendor','desc');
            $output = $crud->render();
            $this->template->set_template('backoffice/template_vendor');
            $this->template->content->view('vendor/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function bank() {
        try{
            //set template view
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            $crud->set_language("indonesian");

            $crud->set_table('vendor_bank');
            $crud->set_subject('Vendor Bank');

            $myaccount = $this->myglobal->getLoggedInVendor();

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('bank_name','account_name','account_number'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('id_vendor','bank_name','account_name','account_number');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('id_vendor','bank_name','account_name','account_number');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('bank_name','account_name','account_number');

            //auto
            $crud->field_type('id_vendor', 'hidden', $myaccount->id_vendor);

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('bank_name','account_name','account_number');

            $this->load->config('grocery_crud');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_vendor_bank','desc');
            $output = $crud->render();
            $this->template->set_template('backoffice/template_vendor');
            $this->template->content->view('vendor/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function contact() {
        try{
            //set template view
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            $crud->set_language("indonesian");

            $crud->set_table('vendor_contact');
            $crud->set_subject('Vendor Contact');

            $myaccount = $this->myglobal->getLoggedInVendor();

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('name','email','phone','address','fax','website'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('name','email','phone','address','fax','website');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('name','email','phone','address','fax','website');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('name','email','phone','address','fax','website');

            //auto
            $crud->field_type('id_vendor', 'hidden', $myaccount->id_vendor);

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('name','email','phone','address','fax','website');

            $this->load->config('grocery_crud');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_vendor_contact','desc');
            $output = $crud->render();
            $this->template->set_template('backoffice/template_vendor');
            $this->template->content->view('vendor/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function social_media() {
        try{
            //set template view
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            $crud->set_language("indonesian");

            $crud->set_table('vendor_social_media');
            $crud->set_subject('Vendor Social Media');

            $myaccount = $this->myglobal->getLoggedInVendor();

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('name','url'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('name','url');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('name','url');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('name','url');

            //auto
            $crud->field_type('id_vendor', 'hidden', $myaccount->id_vendor);

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('name','url');

            $this->load->config('grocery_crud');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_vendor_social_media','desc');
            $output = $crud->render();
            $this->template->set_template('backoffice/template_vendor');
            $this->template->content->view('vendor/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function testimonial() {
        try{
            //set template view
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            $crud->set_language("indonesian");
            $crud->unset_edit();
            $crud->unset_delete();

            $crud->set_table('vendor_testimonial');
            $crud->set_subject('Vendor Testimonial');

            $myaccount = $this->myglobal->getLoggedInVendor();

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('name','email','country','subject','message','img','status'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('name','email','country','subject','message','img','status');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('name','email','country','subject','message','img','status');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('name','email','country','subject','message','img','status');

            //auto
            $crud->field_type('id_vendor', 'hidden', $myaccount->id_vendor);

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('name','email','country','subject','message','status');

            $this->load->config('grocery_crud');
            //set jenis file yang boleh diupload
            $crud->set_field_upload('img','uploads/vendor','gif|jpeg|jpg|png');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_vendor_testimonial','desc');
            $output = $crud->render();
            $this->template->set_template('backoffice/template_vendor');
            $this->template->content->view('vendor/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function product_category() {
        try{
            //set template view
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            $crud->set_language("indonesian");

            $crud->set_table('vendor_product_category');
            $crud->set_subject('Vendor Menu Group');

            $myaccount = $this->myglobal->getLoggedInVendor();

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('name','status'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('id_vendor','name','status');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('id_vendor','name','status');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('name','status');

            //auto
            $crud->field_type('id_vendor', 'hidden', $myaccount->id_vendor);

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('name','status');

            $this->load->config('grocery_crud');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_vendor_product_category','desc');
            $output = $crud->render();
            $this->template->set_template('backoffice/template_vendor');
            $this->template->content->view('vendor/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function product() {
        try{
            //set template view
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            $crud->set_language("indonesian");

            $crud->set_table('vendor_product');
            $crud->set_subject('Vendor Menu');

            $myaccount = $this->myglobal->getLoggedInVendor();

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('id_vendor_product_category','name','img','description','portion','price','status'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('id_vendor_product_category','name','img','description','portion','price','status');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('id_vendor_product_category','name','img','description','portion','price','status');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('id_vendor_product_category','name','img','description','portion','price','status');

            $crud->display_as('id_vendor_product_category','Menu Group');
            $crud->set_subject('Menu Group');
            $crud->set_relation('id_vendor_product_category','vendor_product_category','name');

            //auto
            $crud->field_type('id_vendor', 'hidden', $myaccount->id_vendor);

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('id_vendor_product_category','name','img','description','portion','price','status');

            $this->load->config('grocery_crud');
            //set jenis file yang boleh diupload
            $crud->set_field_upload('img','uploads/vendor','gif|jpeg|jpg|png');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_vendor_product','desc');
            $output = $crud->render();
            $this->template->set_template('backoffice/template_vendor');
            $this->template->content->view('vendor/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function faq() {
        try{
            //set template view
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            $crud->set_language("indonesian");

            $crud->set_table('vendor_faq');
            $crud->set_subject('Vendor FAQ');

            $myaccount = $this->myglobal->getLoggedInVendor();

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('question','answer'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('id_vendor','question','answer');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('id_vendor','question','answer');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('question','answer');

            //auto
            $crud->field_type('id_vendor', 'hidden', $myaccount->id_vendor);

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('question','answer');

            $this->load->config('grocery_crud');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_vendor_faq','desc');
            $output = $crud->render();
            $this->template->set_template('backoffice/template_vendor');
            $this->template->content->view('vendor/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function picture() {
        try{
            //set template view
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            $crud->set_language("indonesian");

            $crud->set_table('vendor_picture');
            $crud->set_subject('Vendor Picture');

            $myaccount = $this->myglobal->getLoggedInVendor();

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('img','caption'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('id_vendor','img','caption');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('id_vendor','img','caption');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('img','caption');

            //auto
            $crud->field_type('id_vendor', 'hidden', $myaccount->id_vendor);

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('img','caption');

            $this->load->config('grocery_crud');
            //set jenis file yang boleh diupload
            $crud->set_field_upload('img','uploads/vendor','gif|jpeg|jpg|png');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_vendor_picture','desc');
            $output = $crud->render();
            $this->template->set_template('backoffice/template_vendor');
            $this->template->content->view('vendor/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function video() {
        try{
            //set template view
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            $crud->set_language("indonesian");

            $crud->set_table('vendor_video');
            $crud->set_subject('Vendor Video');

            $myaccount = $this->myglobal->getLoggedInVendor();

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('thumbnail','title','embed_youtube'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('id_vendor','thumbnail','title','embed_youtube');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('id_vendor','thumbnail','title','embed_youtube');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('thumbnail','title','embed_youtube');

            //auto
            $crud->field_type('id_vendor', 'hidden', $myaccount->id_vendor);

            //set kolom yang thumbnail(wajib diisi)
            $crud->required_fields('thumbnail','title','embed_youtube');

            $this->load->config('grocery_crud');
            //set jenis file yang boleh diupload
            $crud->set_field_upload('thumbnail','uploads/vendor','gif|jpeg|jpg|png');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_vendor_video','desc');
            $output = $crud->render();
            $this->template->set_template('backoffice/template_vendor');
            $this->template->content->view('vendor/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function transaksi() {
        try{
            //set template view
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);
            $this->config->set_item('grocery_crud_dialog_color','unique-color');
            $this->config->set_item('grocery_crud_dialog_text_color','white');
            $crud = new grocery_CRUD();

            $crud->set_theme('mdb'); // magic code
            $crud->set_language("indonesian");

            $crud->set_table('transaksi');
            $crud->set_subject('Manage Data Vendor');

            $myaccount = $this->myglobal->getLoggedInVendor();

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('tanggal_transaksi','id_driver','total_traksaksi','total_fee','total_fee_driver','total_fee_sistem','img'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('tanggal_transaksi','tipe','id_relasi','id_driver','total_fee','total_traksaksi','total_fee_driver','total_fee_sistem','img');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('tanggal_transaksi','tipe','id_relasi','id_driver','total_fee','total_traksaksi','total_fee_driver','total_fee_sistem','img');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('tanggal_transaksi','tipe','id_relasi','id_driver','total_fee','total_traksaksi','img');

            $crud->unset_edit();
            $crud->unset_delete();
            //field type digunakan untuk menginputkan isi data yang sudah pasti, supaya tidak perlu di tampilkan di kolom add 
            $crud->field_type('tipe', 'hidden', 'Vendor');
            $crud->field_type('total_fee', 'hidden');
            $crud->field_type('total_fee_driver', 'hidden' );
            $crud->field_type('total_fee_sistem', 'hidden');
            $crud->field_type('id_relasi', 'hidden', $myaccount->id_vendor);
            /*$crud->field_type('id_driver', 'hidden', $id_driver']);*/
            //auto

            $crud->display_as('tipe','Jenis Transaksi')->display_as('id_relasi','Vendor')->display_as('id_driver','Driver')->display_as('img','Foto Bukti Transaksi(Struk)');
            $crud->set_relation('id_driver','driver','nama');

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('tanggal_transaksi','tipe','id_relasi','id_driver','img');

            //call back hitung fee
            $crud->callback_before_insert(array($this,'hitung_fee'));
            $crud->callback_before_update(array($this,'hitung_fee'));

            $this->load->config('grocery_crud');
            //set jenis file yang boleh diupload
            $crud->set_field_upload('img','uploads/transaksi','gif|jpeg|jpg|png');
            
            //data diorder berdasarkan apa
            $crud->order_by('tanggal_transaksi','desc');
            $output = $crud->render();
            $this->template->set_template('backoffice/template_vendor');
            $this->template->content->view('vendor/template.php', $output);
            $this->template->publish();
        }
        catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function hitung_fee($post_array)
    {
        $myaccount = $this->myglobal->getLoggedInVendor();
        $total_fee = ($myaccount->persentase_fee/100)*$post_array['total_traksaksi'];
        $total_fee_driver = ($myaccount->persentase_fee_driver/100)*$total_fee;
        $total_fee_sistem = ($myaccount->persentase_fee_sistem/100)*$total_fee;

        $post_array['total_fee'] = $total_fee;
        $post_array['total_fee_driver'] = $total_fee_driver;
        $post_array['total_fee_sistem'] = $total_fee_sistem;

        $drivernya = $this->db->query("SELECT kredit FROM driver WHERE id_driver='$post_array[id_driver]' ")->row();
        //update kredit driver
        $this->Vendor_model->updateData(array(
                'kredit'     => $drivernya->kredit+$total_fee_driver
            ), array('id_driver' => $post_array['id_driver']), 'driver');

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