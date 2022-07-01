<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('berita_model');
    $this->load->model('notifikasi_model');
  }

  public function index()
  {
    $data = [];
    if (isset($_SESSION['nik']) && !empty($_SESSION['nik'])) {
      $data['totalNotifikasi'] = $this->notifikasi_model->getTotalNotifikasi($_SESSION['nik']);
    }
    if ($this->input->get('q') !== null) {
      /* Get API Berita */
      $url = 'https://api-berita-indonesia.vercel.app/cnn/terbaru/';
      $json = file_get_contents($url);
      $jo = json_decode($json);
      $berita = $jo->data->posts;
      /* END Get API Berita */

      $result = [];
      foreach ($berita as $key => $value) {
        $find = strpos(strtolower($value->title), strtolower($this->input->get('q')));
        if ($find === false) {
        } else {
          array_push($result, $value);
        }
      }
      // $data['dataBerita'] = $this->berita_model->search($this->input->get('q'));
      $data['dataBerita'] = $result;
    } else {
      /* Get API Berita */
      $url = 'https://api-berita-indonesia.vercel.app/cnn/terbaru/';
      $json = file_get_contents($url);
      $jo = json_decode($json);
      $berita = $jo->data->posts;
      /* END Get API Berita */
      // $data['dataBerita'] = $this->berita_model->getAllData();
      $data['dataBerita'] = $berita;
    }

    return $this->load->view('portal_berita/index', $data);
  }

  public function detail($slug)
  {
    $title = str_replace('%20', ' ', $slug);
    /* Get API Berita */
    $url = 'https://api-berita-indonesia.vercel.app/cnn/terbaru/';
    $json = file_get_contents($url);
    $jo = json_decode($json);
    $berita = $jo->data->posts;
    /* END Get API Berita */

    $result = null;
    $otherResult = [];

    foreach ($berita as $key => $value) {
      $find = strpos(strtolower($value->title), strtolower($title));
      if ($find === false) {
        array_push($otherResult, $value);
      } else {
        $result = $value;
      }
    }
    // $data['data'] = $this->berita_model->detail($slug);
    $data['data'] = $result;
    $otherResult = array_splice($otherResult, 0, 5, true);

    if (isset($_SESSION['nik']) && !empty($_SESSION['nik']))
      $data['totalNotifikasi'] = $this->notifikasi_model->getTotalNotifikasi($_SESSION['nik']);

    $data['beritaLainnya'] = $otherResult;

    // var_dump($otherResult);
    return $this->load->view('portal_berita/detail', $data);
  }
}


/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */
