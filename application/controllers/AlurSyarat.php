<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AlurSyarat extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('surat_model');
    $this->load->model('notifikasi_model');
  }

  public function index()
  {
    $data['title'] = "Alur/Syarat";
    $data['dataSurat'] = $this->surat_model->getAllData();
		if (isset($_SESSION['nik']) && !empty($_SESSION['nik'])) {
			$data['totalNotifikasi'] = $this->notifikasi_model->getTotalNotifikasi($_SESSION['nik']);
		}

    return $this->load->view('alur_syarat/index', $data);
  }
}


/* End of file AlurSyarat.php */
/* Location: ./application/controllers/AlurSyarat.php */
