<?php

class Course extends CI_Controller {
    // update test function
    public function index(){

        $data['title']=ucfirst("Faculty");
        $this->load->view('admin_pages/templates/header');
        $this->load->view('admin_pages/pages/course');
        $this->load->view('admin_pages/templates/footer');
    }

    function fetch_department(){

        $fetch_data = $this->department_model->fetch_departments();
        $fetch_data2 = $this->course_model->fetch_count_couse();
        $data = array();

        foreach($fetch_data as $row)
        {
            $sub_array = array();
            $sub_array[] = $row->department_id;
            $sub_array[] = $row->department_name;
            $count=0;
            foreach ($fetch_data2 as $row2){
                if($row2->department_id == $row->department_id) {
                    $count= $row2->count_course;
                    break;
                }
            }
            $sub_array[] = '<button type="button" class="btn btn-primary show_course" id="'.$row->department_id.'">Course <span class="badge badge-light">'.$count.'</span><span class="sr-only">unread messages</span></button>';
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
