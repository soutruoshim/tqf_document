<?php
class lecture_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function insert_lecture($data)
    {
        $this->db->insert('tbl_lecture', $data);
    }
}