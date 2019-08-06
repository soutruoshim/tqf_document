<?php

class position extends CI_Controller {

    public function index(){

        $data['title']=ucfirst("position");
        $this->load->view('admin_pages/templates/header');
        $this->load->view('admin_pages/pages/position');
        $this->load->view('admin_pages/templates/footer');
    }
    public function insert_update_position()
    {
        if ($this->input->post('action1') == "Add") {
            $insert_data = array(
                'position_name' => $this->input->post('position_name')
            );
            $this->position_model->insert_position_data($insert_data);

            echo 'Position Inserted!';
        }

        if ($this->input->post('action1') == "Edit") {
            $updated_data = array(
                'position_name' => $this->input->post('position_name')
            );
            $this->position_model->update_position_data($this->input->post("position_id"), $updated_data);
            echo 'Position Updated';
        }
    }
    function fetch_position(){

        $fetch_data = $this->position_model->fetch_data();
        $data = array();
        foreach($fetch_data as $row)
        {
            $sub_array = array();
            $sub_array[] = $row->position_id;
            $sub_array[] = $row->position_name;

            $sub_array[] = '<button type="button" name="update" id="'.$row->position_id.'" class="btn btn-warning btn-xs update_position">Update</button>';
            $sub_array[] = '<button type="button" name="delete" id="'.$row->position_id.'" class="btn btn-danger btn-xs delete_position">Delete</button>';
            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->position_model->get_all_data(),
            "recordsFiltered"     =>     $this->position_model->get_filtered_data(),
            "data"                    =>     $data
        );
        echo json_encode($output);
    }
    function fetch_single_position()
    {
        $output = array();
        $data = $this->position_model->fetch_single_data($_POST["position_id"]);

        foreach ($data as $row) {
            $output['position_name'] = $row->position_name;

        }
        echo json_encode($output);
    }

    function delete_position()
    {
        $this->position_model->delete_position_data($_POST["position_id"]);
        echo 'Data Deleted';
    }
}
?>
