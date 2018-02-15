<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model {
  // Fungsi untuk menampilkan semua data gambar
  public function tampil(){
    return $this->db->get_where('content1',array('id_category'=>1))->result();
  }
  public function traveling(){
    return $this->db->get_where('content1',array('id_category'=>2))->result();
  }
  public function hiking(){
    return $this->db->get_where('content1',array('id_category'=>3))->result();
  }
  public function kuliner(){
    return $this->db->get_where('content1',array('id_category'=>4))->result();
  }
  public function tips_trik(){
    return $this->db->get_where('content1',array('id_category'=>5))->result();
  }
  public function stories(){
    return $this->db->get_where('content1',array('id_category'=>6))->result();
  }
    public function anggota(){
    return $this->db->get_where('content2')->result();
  }
  public function get_detail($kode){
    return $this->db->query("SELECT * FROM content1 where id_content1='$kode'");
 
  }
}