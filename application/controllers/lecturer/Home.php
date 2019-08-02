<?php

class Home extends CI_Controller {

    public function index(){
        $this->load->view('lecturer_pages/templates/header');
        $this->load->view('lecturer_pages/pages/home');
        $this->load->view('lecturer_pages/templates/footer');
    }
}