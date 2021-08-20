<?php
class Others extends CI_Controller{
    public function Contact(){
        $this->load->view('header');
        $this->load->view('contact');
        $this->load->view('footer');
    }
    public function TermeCond(){
        $this->load->view('header');
        $this->load->view('TermeCond');
        $this->load->view('footer');
    }
    public function obtCodeBar(){
        $this->load->view('header');
        $this->load->view('obtCodeBar');
        $this->load->view('footer');
    }
}