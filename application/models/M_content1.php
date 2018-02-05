<?php 
 
class M_content1 extends CI_Model{
	function tampil_data(){
		return $this->db->get('content1');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}