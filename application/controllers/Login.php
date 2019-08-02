<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/login');
	}
	public function login_validate()
    {

        $this->form_validation->set_rules('user_email', 'Email', 'required');
        $this->form_validation->set_rules('user_password', 'Password', 'required');

        if ($this->form_validation->run()) {

            $user_email = $this->input->post('user_email');
            $user_password = md5($this->input->post('user_password'));

            $this->checkLogin($user_email,$user_password);

        } else {

            $this->index();
        }
    }
    public function checkLogin($user_email,$user_password){

	    $query=$this->account_model->can_login($user_email, $user_password);

	    if($query->num_rows()==1){

             $session_data = array(
                 'acc_id' => $query->row(0)->acc_id,
                 'user_email' => $user_email,
             );
             $this->session->set_userdata($session_data);

             $type_id=$query->row(0)->type_id;

             $query_user_type=$this->user_type_model->get_user_type($type_id);

             if($query_user_type->num_rows()==1){
                 $type_name=$query_user_type->row(0)->type_name;

                 redirect(lcfirst(strtolower($type_name)));
             }else{
                 $this->session->set_flashdata('error', 'Invalidate User email and password');
                 redirect('login');
             }

            echo $query->row(0)->acc_id;

         }else{
             $this->session->set_flashdata('error', 'Invalidate User email and password');
             //redirect('login');
            echo "can't login : ".$user_email."".$user_password;
         }
    }
}
