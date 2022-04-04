<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Berita_model
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

class Berita_model extends CI_Model {

  // ------------------------------------------------------------------------
	private $_table = "berita";
  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function getAllData()
  {
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->order_by('id','DESC');
		$this->db->limit(3);
		$query = $this->db->get()->result_array();
		// print_r($query);
    return $query;
		
  }

  // ------------------------------------------------------------------------

}

/* End of file Berita_model.php */
/* Location: ./application/models/Berita_model.php */
