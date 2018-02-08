<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PagesModel extends CI_Model {
  // Fungsi untuk menampilkan semua data gambar
  public function tampil(){
    return $this->db->get('pages')->result();
  }
  
  // Fungsi untuk melakukan proses upload file
  public function input_data($data,$table){
    $this->db->insert($table,$data);
  }

  // Fungsi untuk menyimpan data ke database
  public function save($upload){
    $data = array(
      'menu'=>$this->input->post('menu'),
      'link'=>$this->input->post('link'),
      'status'=>$this->input->post('status'),
    );
    
    $this->db->insert('pages', $data);
  }
  public function edit_data($where,$table){   
  return $this->db->get_where($table,$where);
  }
  public function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  public function hapus_data($where,$table){
  $this->db->where($where);
  $this->db->delete($table);
}
}
