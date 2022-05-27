<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notifikasi_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  public function getAllData()
  {
    $this->db->select('permintaan_surat.*, jenis_surat.jenis, penduduk.nama, akun.nama as admin');
    $this->db->from('permintaan_surat');
    $this->db->join('jenis_surat', 'jenis_surat.id = permintaan_surat.id_jenis_surat');
    $this->db->join('penduduk', 'penduduk.nik = permintaan_surat.nik');
    $this->db->join('akun', 'akun.id = permintaan_surat.id_admin');
    $this->db->order_by("FIELD(permintaan_surat.status, 'pending', 'diproses', 'selesai', 'ditolak')");

    $query = $this->db->get()->result_array();
    // print_r($query);
    return $query;
  }

  public function getTotalNotifikasi()
  {
    $this->db->select('*');
    $this->db->from('permintaan_surat');
    $this->db->join('jenis_surat', 'jenis_surat.id = permintaan_surat.id_jenis_surat');
    $this->db->join('penduduk', 'penduduk.nik = permintaan_surat.nik');
    $this->db->where('status', 'pending');
    $this->db->or_where('status', 'diproses');
    $query = $this->db->get();

    return $query->num_rows();
  }
}
