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
		/* Get API Berita */
		$url = 'https://api-berita-indonesia.vercel.app/cnn/terbaru/';
		$json = file_get_contents($url);
		$jo = json_decode($json);
		$berita = array_slice($jo->data->posts, 0, 4, true);
		// $berita = $jo->data->posts;
		/* END Get API Berita */
		// var_dump($berita);
		// $i = '';
		// foreach ($berita as $key => $value) {
		// 	$i = $value->title;
		// }
		// echo $i;
		// $data['dataBerita'] = $this->berita_model->getLimitData();
		$data['dataBerita'] = $berita;
		if (isset($_SESSION['nik']) && !empty($_SESSION['nik'])) {
			$data['totalNotifikasi'] = $this->notifikasi_model->getTotalNotifikasi($_SESSION['nik']);
			$this->load->view('welcome', $data);
		} else {
			$data['dataSurat'] = $this->surat_model->getAllData();
			// $data['dataBerita'] = $this->berita_model->getLimitData();
			$data['dataBerita'] = $berita;
			$this->load->view('welcome', $data);
		}
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
