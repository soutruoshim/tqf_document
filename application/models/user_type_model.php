<?php
class user_type_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_user_types()
    {
        $this->db->order_by('type_name');
        $query = $this->db->get('tbl_user_type');
        return $query->result_array();
    }
    public function get_user_type($type_id)
    {
        $this->db->where('type_id',$type_id);
        $query = $this->db->get('tbl_user_type');
        return $query;
    }
}
