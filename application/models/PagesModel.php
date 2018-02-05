<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PagesModel extends CI_Model {
  // Fungsi untuk menampilkan semua data siswa
  public function tampil(){
    return $this->db->get('menu')->result();
  }