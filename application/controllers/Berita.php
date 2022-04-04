<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('berita_model');
  }

  public function index()
  {
    $data = [];
    if($this->input->get('q') !== null)
      $data['dataBerita'] = $this->berita_model->search($this->input->get('q'));
    else
      $data['dataBerita'] = $this->berita_model->getAllData();

    return $this->load->view('portal_berita/index',$data);
  }

  public function detail($slug)
  {
      $data['data'] = $this->berita_model->detail($slug);
      $data['beritaLainnya'] = $this->berita_model->beritaOther($slug);

      return $this->load->view('portal_berita/detail',$data);
    }

}


/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */
