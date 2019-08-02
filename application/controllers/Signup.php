<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function index()
	{
		$data['user_types']=$this->user_type_model->get_user_types();
        $data['departments']=$this->department_model->get_departments();
        $data['positions']=$this->position_model->get_positions();

        $this->load->view('pages/signup',$data);
	}

    public function create_user(){
        $email= $this->input->post('email');
        if($this->check_email_exists($email)){
            if($this->uri->segment(3)==1){

                $data_acc=array(
                    'email' => $email,
                    'password' => md5($this->input->post('password')),
                    'type_id' => 1,
                );

                $acc_id=$this->account_model->insert_account($data_acc);

                $data_lec = array(
                    'acc_id' => $acc_id,
                    'f_name' => $this->input->post('lec_f_name'),
                    'l_name' => $this->input->post('lec_l_name'),
                    'gender' => $this->input->post('lec_gender'),
                    'birthday' => $this->input->post('lec_birthday'),
                    'position_id' => $this->input->post('lec_position'),
                    'department_id' => $this->input->post('lec_department'),
                    'date_in_work' => $this->input->post('lec_date_in_work'),
                    'start_work' => $this->input->post('lec_startwork'),
                    'img_profile' => "noimage.png"
                );

                $this->lecture_model->insert_lecture($data_lec);


                echo "success";
            }

            if($this->uri->segment(3)==2){
                $data_acc=array(
                    'email' => $email,
                    'password' => md5($this->input->post('password')),
                    'type_id' => 2,
                );

                $acc_id=$this->account_model->insert_account($data_acc);

                $data_stu = array(
                    'acc_id' => $acc_id,
                    'f_name' => $this->input->post('stu_f_name'),
                    'l_name' => $this->input->post('stu_l_name'),
                    'gender' => $this->input->post('stu_gender'),
                    'department_id' => $this->input->post('stu_department'),
                    'img_profile' => "noimage.png"
                );

                $this->student_model->insert_student($data_stu);

                echo 'success';
            }

            if($this->uri->segment(3)==3){
                $data_acc=array(
                    'email' => $email,
                    'password' => md5($this->input->post('password')),
                    'type_id' => 3,
                );

                $acc_id=$this->account_model->insert_account($data_acc);

                $data_head_department = array(
                    'acc_id' => $acc_id,
                    'f_name' => $this->input->post('h_f_name'),
                    'l_name' => $this->input->post('h_l_name'),
                    'department_id' => $this->input->post('h_department'),
                    'img_profile' => "noimage.png"
                );

                $this->head_department_model->insert_head_department($data_head_department);

                echo 'success';
            }
            if($this->uri->segment(3)==4){
                $data_acc=array(
                    'email' => $email,
                    'password' => md5($this->input->post('password')),
                    'type_id' => 4,
                );

                $acc_id=$this->account_model->insert_account($data_acc);

                $data_staff = array(
                    'acc_id' => $acc_id,
                    'f_name' => $this->input->post('sta_f_name'),
                    'l_name' => $this->input->post('sta_l_name'),
                    'gender' => $this->input->post('sta_gender'),
                    'birthday' => $this->input->post('sta_birthday'),
                    'position_id' => $this->input->post('sta_position'),
                    'date_in_work' => $this->input->post('sta_date_in_work'),
                    'start_work' => $this->input->post('sta_startwork'),
                    'img_profile' => "noimage.png"
                );

                $this->staff_model->insert_staff($data_staff);

                echo 'success';
            }
        }else{

            echo "failed";
        }

    }

    function check_email_exists($email){
        if($this->account_model->check_email_exists($email)){
            return true;
        }else{
            return false;
        }
    }

}
