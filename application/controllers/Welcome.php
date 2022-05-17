<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('surat_model');
		$this->load->model('berita_model');
		$this->load->model('Feedback_model');
		$this->load->model('notifikasi_model');
	}
	public function index()
	{
		$data['dataSurat'] = $this->surat_model->getAllData();
		$data['dataBerita'] = $this->berita_model->getLimitData();
		$data['totalNotifikasi'] = $this->notifikasi_model->getTotalNotifikasi();

		$this->load->view('welcome', $data);
	}

	public function store()
	{
		if ($this->Feedback_model->insert()) {
			$this->session->set_flashdata('pesan', 'data berhasil dikirim');

			echo '<script type="text/javascript">alert("Berhasil mengirim saran");window.location="http://localhost/prosideska-frontend/"</script>';
			// redirect('welcome/index');
		}
	}
}
