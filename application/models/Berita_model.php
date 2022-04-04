<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

  // ------------------------------------------------------------------------
	private $_table = "berita";
  public function __construct()
  {
    parent::__construct();
  }

  public function getAllData()
  {
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->order_by('id','DESC');
		$query = $this->db->get()->result_array();

    return $query;
  }

  public function search($q)
  {
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->like('title', $q);
		$this->db->order_by('id','DESC');
		$query = $this->db->get()->result_array();

    return $query;
  }

  public function getLimitData()
  {
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->order_by('id','DESC');
		$this->db->limit(4);
		$query = $this->db->get()->result_array();

    return $query;
  }

  public function beritaOther($slug)
  {
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->where('slug !=', $slug);
		$this->db->order_by('id','DESC');
		$this->db->limit(3);
		$query = $this->db->get()->result_array();

    return $query;
  }

  public function detail($slug)
  {
      return $this->db->get_where($this->_table, ['slug' => $slug])->row_array();
  }
}