<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_content1');
		$this->load->helper('url');
 
	}
 
	function index(){
		$this->load->view('header');

		$data['content1'] = $this->M_content1->tampil_data()->result();
		$this->load->view('content1',$data);

		$this->load->view('footer');
	}
 
	function tambah(){
		$this->load->view('header');
		$this->load->view('tambah_content1');
		$this->load->view('footer');
	}
 
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$tanggal = $this->input->post('tanggal');
		$keterangan = $this->input->post('keterangan');
 
		$data = array(
			'nama' => $nama,
			'tanggal' => $tanggal,
			'keterangan' => $keterangan
			);
		$this->M_content1->input_data($data,'content1');
		redirect('index');
	}
 
}