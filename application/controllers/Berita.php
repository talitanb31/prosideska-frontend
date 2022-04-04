<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Berita
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

class Berita extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('berita_model');
  }

  public function index()
  {
		$data['dataBerita'] = $this->berita_model->getAllData();

    return $this->load->view('portal_berita/index',$data);
  }

}


/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */
