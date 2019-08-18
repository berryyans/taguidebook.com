<?php

/**
 * Created by Yanno Dwi Ananda
 * Date: 1/17/2018
 * Time: 11:04 AM
 */
class Data_top_menumanager extends MY_Model {

    function returnparentmenus()
    {

        $sql =  "SELECT t0.*,
                        t0.id AS lvl0_id,
                        t0.menu_title AS lvl0_name,
                        t0.menu_parent AS lv10_menuparent,
                        t0.URL as lv10_link,
                        t1.id AS lvl1_id,
                        t1.menu_title as lvl1_name,
                        t1.menu_parent AS lv11_menuparent,
                        t1.URL as lv11_link,
                        t2.id AS lvl2_id,
                        t2.menu_title as lvl2_name,
                        t2.menu_parent AS lv12_menuparent,
                        t2.URL as lv12_link,
                        t3.id AS lvl3_id,
                        t3.menu_title as lvl3_name,
                        t3.menu_parent AS lv13_menuparent,
                        t3.URL as lv13_link 
                   FROM top_menumanager t0 
              LEFT JOIN top_menumanager t1 ON t1.menu_parent = t0.id 
              LEFT JOIN top_menumanager t2 ON t2.menu_parent = t1.id 
              LEFT JOIN top_menumanager t3 ON t3.menu_parent = t2.id";

        $sql .= " ORDER BY t0.menu_order,t1.menu_order,t2.menu_order,t3.menu_order";

        $query = $this->db->query($sql);
        $result = $query->result_array();//$query->next_result();
        $query->free_result();

        return $result;
    }

    function updateMenu($id, $parentId, $order)
    {
        $this->db->limit(1, 0);
        $this->db->select_max('menu_order');
        $this->db->from('top_menumanager');
        $row1 = $this->db->get()->row();

        $myorder = $row1->menu_order == 0 ? 1 : $row1->menu_order + 1;
        $data = array(
            'menu_parent' => $parentId,
            'menu_sort'   => $order,
            'menu_order'  => $myorder
        );

        $this->db->where('id', $id);
        $this->db->update('top_menumanager', $data);

        return $id;
    }

    function resetTopMenuManagerOrder()
    {
        $data = array(
            'menu_order' => 0
        );
        $this->db->update('top_menumanager', $data);
    }

    function getTopOrderPlusOne()
    {
        $this->db->select_max('menu_order');
        $this->db->from('top_menumanager');
        $row1 = $this->db->get()->row();

        return $row1->menu_order + 1;
    }

    function getParentOrder($parentId)
    {
        $this->db->limit(1, 0);
        $this->db->from('top_menumanager');
        $this->db->where(array('menu_parent' => $parentId));
        $this->db->order_by('menu_order', 'DESC');
        $row = $this->db->get()->row();
        if (isset($row))
            return $row->menu_order + 1;

        $this->db->from('top_menumanager');
        $this->db->where(array('id' => $parentId));
        $row = $this->db->get()->row();
        if (isset($row))
            return $row->menu_order + 1;
    }

    function incrementOrder($number)
    {
        $sql = 'UPDATE top_menumanager SET `menu_order` = `menu_order`+1 WHERE `menu_order`> ' . $number;
        $this->db->query($sql);
    }
}