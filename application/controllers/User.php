<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
    $this->load->helper('url');
  }
  
  public function index(){
    $this->load->view('header_frontend');
     
    $data['content1'] = $this->UserModel->tampil();
    $this->load->view('index', $data);

    $this->load->view('footer_frontend');
  }

  public function readmore(){
    $this->load->view('header_frontend');

        $kode=$this->uri->segment(3);
        $kode=$this->uri->segment(4);
        $data['content1']=$this->UserModel->get_detail($kode);
        $this->load->view('readmore',$data);

    $this->load->view('footer_frontend');
  }
  
          public function anggota(){
          $this->load->view('header_frontend');

          $data['content2'] = $this->UserModel->anggota();
                  $this->load->view('anggota', $data);

          $this->load->view('footer_frontend');
        }
        public function informasi(){
          $this->load->view('header_frontend');

          $this->load->view('informasi');

          $this->load->view('footer_frontend');
        }
        public function saran(){
          $this->load->view('saran');
        }
        
                  public function traveling(){
                  $this->load->view('header_frontend');
              
                  $data['content1'] = $this->UserModel->traveling();
                  $this->load->view('v_content1', $data);
              
                  $this->load->view('footer_frontend');
                }  
                
                public function hiking(){
                  $this->load->view('header_frontend');
              
                  $data['content1'] = $this->UserModel->hiking();
                  $this->load->view('v_content1', $data);
              
                  $this->load->view('footer_frontend');
                }
              
                public function kuliner(){
                  $this->load->view('header_frontend');
              
                  $data['content1'] = $this->UserModel->kuliner();
                  $this->load->view('v_content1', $data);
              
                  $this->load->view('footer_frontend');
                }
              
                public function tips(){
                  $this->load->view('header_frontend');
              
                  $data['content1'] = $this->UserModel->tips();
                  $this->load->view('v_content1', $data);
              
                  $this->load->view('footer_frontend');
                }

        public function stories(){
          $this->load->view('header_frontend');

          $data['content1'] = $this->UserModel->stories();
          $this->load->view('index', $data);

          $this->load->view('footer_frontend');
        }
}