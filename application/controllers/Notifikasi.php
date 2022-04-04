<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Notifikasi
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Notifikasi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('notifikasi_model');
  }

  public function index()
  {
		$data['title'] = 'Notifikasi';
		$data['dataNotifikasi'] = $this->notifikasi_model->getAllData();
    return $this->load->view('notifikasi/index',$data); 
  }

}


/* End of file Notifikasi.php */
/* Location: ./application/controllers/Notifikasi.php */
