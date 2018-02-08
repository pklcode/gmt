<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class feedbackModel extends CI_Model {
  // Fungsi untuk menampilkan semua data gambar
  public function tampil(){
    return $this->db->get('feedback')->result();
  }
  
  // Fungsi untuk melakukan proses upload file
  public function input_data($data,$table){
    $this->db->insert($table,$data);
  }

  // Fungsi untuk menyimpan data ke database
  public function save($upload){
    $data = array(
      'nama'=>$this->input->post('nama'),
      'email'=>$this->input->post('email'),
      'saran'=>$this->input->post('saran'),
    );
    
    $this->db->insert('feedback', $data);
  }
  public function hapus_data($where,$table){
  $this->db->where($where);
  $this->db->delete($table);
}
}