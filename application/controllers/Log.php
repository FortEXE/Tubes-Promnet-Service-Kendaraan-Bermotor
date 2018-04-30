<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

	public function redirect_user()
	{
		if ($this->session->userdata('user_type') == 'admin') {
			redirect('admin/LogTransaksi');			
		}else{
			redirect('welcome/home','refresh');
		}
	}

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

	public function proses_hapus($id)
	{
		$data['id'] = $id;

		$this->model_log->deleteData($data);
		$this->redirect_user();
	}

	public function proses_insertlog($id)
	{

		date_default_timezone_set("Indonesia/Jakarta");
		$data['id_username'] = $this->session->userdata('id');
		$data['id_properti'] = $id;
		$data['tanggal_transaksi'] = date("Y-m-d");
		$data['harga'] = $this->input->post('harga');

		$this->model_beli->insertLog($data);

		$this->redirect_user();
	}

}

?>