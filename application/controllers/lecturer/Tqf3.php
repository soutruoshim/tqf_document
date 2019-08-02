<?php

class Tqf3 extends CI_Controller {

    public function index(){

        $data['title']=ucfirst("TQF3");
        $this->load->view('lecturer_pages/templates/header');
        $this->load->view('lecturer_pages/pages/tqf3',$data);
        $this->load->view('lecturer_pages/templates/footer');
    }
    public function create_section_tqf3(){
        $this->load->view('lecturer_pages/templates/header');
        $this->load->view('lecturer_pages/pages/sectiontqf3');
        $this->load->view('lecturer_pages/templates/footer');
    }
}
?>