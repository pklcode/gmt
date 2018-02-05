c<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Content1 extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('Content1Model'); // Load Content1Model ke controller ini
  }
  
  public function index(){
    $data['content1'] = $this->Content1Model->view();
    $this->load->view('content1', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Content1Model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Content1Model->save(); // Panggil fungsi save() yang ada di SiswaModel.php
        redirect('content1');
      }
    }
    
    $this->load->view('tambah_content1');
  }
  
  public function ubah($id_content1){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Content1Model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Content1Model->edit($id_content1); // Panggil fungsi edit() yang ada di SiswaModel.php
        redirect('content1');
      }
    }
    
    $data['content1'] = $this->Content1Model->view_by($id_content1);
    $this->load->view('edit_content1', $data);
  }
  
  public function hapus($id_content1){
    $this->Content1Model->delete($id_content1); // Panggil fungsi delete() yang ada di SiswaModel.php
    redirect('content1');
  }
}