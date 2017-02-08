<?php
  Class Home extends CI_Controller{
    public function index(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('rumah');
      $this->load->view('footer');
    }
  }
?>
