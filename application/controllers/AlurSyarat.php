<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller AlurSyarat
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

class AlurSyarat extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('surat_model');
  }

  public function index()
  {
		$data['title'] = "Alur/Syarat";
		$data['dataSurat'] = $this->surat_model->getAllData();
	
    return $this->load->view('alur_syarat/index',$data);
  }

}


/* End of file AlurSyarat.php */
/* Location: ./application/controllers/AlurSyarat.php */
