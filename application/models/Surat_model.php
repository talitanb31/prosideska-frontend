<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Surat_model
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

class Surat_model extends CI_Model {

  // ------------------------------------------------------------------------
	private $_table = "jenis_surat";
  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function getAllData()
  {
    $this->db->select('*');
		$this->db->from('syarat_surat');
		$this->db->join('jenis_surat', 'jenis_surat.id = syarat_surat.id_jenis_surat');
		$query = $this->db->get()->result_array();
		// print_r($query);
		return $query;
		// return $this->db->get($this->_table)->result();
  }

	public function getSurat()
	{
		return $this->db->get($this->_table)->result_array();
	}

  // ------------------------------------------------------------------------

}

/* End of file Surat_model.php */
/* Location: ./application/models/Surat_model.php */
