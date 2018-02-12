<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    if(!$this->session->userdata('username'))
    {
      redirect('login');
    }
    $this->load->model('PagesModel');
    $this->load->helper('url');
  }
  
  public function index(){
    $this->load->view('header');

    $data['pages'] = $this->PagesModel->tampil();
    $this->load->view('pages', $data);

    $this->load->view('footer');
  }
  
  public function tambah(){
    $this->load->view('header');
    $this->load->view('tambah_pages');
    $this->load->view('footer');
  }
  public function tambah_aksi(){
    $menu = $this->input->post('menu');
    $link = $this->input->post('link');
    $status = $this->input->post('status');
    $data = array(
      'menu' => $menu,
      'link' => $link,
      'status' => $status
      );
        $this->PagesModel->input_data($data,'pages');
    redirect('pages');
  }
  public function edit($id_pages){
  $this->load->view('header');
  $where = array('id_pages' => $id_pages);
  $data['pages'] = $this->PagesModel->edit_data($where,'pages')->result();
  $this->load->view('edit_pages',$data);
  $this->load->view('footer');
}
  public function update(){
  $id_pages = $this->input->post('id_pages');
  $menu = $this->input->post('menu');
  $link = $this->input->post('link');
  $status = $this->input->post('status');
 
  $data = array(
    'id_pages' => $id_pages,
    'menu' => $menu,
    'link' => $link,
    'status' => $status
  );
 
  $where = array(
    'id_pages' => $id_pages
  );
 
  $this->PagesModel->update_data($where,$data,'pages');
  redirect('pages');
}
  public function hapus($id_pages){
    $where = array('id_pages' => $id_pages);
    $this->PagesModel->hapus_data($where,'pages');
    redirect('pages');
  }

}
