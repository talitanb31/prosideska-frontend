<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notifikasi_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  public function getAllData($nik)
  {
    // $this->db->select('permintaan_surat.*, jenis_surat.jenis, penduduk.nama, akun.nama as admin');
    // $this->db->from('permintaan_surat');
    // $this->db->join('jenis_surat', 'jenis_surat.id = permintaan_surat.id_jenis_surat');
    // $this->db->join('penduduk', 'penduduk.nik = permintaan_surat.nik');
    // $this->db->join('akun', 'akun.id = permintaan_surat.id_admin');
    // $this->db->where('permintaan_surat.nik', $nik);
    // $this->db->order_by("FIELD(permintaan_surat.status, 'pending', 'diproses', 'selesai', 'ditolak')");

    // $query = $this->db->get()->result_array();
    // // print_r($query);
    // return $query;
    $this->db->select('permintaan_surat.id, permintaan_surat.status, jenis_surat.jenis, penduduk.nik, penduduk.nama, permintaan_surat.created_at, akun.nama as admin');
    $this->db->from('permintaan_surat');
    $this->db->join('jenis_surat', 'jenis_surat.id = permintaan_surat.id_jenis_surat');
    $this->db->join('penduduk', 'penduduk.nik = permintaan_surat.nik');
    $this->db->join('akun', 'akun.id = permintaan_surat.id_admin');

    // $this->db->join('read_notifikasi_permintaan', 'read_notifikasi_permintaan.id_permintaan != permintaan_surat.id', 'left');

    $this->db->where('permintaan_surat.status =', 'diproses');
    $this->db->where('permintaan_surat.id NOT IN (select id_permintaan from read_notifikasi_permintaan where nik = ' . $nik . ')', NULL, false);


    return $this->db->get()->result_array();
  }

  public function getTotalNotifikasi($nik = '')
  {
    // $this->db->select('*');
    // $this->db->from('permintaan_surat');
    // $this->db->join('jenis_surat', 'jenis_surat.id = permintaan_surat.id_jenis_surat');
    // $this->db->join('penduduk', 'penduduk.nik = permintaan_surat.nik');
    // // $this->db->where('status', 'pending');
    // $this->db->where('permintaan_surat.nik = ', $nik);
    // $this->db->where('status', 'diproses');
    // $query = $this->db->get();

    // return $query->num_rows();
    $this->db->select('permintaan_surat.id, jenis_surat.jenis, penduduk.nik, penduduk.nama, permintaan_surat.created_at');
    $this->db->from('permintaan_surat');
    $this->db->join('jenis_surat', 'jenis_surat.id = permintaan_surat.id_jenis_surat');
    $this->db->join('penduduk', 'penduduk.nik = permintaan_surat.nik');
    // $this->db->join('read_notifikasi_permintaan', 'read_notifikasi_permintaan.id_permintaan != permintaan_surat.id', 'left');

    $this->db->where('permintaan_surat.status =', 'diproses');
    $this->db->where('permintaan_surat.id NOT IN (select id_permintaan from read_notifikasi_permintaan where nik = ' . $nik . ')', NULL, false);

    $query = $this->db->get();


    return $query->num_rows();
  }

  public function isRead($idPermintaan)
  {
    $data = array(
      'nik' => $_SESSION['nik'],
      'id_permintaan' => $idPermintaan,
    );

    return $this->db->insert('read_notifikasi_permintaan', $data);
  }
}
