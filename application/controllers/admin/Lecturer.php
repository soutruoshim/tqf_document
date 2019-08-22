<?php

class Lecturer extends CI_Controller {
	public function insert_update_lecturer()
	{
		if ($this->input->post('action1') == "Add") {
			$insert_data = array(
				'lecturer_name' => $this->input->post('lecturer_name')
			);
			$this->lecturer_model->insert_lecturer_data($insert_data);

			echo 'lecturer Inserted!';
		}

		if ($this->input->post('action1') == "Edit") {
			$updated_data = array(
				'lecturer_name' => $this->input->post('lecturer_name')
			);
			$this->lecturer_model->update_lecturer_data($this->input->post("lecturer_id"), $updated_data);
			echo 'lecturer Updated';
		}
	}
	function fetch_lecturer(){

		$fetch_data = $this->lecture_model->fetch_data();
		$data = array();
		foreach($fetch_data as $row)
		{
			$sub_array = array();
			$sub_array[] = $row->lec_id;
			$sub_array[] = $row->f_name." ".$row->l_name;
			$sub_array[] = $row->department_name;
			$sub_array[] = "";
			$sub_array[] = '<button type="button" name="update" id="'.$row->lec_id.'" class="btn btn-warning btn-xs update_lecturer">Update</button>';
			$sub_array[] = '<button type="button" name="delete" id="'.$row->lec_id.'" class="btn btn-danger btn-xs delete_lecturer">Delete</button>';
			$data[] = $sub_array;
		}
		$output = array(
			"draw"                    =>     intval($_POST["draw"]),
			"recordsTotal"          =>      $this->lecture_model->get_all_data(),
			"recordsFiltered"     =>     $this->lecture_model->get_filtered_data(),
			"data"                    =>     $data
		);
		echo json_encode($output);
	}
	function fetch_single_lecturer()
	{
		$output = array();
		$data = $this->lecturer_model->fetch_single_data($_POST["lecturer_id"]);

		foreach ($data as $row) {
			$output['lecturer_name'] = $row->lecturer_name;

		}
		echo json_encode($output);
	}

	function delete_lecturer()
	{
		$this->lecturer_model->delete_lecturer_data($_POST["lecturer_id"]);
		echo 'Data Deleted';
	}
}
?>
