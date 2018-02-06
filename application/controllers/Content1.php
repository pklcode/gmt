<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Content1 extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('Content1Model');
    $this->load->helper('url');
  }
  
  public function index(){
    $this->load->view('header');

    $data['content1'] = $this->Content1Model->tampil();
    $this->load->view('content1', $data);

    $this->load->view('footer');
  }
  
  public function tambah(){
    $this->load->view('header');
    $this->load->view('tambah_content1');
    $this->load->view('footer');
  }
  public function tambah_aksi(){
    $data = array();
    
    if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
      // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
      $upload = $this->Content1Model->upload();
      
      if($upload['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
        $this->Content1Model->save($upload);
        
        redirect('index'); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }
    
    $this->load->view('content1', $data);
  }
  public function hapus($id_content1){
    $where = array('id_content1' => $id_content1);
    $this->Content1Model->hapus_data($where,'content1');
    redirect('index');
  }
  public function edit($id_content1){
  $where = array('id_content1' => $id_content1);
  $data['content1'] = $this->Content1Model->edit_data($where,'content1')->result();
  $this->load->view('header');
  $this->load->view('edit_content1',$data);
  $this->load->view('footer');
  }
  public function edit_aksi(){
  $id_content1 = $this->input->post('id_content1');
  $nama = $this->input->post('nama');
  $tanggal = $this->input->post('tanggal');
  $keterangan = $this->input->post('keterangan');
 
  $data = array(
    'nama' => $nama,
    'tanggal' => $tanggal,
    'keterangan' => $keterangan
  );
 
  $where = array(
    'id_content1' => $id_content1
  );
 
  $this->Content1Model->update_data($where,$data,'content1');
  redirect('index');
}

}
