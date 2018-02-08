<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('CategoryModel');
    $this->load->helper('url');
  }
  
  public function index4(){
    $this->load->view('header');

    $data['category'] = $this->CategoryModel->tampil();
    $this->load->view('category', $data);

    $this->load->view('footer');
  }
  
  public function tambah(){
    $this->load->view('header');
    $this->load->view('tambah_category');
    $this->load->view('footer');
  }
  public function tambah_aksi(){
    $title = $this->input->post('title');
    $data = array(
      'title' => $title
      );
        $this->CategoryModel->input_data($data,'category');
    redirect('index4');
  }
  public function edit($id_category){
  $this->load->view('header');
  $where = array('id_category' => $id_category);
  $data['category'] = $this->CategoryModel->edit_data($where,'category')->result();
  $this->load->view('edit_category',$data);
  $this->load->view('footer');
}
  public function update(){
  $id_category = $this->input->post('id_category');
  $title = $this->input->post('title'); 
  $data = array(
    'id_content1' => $id_content1,
    'title' => $title,
  );
 
  $where = array(
    'id_category' => $id_category
  );
 
  $this->CategoryModel->update_data($where,$data,'category');
  redirect('index4');
}
  public function hapus($id_category){
    $where = array('id_category' => $id_category);
    $this->CategoryModel->hapus_data($where,'category');
    redirect('index4');
  }

}