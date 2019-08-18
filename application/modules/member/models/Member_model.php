<?php

/**
 * Created by Yanno Dwi Ananda
 * Date: 12/18/2017
 * Time: 9:53 AM
 */
class Member_model extends CI_Model {

    function login($email, $password)
    {
        $this->db->from('member');
        $this->db->where('email', $email);
        $this->db->where('status','Active');
        //$this->db->or_where_in('email', $username);
        $this->db->limit(1);
        $row = $this->db->get()->row();

        if ($row)
        {
            if($this->encryption->decrypt($row->password)==$password)
                return $row;
            else
                return false;
        } else
        {
            return false;
        }
    }
}