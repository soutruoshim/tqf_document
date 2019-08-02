<?php

class Faculty extends CI_Controller {

    public function index(){

        $data['title']=ucfirst("Faculty");
        $this->load->view('admin_pages/templates/header');
        $this->load->view('admin_pages/pages/faculty');
        $this->load->view('admin_pages/templates/footer');
    }
    public function insert_update_faculty()
    {
        if ($this->input->post('action1') == "Add") {
            $insert_data = array(
                'faculty_name' => $this->input->post('faculty_name')
            );
            $this->faculty_model->insert_faculty_data($insert_data);

            echo 'Faculty Inserted!';
        }

        if ($this->input->post('action1') == "Edit") {
            $updated_data = array(
                'faculty_name' => $this->input->post('faculty_name')
            );
            $this->faculty_model->update_faculty_data($this->input->post("faculty_id"), $updated_data);
            echo 'Data Updated';
        }
    }
    function fetch_faculty(){

        $fetch_data = $this->faculty_model->fetch_data();
        $fetch_data2 = $this->faculty_model->fetch_data2();
        $data = array();
        foreach($fetch_data as $row)
        {
            $sub_array = array();
            $sub_array[] = $row->faculty_id;
            $sub_array[] = $row->faculty_name;
            $count=0;
            foreach ($fetch_data2 as $row2){
                if($row2->faculty_id == $row->faculty_id) {
                    $count= $row2->count_department;
                    break;
                }
            }
            $sub_array[] = '<button type="button" class="btn btn-primary show_department" id="'.$row->faculty_id.'">Department <span class="badge badge-light">'.$count.'</span><span class="sr-only">unread messages</span></button>';
            $sub_array[] = '<button type="button" name="update" id="'.$row->faculty_id.'" class="btn btn-warning btn-xs update_faculty">Update</button>';
            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->faculty_model->get_all_data(),
            "recordsFiltered"     =>     $this->faculty_model->get_filtered_data(),
            "data"                    =>     $data
        );
        echo json_encode($output);
    }
    function fetch_single_faculty()
    {
        $output = array();
        $data = $this->faculty_model->fetch_single_data($_POST["faculty_id"]);

        foreach ($data as $row) {
            $output['faculty_name'] = $row->faculty_name;

        }
        echo json_encode($output);
    }

    //fetch department
    function fetch_department(){
        $fetch_data = $this->department_model->get_departments2($_POST["faculty_id"]);
        $data = array();
        foreach($fetch_data as $row)
        {
            $sub_array = array();
            $sub_array[] = $row->department_id;
            $sub_array[] = $row->department_name;

            $sub_array[] = '<button type="button" name="update" id="'.$row->department_id.'" class="btn btn-warning btn-xs update_department">Update</button>';
            $sub_array[] = '<button type="button" name="delete" id="'.$row->department_id.'" class="btn btn-danger btn-xs delete_department">Delete</button>';
            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->department_model->get_all_data(),
            "recordsFiltered"     =>     $this->department_model->get_filtered_data(),
            "data"                    =>     $data
        );
        echo json_encode($output);
    }

    public function insert_update_department()
    {
        if ($this->input->post('dep_action1') == "Add") {
            $insert_data = array(
                'department_name' => $this->input->post('department_name'),
                'faculty_id' => $this->uri->segment(4)
            );
            $this->department_model->insert_department_data($insert_data);

            echo 'Department Inserted!';
        }

        if ($this->input->post('dep_action1') == "Edit") {
            $updated_data = array(
                'department_name' => $this->input->post('department_name')
            );
            $this->department_model->update_department_data($this->input->post("department_id"), $updated_data);
            echo 'Department Updated!';
        }
    }
    function fetch_single_department()
    {
        $output = array();
        $data = $this->department_model->fetch_single_data($_POST["department_id"]);

        foreach ($data as $row) {
            $output['department_name'] = $row->department_name;

        }
        echo json_encode($output);
    }
    function delete_department()
    {
        $this->department_model->delete_single_department($_POST["department_id"]);
        echo 'Data Deleted';
    }
}
?>
