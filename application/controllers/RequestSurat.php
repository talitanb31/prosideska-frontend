<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RequestSurat extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('surat_model');
		$this->load->model('PermintaanSurat_model');
  }

  public function index()
  {
    $data['title'] = 'Request Surat';
		$data['dataSurat'] = $this->surat_model->getSurat();
		return $this->load->view('request_surat/index',$data);
  }

  public function store()
  {
    if ($this->PermintaanSurat_model->insert()) {
      $this->session->set_flashdata('pesan','data berhasil dikirim');
      
      echo '<script type="text/javascript">alert("Berhasil mengirim permintaan");window.location="http://localhost/prosideska-frontend/requestsurat"</script>';
    }
  }

}