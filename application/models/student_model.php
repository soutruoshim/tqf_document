<?php
class student_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function insert_student($data)
    {
        $this->db->insert('tbl_student', $data);
    }
}