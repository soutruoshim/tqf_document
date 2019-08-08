<?php

class Place_study extends CI_Controller {

    public function index(){

        $data['title']=ucfirst("Building");
        $this->load->view('admin_pages/templates/header');
        $this->load->view('admin_pages/pages/place_study');
        $this->load->view('admin_pages/templates/footer');
    }
    public function insert_update_building()
    {
        if ($this->input->post('action1') == "Add") {
            $insert_data = array(
                'building_name' => $this->input->post('building_name')
            );
            $this->building_model->insert_building_data($insert_data);

            echo 'building Inserted!';
        }

        if ($this->input->post('action1') == "Edit") {
            $updated_data = array(
                'building_name' => $this->input->post('building_name')
            );
            $this->building_model->update_building_data($this->input->post("building_id"), $updated_data);
            echo 'Data Updated';
        }
    }
    function fetch_building(){

        $fetch_data = $this->building_model->fetch_data();
        $fetch_data2 = $this->building_model->fetch_data2();
        $data = array();
        foreach($fetch_data as $row)
        {
            $sub_array = array();
            $sub_array[] = $row->building_id;
            $sub_array[] = $row->building_name;
            $count=0;
            foreach ($fetch_data2 as $row2){
                if($row2->building_id == $row->building_id) {
                    $count= $row2->count_room;
                    break;
                }
            }
            $sub_array[] = '<button type="button" class="btn btn-primary show_room" id="'.$row->building_id.'">room <span class="badge badge-light">'.$count.'</span><span class="sr-only">unread messages</span></button>';
            $sub_array[] = '<button type="button" name="update" id="'.$row->building_id.'" class="btn btn-warning btn-xs update_building">Update</button>';
            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->building_model->get_all_data(),
            "recordsFiltered"     =>     $this->building_model->get_filtered_data(),
            "data"                    =>     $data
        );
        echo json_encode($output);
    }
    function fetch_single_building()
    {
        $output = array();
        $data = $this->building_model->fetch_single_data($_POST["building_id"]);

        foreach ($data as $row) {
            $output['building_name'] = $row->building_name;

        }
        echo json_encode($output);
    }

    //fetch room
    function fetch_room(){
        $fetch_data = $this->room_model->get_rooms2($_POST["building_id"]);
        $data = array();
        foreach($fetch_data as $row)
        {
            $sub_array = array();
            $sub_array[] = $row->room_id;
            $sub_array[] = $row->room_name;

            $sub_array[] = '<button type="button" name="update" id="'.$row->room_id.'" class="btn btn-warning btn-xs update_room">Update</button>';
            $sub_array[] = '<button type="button" name="delete" id="'.$row->room_id.'" class="btn btn-danger btn-xs delete_room">Delete</button>';
            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->room_model->get_all_data(),
            "recordsFiltered"     =>     $this->room_model->get_filtered_data(),
            "data"                    =>     $data
        );
        echo json_encode($output);
    }

    public function insert_update_room()
    {
        if ($this->input->post('raction1') == "Add") {
            $insert_data = array(
                'room_name' => $this->input->post('room_name'),
                'building_id' => $this->uri->segment(4)
            );
            $this->room_model->insert_room_data($insert_data);

            echo 'room Inserted!';
        }

        if ($this->input->post('raction1') == "Edit") {
            $updated_data = array(
                'room_name' => $this->input->post('room_name')
            );
            $this->room_model->update_room_data($this->input->post("room_id"), $updated_data);
            echo 'room Updated!';
        }
    }
    function fetch_single_room()
    {
        $output = array();
        $data = $this->room_model->fetch_single_data($_POST["room_id"]);

        foreach ($data as $row) {
            $output['room_name'] = $row->room_name;

        }
        echo json_encode($output);
    }
    function delete_room()
    {
        $this->room_model->delete_single_room($_POST["room_id"]);
        echo 'Data Deleted';
    }
}
?>
