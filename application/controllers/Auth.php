<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  function index(){
    $this->load->view('auth/login');
  }

  function cheklogin(){
    $nik = $this->input->post('nik');
    // query chek users
		$this->db->where('nik', $nik);
		$users = $this->db->get('penduduk');

		if($users->num_rows()>0){
			// retrive user data to session
			$user = $users->row_array();
			$this->session->set_userdata($user);
			$this->session->set_userdata('isUserLoggedIn', true);
			redirect('welcome');
		} else{
				$this->session->set_flashdata('status_login','nik yang anda inputkan salah');
				redirect('auth');
		}
	
  }

  function logout(){
    $this->session->sess_destroy();
    $this->session->set_flashdata('status_login','Anda sudah berhasil keluar dari aplikasi');
    redirect('auth');
  }
}
