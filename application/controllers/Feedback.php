<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Feedback extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->helper(array('url', 'form'));
        $this->load->library(array('form_validation', 'Recaptcha'));
    if(!$this->session->userdata('username'))
    {
      redirect('login');
    }
    $this->load->model('FeedbackModel');
    $this->load->helper('url');
  }
  
  public function index(){
    $this->load->view('header');
    $data['feedback'] = $this->FeedbackModel->tampil();
    $this->load->view('feedback', $data);

    $this->load->view('footer');
  }
  
  public function tambah()
    {
    $this->load->view('header');
    $this->load->view('tambah_feedback');
    $this->load->view('footer');
    }

    public function tambah_aksi()
    {
      $nama = $this->input->post('nama');
      $email = $this->input->post('email');
      $saran = $this->input->post('saran');
      $data = array(
        'nama' => $nama,
        'email' => $email,
        'saran' => $saran
        );
        $this->FeedbackModel->input_data($data,'feedback');
        // validasi form
        $this->form_validation->set_rules('nama', ' ', 'trim|required');
        $this->form_validation->set_rules('email', ' ', 'trim|required');
        $this->form_validation->set_rules('keterangan', ' ', 'trim|required');
        
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $recaptcha = $this->input->post('g-recaptcha-response');
        $response = $this->recaptcha->verifyResponse($recaptcha);

        if ($this->form_validation->run() == FALSE || !isset($response['success']) || $response['success'] <> true) {
            $this->index();
        } else {
            // lakukan proses validasi login disini
            // pada contoh ini saya anggap login berhasil dan saya hanya menampilkan pesan berhasil
            // tapi ini jangan di contoh ya menulis echo di controller hahahaha
            echo 'Berhasil';
        }
    redirect('feedback');
  }
  public function hapus($id_feedback){
    $where = array('id_feedback' => $id_feedback);
    $this->FeedbackModel->hapus_data($where,'feedback');
    redirect('feedback');
  }

}
