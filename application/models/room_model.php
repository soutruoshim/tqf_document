<?php
class Room_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function fetch_rooms()
    {
        $this->db->order_by('room_id');
        $query = $this->db->get('tbl_room');
        return $query->result();
    }
    public function get_rooms2($building_id)
    {
        if(isset($_POST["search"]["value"]))
        {
            $this->db->like("room_name", $_POST["search"]["value"]);
            //$this->db->or_like("room_id", $_POST["search"]["value"]);

            $this->db->where("building_id", $building_id);
            $this->db->limit($_POST['length'], $_POST['start']);
            $query=$this->db->get("tbl_room")->result();
            return $query;
        }
        if(!isset($_POST["search"]["value"])){
            $this->db->where("building_id", $building_id);
            $this->db->limit($_POST['length'], $_POST['start']);
            $query=$this->db->get("tbl_room")->result();
            return $query;
        }


    }
    function get_filtered_data(){
        $query = $this->db->get('tbl_room');
        return $query->num_rows();
    }
    function get_all_data()
    {
        $this->db->select("*");
        $this->db->from('tbl_room');
        return $this->db->count_all_results();
    }
    function insert_room_data($data)
    {
        $this->db->insert('tbl_room', $data);
    }
    function fetch_single_data($id)
    {
        $this->db->where("room_id", $id);
        $query = $this->db->get("tbl_room");
        return $query->result();
    }
    function update_room_data($id,$data)
    {
        $this->db->where("room_id", $id);
        $this->db->update("tbl_room", $data);
    }
    function delete_single_room($id)
    {
        $this->db->where("room_id", $id);
        $this->db->delete("tbl_room");
        //DELETE FROM users WHERE id = '$user_id'
    }
}