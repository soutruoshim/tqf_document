<?php

class Home extends CI_Controller {

    public function index(){
        $this->load->view('admin_pages/templates/header');
        $this->load->view('admin_pages/pages/home');
        $this->load->view('admin_pages/templates/footer');
    }
}