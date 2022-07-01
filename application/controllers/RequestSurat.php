<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RequestSurat extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('surat_model');
    $this->load->model('PermintaanSurat_model');
    $this->load->model('notifikasi_model');
  }

  public function index()
  {
    if (isset($_SESSION['nik'])) {
      $data['title'] = 'Request Surat';
      $data['dataSurat'] = $this->surat_model->getSurat();
      if (isset($_SESSION['nik']) && !empty($_SESSION['nik'])) {
        $data['totalNotifikasi'] = $this->notifikasi_model->getTotalNotifikasi($_SESSION['nik']);
      }
      // var_dump($data);
      return $this->load->view('request_surat/index', $data);
    } else
      echo '<script type="text/javascript">alert("Harap login terlebih dahulu");window.location="' . base_url() . 'auth/"</script>';
  }

  public function store()
  {
    /*
      1. Mengkonversi form data menjadi json
      2. Simpan ke database
    */

    // echo count($_POST);
    /* Mengkonversi form data menjadi json */
    /* if ($this->input->post('jenis_surat') == 'Surat Keterangan Pindah') {
      foreach ($_POST as $key => $value) {
        $form[$key] = isset($value) ? $value : '-';

        // if ($key == 'nik_keluarga') {
        //   for ($i = 0; $i < count($value); $i++) {
        //     $form[$key . ($i + 1)] = isset($value[$i]) ? $value[$i] : '-';
        //   }
        // } elseif ($key == 'nama_keluarga') {
        //   for ($i = 0; $i < count($value); $i++) {
        //     $form[$key . ($i + 1)] = isset($value[$i]) ? $value[$i] : '-';
        //   }
        // } elseif ($key == 'shdk') {
        //   for ($i = 0; $i < count($value); $i++) {
        //     $form[$key . ($i + 1)] = isset($value[$i]) ? $value[$i] : '-';
        //   }
        // } else {
        //   $form[$key] = isset($value) ? $value : '-';
        // }
      }
    } else {
      foreach ($_POST as $key => $value) {
        $form[$key] = isset($value) ? $value : '-';
      }
    } */
    foreach ($_POST as $key => $value) {
      $form[$key] = isset($value) ? $value : '-';
    }

    $json = json_encode($form);
    // echo $json;
    /* End Mengkonversi form data menjadi json */

    /* Simpan ke database */
    if ($this->PermintaanSurat_model->insert($this->input->post('id_jenis_surat'), $json)) {
      $this->session->set_flashdata('pesan', 'Pengajuan berhasil dikirim');

      echo '<script type="text/javascript">alert("Berhasil mengirim permintaan");window.location="' . base_url() . 'requestsurat"</script>';
    }
    /* End Simpan ke database */
  }
}
