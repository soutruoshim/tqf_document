<?php
class staff_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function insert_staff($data)
    {
        $this->db->insert('tbl_staff', $data);
    }
}