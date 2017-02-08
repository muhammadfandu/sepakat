<?php
Class Penyedia extends CI_Controller{
  public function index(){
    $this->load->helper('url');
    $this->load->view('header');
    $this->load->view('penyedia-list');
    $this->load->view('footer');
  }
  public function detail(){
    $this->load->helper('url');
    $this->load->view('header');
    $this->load->view('penyedia-detail');
    $this->load->view('footer');
  }
  public function isidetail(){
    $this->load->helper('url');
    $this->load->view('header');
    $this->load->view('penyedia-isidetail');
    $this->load->view('footer');
  }
}
?>
