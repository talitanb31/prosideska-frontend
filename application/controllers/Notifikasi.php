<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Notifikasi extends CI_Controller
{
  private $data;

  public function __construct()
  {
    parent::__construct();
    $this->load->model('notifikasi_model');
  }

  public function index()
  {
    $data['title'] = 'Notifikasi';
		if (isset($_SESSION['nik']) && !empty($_SESSION['nik'])) {
			$data['totalNotifikasi'] = $this->notifikasi_model->getTotalNotifikasi($_SESSION['nik']);
			$data['dataNotifikasi'] = $this->notifikasi_model->getAllData($_SESSION['nik']);
		}

    return $this->load->view('notifikasi/index', $data);
  }
}
