<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class course_model extends CI_Model {

    function fetch_data($department_id){
        $this->db->limit($_POST['length'], $_POST['start']);
        $this->db->where("department_id", $department_id);
        $query=$this->db->get("tbl_course");
        return $query->result();
    }
    //count course in department
    function fetch_count_couse(){
        $select =array('d.*','c.*','COUNT(d.department_id) AS `count_course`');
        $this->db->select($select);
        $this->db->from('tbl_department d');
        $this->db->group_by('d.department_id');
        $this->db->join('tbl_course c', 'd.department_id = c.department_id');
        $query = $this->db->get();
        return $query->result();
    }

    function fetch_single_data($id)
    {
        $this->db->where("course_id", $id);
        $query = $this->db->get("tbl_course");
        return $query->result();
    }

    function insert_course_data($data)
    {
        $this->db->insert('tbl_course', $data);
    }
    function update_course_data($id,$data)
    {
        $this->db->where("course_id", $id);
        $this->db->update("tbl_course", $data);
    }
    function delete_course_data($id){
        $this->db->where("course_id", $id);
        $this->db->delete("tbl_course");
        //DELETE FROM tbl_faculty WHERE id = $id
    }
    function get_filtered_data(){
        $query = $this->db->get('tbl_course');
        return $query->num_rows();
    }
    function get_all_data()
    {
        $this->db->select("*");
        $this->db->from('tbl_course');
        return $this->db->count_all_results();
    }
}
