<?php

/**
 * Created by Yanno Dwi Ananda
 * Date: 12/14/2017
 * Time: 2:47 PM
 */
class DataStatistic extends MY_Model {
    
    public function __construct() {
        parent::__construct();
         
        $ip      = $_SERVER['REMOTE_ADDR'];
        $tanggal = date("Y-m-d");
        $waktu   = time(); 
        $cekk = $this->db->query("SELECT * FROM statistic WHERE ip='$ip' AND tanggal='$tanggal'");
        $rowh = $cekk->row_array();
        if($cekk->num_rows() == 0){
            $datadb = array('ip'=>$ip, 'tanggal'=>$tanggal, 'hits'=>'1', 'online'=>$waktu);
            $this->db->insert('statistic',$datadb);
        }else{
            $hitss = $rowh['hits'] + 1;
            $datadb = array('ip'=>$ip, 'tanggal'=>$tanggal, 'hits'=>$hitss, 'online'=>$waktu);
            $array = array('ip' => $ip, 'tanggal' => $tanggal);
            $this->db->where($array);
            $this->db->update('statistic',$datadb);
        }
    }
    
    function pengunjung(){
        return $this->db->query("SELECT * FROM statistic WHERE tanggal='".date("Y-m-d")."' GROUP BY ip");
    }
    function totalpengunjung(){
        return $this->db->query("SELECT COUNT(hits) as total FROM statistic");
    }
    function hits(){
        return $this->db->query("SELECT SUM(hits) as total FROM statistic WHERE tanggal='".date("Y-m-d")."' GROUP BY tanggal");
    }
    function totalhits(){
        return $this->db->query("SELECT SUM(hits) as total FROM statistic");
    }
    function pengunjungonline(){
        $bataswaktu       = time() - 300;
        return $this->db->query("SELECT * FROM statistic WHERE online > '$bataswaktu'");
    }
}