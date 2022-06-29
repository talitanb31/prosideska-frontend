<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PermintaanSurat_model extends CI_Model {

  // ------------------------------------------------------------------------
	private $_table = "permintaan_surat";
  public function __construct()
  {
    parent::__construct();
  }

  public function insert($id,$json)
    {
        $data = array(
						'form_data' => $json,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );

        return $this->db->insert($this->_table, $data);
    }
}
