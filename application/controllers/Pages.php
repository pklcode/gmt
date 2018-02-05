<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('PagesModel'); // Load SiswaModel ke controller ini
  }