<?php
class head_department_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function insert_head_department($data)
    {
        $this->db->insert('tbl_head_department', $data);
    }
}