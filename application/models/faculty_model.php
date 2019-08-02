<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class faculty_model extends CI_Model {


    function fetch_data(){
        $this->db->limit($_POST['length'], $_POST['start']);
        $query=$this->db->get("tbl_faculty");
        return $query->result();
    }
    function fetch_data2(){
        $select =array('f.*','d.*','COUNT(d.faculty_id) AS `count_department`');
        $this->db->select($select);
        $this->db->from('tbl_faculty f');
        $this->db->group_by('f.faculty_id');
        $this->db->join('tbl_department d', 'd.faculty_id = f.faculty_id');
        $query = $this->db->get();
        return $query->result();
    }
    function fetch_single_data($id)
    {
        $this->db->where("faculty_id", $id);
        $query = $this->db->get("tbl_faculty");
        return $query->result();
    }

    function insert_faculty_data($data)
    {
        $this->db->insert('tbl_faculty', $data);
    }
    function update_faculty_data($id,$data)
    {
        $this->db->where("faculty_id", $id);
        $this->db->update("tbl_faculty", $data);
    }
    function delete_faculty_data($id){
        $this->db->where("faculty_id", $id);
        $this->db->delete("faculty");
        //DELETE FROM tbl_faculty WHERE id = $id
    }
    function get_filtered_data(){
        $query = $this->db->get('tbl_faculty');
        return $query->num_rows();
    }
    function get_all_data()
    {
        $this->db->select("*");
        $this->db->from('tbl_faculty');
        return $this->db->count_all_results();
    }
}
