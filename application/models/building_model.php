<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Building_model extends CI_Model {


    function fetch_data(){
        $this->db->limit($_POST['length'], $_POST['start']);
        $query=$this->db->get("tbl_building");
        return $query->result();
    }
    function fetch_data2(){
        $select =array('f.*','d.*','COUNT(d.building_id) AS `count_room`');
        $this->db->select($select);
        $this->db->from('tbl_building f');
        $this->db->group_by('f.building_id');
        $this->db->join('tbl_room d', 'd.building_id = f.building_id');
        $query = $this->db->get();
        return $query->result();
    }
    function fetch_single_data($id)
    {
        $this->db->where("building_id", $id);
        $query = $this->db->get("tbl_building");
        return $query->result();
    }

    function insert_building_data($data)
    {
        $this->db->insert('tbl_building', $data);
    }
    function update_building_data($id,$data)
    {
        $this->db->where("building_id", $id);
        $this->db->update("tbl_building", $data);
    }
    function delete_building_data($id){
        $this->db->where("building_id", $id);
        $this->db->delete("building");
        //DELETE FROM tbl_building WHERE id = $id
    }
    function get_filtered_data(){
        $query = $this->db->get('tbl_building');
        return $query->num_rows();
    }
    function get_all_data()
    {
        $this->db->select("*");
        $this->db->from('tbl_building');
        return $this->db->count_all_results();
    }
}
