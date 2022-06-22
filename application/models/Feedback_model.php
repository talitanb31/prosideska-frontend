<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_model extends CI_Model {

  // ------------------------------------------------------------------------
	private $_table = "feedback";
  public function __construct()
  {
    parent::__construct();
  }

  public function insert()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'subjek' => $this->input->post('subjek'),
            'pesan' => $this->input->post('message'),
            'waktu' => date('Y-m-d H:i:s'),
        );

        return $this->db->insert($this->_table, $data);
    }
}
