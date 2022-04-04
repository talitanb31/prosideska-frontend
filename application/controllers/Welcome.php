<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct() {
		parent::__construct(); 
		$this->load->model('surat_model');
		$this->load->model('berita_model');
	}
	public function index()
	{
		$data['dataSurat'] = $this->surat_model->getAllData();
		$data['dataBerita'] = $this->berita_model->getAllData();
		
		$this->load->view('welcome',$data);
	}
}
