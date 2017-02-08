<?php
  Class Hub extends CI_Controller{
    public function index(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('hub');
      $this->load->view('footer');
    }
    public function detail(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('hub-detail');
      $this->load->view('footer');
    }
  }
?>
