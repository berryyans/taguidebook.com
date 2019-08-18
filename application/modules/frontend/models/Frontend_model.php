<?php

/**
 * Created by Yanno Dwi Ananda
 * Date: 12/14/2017
 * Time: 2:47 PM
 */
class Frontend_model extends MY_Model {
	/*public function __construct() {
        parent::__construct();
    }*/
    
    var $table = 'hotel';
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function get_hotels($per_page, $offset, $sortfield, $orderBy, $search_string, $id=0)
    {
        if(empty($id)){
            //echo $per_page.'fff'.$offset.'fff'.$sortfield.'fff'.$orderBy;
            if(!empty($search_string)) {
                $this->db->like('nama',$search_string);
                $this->db->or_like('rate',$search_string);
                $this->db->or_like('alamat',$search_string);
            }
            $this->db->order_by("$sortfield", "$orderBy");
            $this->db->limit($per_page,$offset);
            $query = $this->db->get('hotel');
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
            return $data;
        }
        return false;
        } else {
        $query = $this->db->get_where('hotel', array('id_hotel' => $id));
        return $query->row_array();
        }
    }

    public function record_count($search_string) {
        if(!empty($search_string)) {
            $this->db->like('nama',$search_string);
            $this->db->or_like('rate',$search_string);
            $this->db->or_like('alamat',$search_string);
        }
       return $this->db->count_all_results("hotel");
    }
}