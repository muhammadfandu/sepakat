<?php
  Class Admin extends CI_Controller{
    public function index(){
      $this->load->helper('url');
      $this->load->view('admin-header');
      $this->load->view('admin-home');
      $this->load->view('admin-footer');
    }
    public function user(){
      $this->load->helper('url');
      $this->load->view('admin-header');
      $this->load->view('admin-user');
      $this->load->view('admin-footer');
    }
    public function penyedia(){
      $this->load->helper('url');
      $this->load->view('admin-header');
      $this->load->view('admin-penyedia');
      $this->load->view('admin-footer');
    }
    public function perusahaan(){
      $this->load->helper('url');
      $this->load->view('admin-header');
      $this->load->view('admin-perusahaan');
      $this->load->view('admin-footer');
    }
    public function kategori(){
      $this->load->helper('url');
      $this->load->model('kategori');

      $data['kategori']=$this->kategori->get_all_categories();

      // echo "<pre>";
  		// print_r($data);
  		// echo "</pre>";

      $this->load->view('admin-header');
      $this->load->view('admin-kategori', $data);
      $this->load->view('admin-footer');
    }
    public function kategori_add(){
      $this->load->model('kategori');

      $data = array(
				'id_kategori' => $this->input->post('idkat'),
				'kategori' => $this->input->post('kategori')
			);
		$this->kategori->kategori_add($data);
		echo json_encode(array("status" => TRUE));
    }
    public function kategori_edit($id){
      $this->load->model('kategori');
      $data = $this->kategori->get_by_id($id);
      // echo "<pre>";
  		// print_r($data);
  		// echo "</pre>";
      echo json_encode($data);
    }
//     public function kategori_update(){
//       $this->load->model('kategori');
//
//       $data = array(
// 				'id_kategori' => $this->input->post('idkat'),
// 				'kategori' => $this->input->post('kategori')
// 			);
// 		  $this->kategori->kategori_update(array('id_kategori' => $this->input->post('idkat')), $data);
// 
// 		  echo json_encode(array("status" => TRUE));
//     }
    public function kategori_delete(){
      $this->load->model('kategori');

      $this->kategori->delete_by_id($id);
		  echo json_encode(array("status" => TRUE));
    }
  }
?>
