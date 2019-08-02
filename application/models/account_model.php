<?php
class account_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    function insert_account($data){
        $this->db->insert('tbl_account', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    function check_email_exists($email){
        $query=$this->db->get_where('tbl_account',array('email'=>$email));
        if(empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }


    function can_login($user_email,$user_password){

        $this->db->where('email',$user_email);
        $this->db->where('password',$user_password);
        $query=$this->db->get('tbl_account');

        return $query;

    }

    function get_user(){

    }
}