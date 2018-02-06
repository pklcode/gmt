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
    $nama = $this->input->post('nama');
    $tanggal = $this->input->post('tanggal');
    $keterangan = $this->input->post('keterangan');
 
    $data = array(
      'nama' => $nama,
      'tanggal' => $tanggal,
      'keterangan' => $keterangan
      );
    $this->Content1Model->input_data($data,'content1');
    redirect('index');
  }
  public function edit($id_content1){
  $this->load->view('header');
  $where = array('id_content1' => $id_content1);
  $data['content1'] = $this->Content1Model->edit_data($where,'content1')->result();
  $this->load->view('edit_content1',$data);
  $this->load->view('footer');
}
  public function update(){
  $id_content1 = $this->input->post('id_content1');
  $nama = $this->input->post('nama');
  $tanggal = $this->input->post('tanggal');
  $keterangan = $this->input->post('keterangan');
 
  $data = array(
    'id_content1' => $id_content1,
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
  public function hapus($id_content1){
    $where = array('id_content1' => $id_content1);
    $this->Content1Model->hapus_data($where,'content1');
    redirect('index');
  }

}
