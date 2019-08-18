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
        $this->template->content->view('manage/template.php', $output);
        $this->template->publish();
    }

    public function hotel() {
        try{
            //set template view
            $this->template->set_template('backoffice/template');
            $crud = new grocery_CRUD();
            $crud->set_theme('adminlte');
            $crud->set_language("indonesian");

            $crud->set_table('hotel');
            $crud->set_subject('Manage Data Hotel');

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('foto','nama','tanggal_lahir','jenis_kelamin','password','telpon','email','alamat','provinsi','kabupaten_kota','kode_pos','kendaraan','merek','model','tahun','plat_nomor','foto_stnk','foto_sim','kredit'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('foto','nama','tanggal_lahir','jenis_kelamin','password','telpon','email','alamat','provinsi','kabupaten_kota','kode_pos','kendaraan','merek','model','tahun','plat_nomor','foto_stnk','foto_sim','kredit');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('foto','nama','tanggal_lahir','jenis_kelamin','password','telpon','email','alamat','provinsi','kabupaten_kota','kode_pos','kendaraan','merek','model','tahun','plat_nomor','foto_stnk','foto_sim','kredit');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('foto','nama','tanggal_lahir','jenis_kelamin','password','telpon','email','alamat','provinsi','kabupaten_kota','kode_pos','kendaraan','merek','model','tahun','plat_nomor','foto_stnk','foto_sim','kredit');

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('nama','telpon','email');

            $this->load->config('grocery_crud');
            //set jenis file yang boleh diupload
            $crud->set_field_upload('foto','uploads/hotel','gif|jpeg|jpg|png');
            $crud->set_field_upload('foto_stnk','uploads/hotel','gif|jpeg|jpg|png');
            $crud->set_field_upload('foto_sim','uploads/hotel','gif|jpeg|jpg|png');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_hotel','desc');
            $output = $crud->render();
            //ini ga perlu diubah
            $this->template->content->view('manage/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function hotelbin() {
        try{
            //set template view
            $this->template->set_template('backoffice/template');
            $crud = new grocery_CRUD();
            $crud->set_theme('adminlte');
            $crud->set_language("indonesian");

            $crud->set_table('hotel');
            $crud->set_subject('Manage Data Hotel Berbintang');

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('foto','nama','id_kelas_hotel','rate','lokasi','fasilitas','deskripsi','id_jenis_kamar','alamat','telpon','email','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('foto','nama','id_kelas_hotel','rate','lokasi','fasilitas','deskripsi','id_jenis_kamar','alamat','telpon','email','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('foto','nama','id_kelas_hotel','rate','lokasi','fasilitas','deskripsi','id_jenis_kamar','alamat','telpon','email','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('foto','nama','id_kelas_hotel','rate','lokasi','fasilitas','deskripsi','id_jenis_kamar','alamat','telpon','email','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit');
            //Kolom yang berelasi dengan table lain
            $crud->set_relation('id_kelas_hotel','kelas_hotel','nama');

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('nama','telpon','email');

            $this->load->config('grocery_crud');
            //set jenis file yang boleh diupload
            $crud->set_field_upload('foto','uploads/hotelbin','gif|jpeg|jpg|png');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_hotel','desc');
            $output = $crud->render();
            //ini ga perlu diubah
            $this->template->content->view('manage/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function villa() {
        try{
            //set template view
            $this->template->set_template('backoffice/template');
            $crud = new grocery_CRUD();
            $crud->set_theme('adminlte');
            $crud->set_language("indonesian");

            $crud->set_table('villa');
            $crud->set_subject('Manage Data Villa');

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('foto','nama','rate','lokasi','fasilitas','deskripsi','id_jenis_kamar','alamat','telpon','email','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('foto','nama','rate','lokasi','fasilitas','deskripsi','id_jenis_kamar','alamat','telpon','email','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('foto','nama','rate','lokasi','fasilitas','deskripsi','id_jenis_kamar','alamat','telpon','email','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('foto','nama','rate','lokasi','fasilitas','deskripsi','id_jenis_kamar','alamat','telpon','email','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit');

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('nama','telpon','email');

            $this->load->config('grocery_crud');
            //set jenis file yang boleh diupload
            $crud->set_field_upload('foto','uploads/villa','gif|jpeg|jpg|png');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_villa','desc');
            $output = $crud->render();
            //ini ga perlu diubah
            $this->template->content->view('manage/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

     public function vendor() {
        try{
            //set template view
            $this->template->set_template('backoffice/template');
            $crud = new grocery_CRUD();
            $crud->set_theme('adminlte');
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
            //ini ga perlu diubah
            $this->template->content->view('manage/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

     public function restaurant() {
        try{
            //set template view
            $this->template->set_template('backoffice/template');
            $crud = new grocery_CRUD();
            $crud->set_theme('adminlte');
            $crud->set_language("indonesian");

            $crud->set_table('restoran');
            $crud->set_subject('Manage Data Restaurants');

            //kolom tabelnya apa aja yg di tampilin di tabel data
            $crud->columns('foto','nama','rate','lokasi','masakan','tipe','jam_buka','alamat','telpon','email','foto_menu','status','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit'); 
            //kolom apa aja yang mau di tampilin saat tambah data
            $crud->add_fields('foto','nama','rate','lokasi','masakan','tipe','jam_buka','alamat','telpon','email','foto_menu','status','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit');
            //kolom apa aja yang mau di tampilin saat edit data
            $crud->edit_fields('foto','nama','rate','lokasi','masakan','tipe','jam_buka','alamat','telpon','email','foto_menu','status','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit');
            //kolom apa aja yang mau di tampilin saat view detail data
            $crud->set_read_fields('foto','nama','rate','lokasi','masakan','tipe','jam_buka','alamat','telpon','email','foto_menu','status','id_provinsi','id_kabupaten_kota','id_kecamatan','kredit');

            //set kolom yang mandatory(wajib diisi)
            $crud->required_fields('nama','telpon','email');

            $this->load->config('grocery_crud');
            //set jenis file yang boleh diupload
            $crud->set_field_upload('foto','uploads/restaurant','gif|jpeg|jpg|png');
            $crud->set_field_upload('foto_menu','uploads/restaurant/menu','gif|jpeg|jpg|png');
            
            //data diorder berdasarkan apa
            $crud->order_by('id_restoran','desc');
            $output = $crud->render();
            //ini ga perlu diubah
            $this->template->content->view('manage/template.php', $output);
            $this->template->publish();
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
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
        $post_array['password'] = do_hash($post_array['password'].'@adDunyaa2$MataaAdDunyaa%4#AlMarAtus91Sholihah', 'md5');
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