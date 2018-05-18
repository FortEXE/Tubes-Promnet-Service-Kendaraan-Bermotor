<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct(){
		parent::__construct();
    	// $this->load->model('AccountModel');
	}

	public function index(){

		if ($this->session->userdata('isLoggedIn')) {
			if ($this->session->userdata('user_type') == 'admin') {
				redirect('admin','refresh');
			}else{
				redirect('user','refresh');
			}
		}
	}
}

?>