<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properti extends CI_Controller {

	public function redirect_user()
	{
		if ($this->session->userdata('user_type') == 'admin') {
			redirect('admin/Properti');			
		}else{
			redirect('user/jualproperti','refresh');
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

	public function proses_tambah()
	{
		$data['id_pemilik'] = $this->session->userdata('id');
		$data['nama_properti'] = $this->input->post('nama_properti');
		$data['harga'] = $this->input->post('harga');

		$this->model_properti->insertData($data);

		// $this->redirect_user();

		redirect('user/jualproperti','refresh');
	}

	public function proses_hapus($id)
	{
		$data['id'] = $id;

		$this->model_properti->deleteData($data);
		$this->redirect_user();
	}

	public function proses_update()
	{
		$data['id'] = $this->input->post('id');
		$data['id_pemilik'] = $this->input->post('id_pemilik');
		$data['nama_properti'] = $this->input->post('nama_properti');
		$data['harga'] = $this->input->post('harga');

		$this->model_properti->updateData($data);

		$this->redirect_user();
		
	}

	public function proses_beli($id)
	{

		date_default_timezone_get();
		$data['id_username'] = $this->session->userdata('id');
		$data['id_properti'] = $id;
		$data['tanggal_transaksi'] = date("Y-m-d");
		$data['harga'] = $this->input->post('harga');

		$this->model_beli->insertLog($data);

		$data2['id_pemilik'] = $this->session->userdata('id');
		$data2['id'] = $id;
		$this->model_properti->updateData($data2);
		

		redirect('user/beliProperti','refresh');
	}
}

?>