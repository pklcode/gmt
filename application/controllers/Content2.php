<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Content2 extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    if(!$this->session->userdata('username'))
    {
      redirect('login');
    }
    $this->load->model('Content2Model');
    $this->load->helper('url');
  }
  
  public function index(){
    $this->load->view('header');

    $data['content2'] = $this->Content2Model->tampil();
    $this->load->view('content2', $data);

    $this->load->view('footer');
  }
  
  public function tambah(){
    $this->load->view('header');
    $this->load->view('tambah_content2');
    $this->load->view('footer');
  }
  public function tambah_aksi(){
    $nama = $this->input->post('nama');
    $status = $this->input->post('status');
    $no_telpon = $this->input->post('no_telpon');
    $v_m = $this->input->post('v_m');
    $sosmed = $this->input->post('sosmed');
    $ttl = $this->input->post('ttl');
    $id_category = $this->input->post('id_category');
    $data = array(
      'nama' => $nama,
      'status' => $status,
      'no_telpon' => $no_telpon,
      'v_m' => $v_m,
      'sosmed' => $sosmed,
      'ttl' => $ttl,
      'id_category' => $id_category,
      'gambar'=>$_FILES['gambar']['name']
      );
        $this->Content2Model->input_data($data,'content2');
    $config['upload_path']          = './gambar';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 100;
    $config['max_width']            = 1024;
    $config['max_height']           = 768;
 
    $this->load->library('upload', $config);
 
    if ( ! $this->upload->do_upload('gambar')){
      $error = array('error' => $this->upload->display_errors());
      $this->load->view('content2', $error);
    }else{
      $data = array('upload_data' => $this->upload->data());
    }
    redirect('content2');
    
  }
  public function edit($id_content2){
  $this->load->view('header');
  $where = array('id_content2' => $id_content2);
  $data['content2'] = $this->Content2Model->edit_data($where,'content2')->result();
  $this->load->view('edit_content2',$data);
  $this->load->view('footer');
}
  public function update(){
  $id_content2 = $this->input->post('id_content2');
  $nama = $this->input->post('nama');
  $status = $this->input->post('status');
  $no_telpon = $this->input->post('no_telpon');
  $v_m = $this->input->post('v_m');
  $sosmed = $this->input->post('sosmed');
  $ttl = $this->input->post('ttl');
  $id_category = $this->input->post('id_category');
 
  $data = array(
    'id_content2' => $id_content2,
    'nama' => $nama,
    'status' => $status,
    'no_telpon' => $no_telpon,
    'v_m' => $v_m,
    'sosmed' => $sosmed,
    'ttl' => $ttl,
    'id_category' => $id_category,
    'gambar'=>$_FILES['gambar']['name']
  );
 
  $where = array(
    'id_content2' => $id_content2
  );
 
  redirect('content2');
}
  public function hapus($id_content2){
    $where = array('id_content2' => $id_content2);
    $this->Content2Model->hapus_data($where,'content2');
    redirect('content2');
  }

}
