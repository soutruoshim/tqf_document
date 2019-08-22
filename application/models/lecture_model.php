<?php
class lecture_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	function fetch_data(){
		$this->db->select('tbl_lecture.lec_id, tbl_lecture.f_name, tbl_lecture.l_name, tbl_department.department_id, tbl_department.department_name');
		$this->db->from('tbl_lecture');
		$this->db->join('tbl_department', 'tbl_lecture.department_id=tbl_department.department_id');
		$this->db->limit($_POST['length'], $_POST['start']);
		$query=$this->db->get();
		return $query->result();
	}

	function fetch_single_data($id)
	{
		$this->db->where("position_id", $id);
		$query = $this->db->get("tbl_position");
		return $query->result();
	}

	function insert_position_data($data)
	{
		$this->db->insert('tbl_position', $data);
	}
	function update_position_data($id,$data)
	{
		$this->db->where("position_id", $id);
		$this->db->update("tbl_position", $data);
	}
	function delete_position_data($id){
		$this->db->where("lec_id", $id);
		$this->db->delete("tbl_lecture");
		//DELETE FROM tbl_position WHERE id = $id
	}
	function get_filtered_data(){
		$query = $this->db->get('tbl_lecture');
		return $query->num_rows();
	}
	function get_all_data()
	{
		$this->db->select("*");
		$this->db->from('tbl_lecture');
		return $this->db->count_all_results();
	}
}
