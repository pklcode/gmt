<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->header();
		$this->content();
		$this->footer();
	}
	public function coba()
	{
		$this->header();
		$this->tambah();
		$this->footer();
	}
	public function header()
	{
		$this->load->view('header');
	}
	public function content()
	{
		$this->load->view('content1');
	}
	public function tambah()
	{
		$this->load->view('tambah_content1');
	}
	public function footer()
	{
		$this->load->view('footer');
	}

}