<?php
class position_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_positions()
    {
        $this->db->order_by('position_name');
        $query = $this->db->get('tbl_position');
        return $query->result_array();
    }
}