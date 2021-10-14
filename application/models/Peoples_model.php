<?php

class Peoples_model extends CI_Model
{


    public function get_peoples($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name', $keyword);
            $this->db->or_like('address', $keyword);
            $this->db->or_like('email', $keyword);
        }
        $query = $this->db->get('peoples', $limit, $start);
        return $query->result_array();
    }
    public function count_rows()
    {


        $rows = $this->db->get('peoples');
        return  $rows->num_rows();
    }
    public function jumlah_row()
    {

        $jumlah = $this->db->get('peoples');
        return $jumlah->num_rows();
    }
}