<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Content1Model extends CI_Model {
  // Fungsi untuk menampilkan semua data gambar
  public function tampil(){
    return $this->db->get('content1')->result();
  }
  
  // Fungsi untuk melakukan proses upload file
  public function upload(){
    $config['upload_path'] = './gambar/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;
  
    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }
  
  // Fungsi untuk menyimpan data ke database
  public function save($upload){
    $data = array(
      'nama'=>$this->input->post('nama'),
      'tanggal'=>$this->input->post('tanggal'),
      'keterangan'=>$this->input->post('keterangan')

    );
    
    $this->db->insert('content1', $data);
  }
  public function hapus_data($where,$id_content){
    $this->db->where($where);
    $this->db->delete($id_content);
  }
  public function edit_data($where,$table){   
  return $this->db->get_where($table,$where);
}
function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }
}
