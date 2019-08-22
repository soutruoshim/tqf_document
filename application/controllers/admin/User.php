<?php

class User extends CI_Controller {
	// update test function
	public function index(){

		$data['title']=ucfirst("Faculty");
		$this->load->view('admin_pages/templates/header');
		$this->load->view('admin_pages/pages/user');
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
	function fetch_single_department()
	{
		$output = array();
		$data = $this->department_model->fetch_single_data($_POST["department_id"]);

		foreach ($data as $row) {
			$output['department_name'] = $row->department_name;

		}
		echo json_encode($output);
	}

	//fetch course
	function fetch_course(){
		$fetch_data = $this->course_model->fetch_data($_POST["department_id"]);
		$data = array();
		foreach($fetch_data as $row)
		{
			$sub_array = array();
			$sub_array[] = $row->course_id;
			$sub_array[] = $row->course_name;

			$sub_array[] = '<button type="button" name="update" id="'.$row->course_id.'" class="btn btn-warning btn-xs update_course">Update</button>';
			$sub_array[] = '<button type="button" name="delete" id="'.$row->course_id.'" class="btn btn-danger btn-xs delete_course">Delete</button>';
			$data[] = $sub_array;
		}
		$output = array(
			"draw"                    =>     intval($_POST["draw"]),
			"recordsTotal"          =>      $this->course_model->get_all_data(),
			"recordsFiltered"     =>     $this->course_model->get_filtered_data(),
			"data"                    =>     $data
		);
		echo json_encode($output);
	}
	public function insert_update_course()
	{
		if ($this->input->post('action1') == "Add") {
			$insert_data = array(
				'course_name' => $this->input->post('course_name'),
				'department_id' => $this->uri->segment(4)
			);
			$this->course_model->insert_course_data($insert_data);

			echo 'Course Inserted!';
		}

		if ($this->input->post('action1') == "Edit") {
			$updated_data = array(
				'course_name' => $this->input->post('course_name')
			);
			$this->course_model->update_course_data($this->input->post("course_id"), $updated_data);
			echo 'Course Updated!';
		}
	}

	function fetch_single_course()
	{
		$output = array();
		$data = $this->course_model->fetch_single_data($_POST["course_id"]);

		foreach ($data as $row) {
			$output['course_name'] = $row->course_name;

		}
		echo json_encode($output);
	}

	function delete_course()
	{
		$this->course_model->delete_course_data($_POST["course_id"]);
		echo 'This Course Deleted';
	}
}
?>
