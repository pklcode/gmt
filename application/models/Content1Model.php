<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Content1Model extends CI_Model {
  // Fungsi untuk menampilkan semua data siswa
  public function view(){
    return $this->db->get('content1')->result();
  }
  
  // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
  public function view_by($id_content1){
    $this->db->where('id_content1', $id_content1);
    return $this->db->get('content1')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
      $this->form_validation->set_rules('input_id_content1', 'No', 'required|numeric|max_length[11]');
    
    $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_tanggal', 'Tanggal', 'required');
    $this->form_validation->set_rules('input_keterangan', 'keterangan', 'required');
    $this->form_validation->set_rules('input_gambar', 'Gambar', 'required');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array(
      "id_content1" => $this->input->post('input_id_content1'),
      "nama" => $this->input->post('input_nama'),
      "tanggal" => $this->input->post('input_tanggal'),
      "keterangan" => $this->input->post('input_keterangan'),
      "gambar" => $this->input->post('input_gambar')
    );
    
    $this->db->insert('content1', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  public function edit($id_content1){
    $data = array(
      "nama" => $this->input->post('input_nama'),
      "tanggal" => $this->input->post('input_tanggal'),
      "keterangan" => $this->input->post('input_keterangan'),
      "gambar" => $this->input->post('input_gambar')
    );
    
    $this->db->where('id_content1', $id_content1);
    $this->db->update('content1', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($id_content1){
    $this->db->where('id_content1', $id_content1);
    $this->db->delete('content1'); // Untuk mengeksekusi perintah delete data
  }
}