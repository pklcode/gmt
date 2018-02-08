<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Feedback extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('FeedbackModel');
    $this->load->helper('url');
  }
  
  public function index3(){
    $this->load->view('header');

    $data['feedback'] = $this->FeedbackModel->tampil();
    $this->load->view('feedback', $data);

    $this->load->view('footer');
  }
  
  public function tambah(){
    $this->load->view('header');
    $this->load->view('tambah_feedback');
    $this->load->view('footer');
  }
  public function tambah_aksi(){
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $saran = $this->input->post('saran');
    $data = array(
      'nama' => $nama,
      'email' => $email,
      'saran' => $saran
      );
        $this->FeedbackModel->input_data($data,'feedback');
    redirect('index3');
  }
  public function hapus($id_feedback){
    $where = array('id_feedback' => $id_feedback);
    $this->FeedbackModel->hapus_data($where,'feedback');
    redirect('index3');
  }

}