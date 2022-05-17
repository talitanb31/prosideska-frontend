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
    $data['dataNotifikasi'] = $this->notifikasi_model->getAllData();
    $data['totalNotifikasi'] = $this->notifikasi_model->getTotalNotifikasi();

    return $this->load->view('notifikasi/index', $data);
  }
}
