<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {

	function index()
	{
		$this->load->view('v_login');
	}

  	function masuk() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $cek = $this->M_login->cek($username, $password);
        if($cek->num_rows() == 1)
            {
                foreach ($cek->result() as $data) {
                    $sess_data['id'] = $data->id;
                    $sess_data['username'] = $data->username;
                    $this->session->set_userdata($sess_data);
                }
                redirect('Content1');
            }
                else
            {
                $this->session->set_flashdata('pesan','username dan password salah.');
                redirect('Login');
            }
        }

    function keluar() {
        $this->session->sess_destroy();
        redirect('Login');
    }

}