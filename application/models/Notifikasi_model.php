<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Notifikasi_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Notifikasi_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function getAllData()
  {
		$this->db->select('*');
		$this->db->from('permintaan_surat');
		$this->db->join('jenis_surat', 'jenis_surat.id = permintaan_surat.id_jenis_surat');
		$this->db->join('akun', 'akun.id = permintaan_surat.id_user');
		// $this->db->join('akun', 'akun.id = permintaan_surat.id_admin');
		$query = $this->db->get()->result_array();
		// print_r($query);
		return $query;
  }

  // ------------------------------------------------------------------------

}

/* End of file Notifikasi_model.php */
/* Location: ./application/models/Notifikasi_model.php */
