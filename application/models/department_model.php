<?php
class department_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

//    public function get_departments()
//    {
//
//        $this->db->order_by('department_name');
//        $query = $this->db->get('tbl_department');
//        return $query->result_array();
//    }
    public function get_departments2($faculty_id)
    {
        if(isset($_POST["search"]["value"]))
        {
            $this->db->like("department_name", $_POST["search"]["value"]);
            //$this->db->or_like("department_id", $_POST["search"]["value"]);

            $this->db->where("faculty_id", $faculty_id);
            $this->db->limit($_POST['length'], $_POST['start']);
            $query=$this->db->get("tbl_department")->result();
            return $query;
        }
        if(!isset($_POST["search"]["value"])){
            $this->db->where("faculty_id", $faculty_id);
            $this->db->limit($_POST['length'], $_POST['start']);
            $query=$this->db->get("tbl_department")->result();
            return $query;
        }


    }
    function get_filtered_data(){
        $query = $this->db->get('tbl_department');
        return $query->num_rows();
    }
    function get_all_data()
    {
        $this->db->select("*");
        $this->db->from('tbl_department');
        return $this->db->count_all_results();
    }
    function insert_department_data($data)
    {
        $this->db->insert('tbl_department', $data);
    }
    function fetch_single_data($id)
    {
        $this->db->where("department_id", $id);
        $query = $this->db->get("tbl_department");
        return $query->result();
    }
    function update_department_data($id,$data)
    {
        $this->db->where("department_id", $id);
        $this->db->update("tbl_department", $data);
    }
    function delete_single_department($id)
    {
        $this->db->where("department_id", $id);
        $this->db->delete("tbl_department");
        //DELETE FROM users WHERE id = '$user_id'
    }
}