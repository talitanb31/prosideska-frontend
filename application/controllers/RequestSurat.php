<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller RequestSurat
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

class RequestSurat extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('surat_model');
  }

  public function index()
  {
    $data['title'] = 'Request Surat';
		$data['dataSurat'] = $this->surat_model->getSurat();
		return $this->load->view('request_surat/index',$data);
  }

}


/* End of file RequestSurat.php */
/* Location: ./application/controllers/RequestSurat.php */
