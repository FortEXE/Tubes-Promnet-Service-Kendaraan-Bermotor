<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * kelas kontroller untuk user
	 */
	public function isUser()
	{
		if (isset($_SESSION['user_type'])) {
			return true;
		}else{
			echo 'FORBIDDEN ACCESS, ANDA BUKAN USER!';
		}
	}

	public function index()
	{

		if ($this->isUser()) {
			
			$meta['page_title'] = "Selamat datang, ". $this->session->userdata('username');

			$this->load->view('template/header_user', $meta);
			$this->load->view('v_user/v_home');
			$this->load->view('template/footer');
		}
	}

	public function home()
	{
		return $this->index();	
	}

	public function jualProperti()
	{
		$meta['page_title'] = "Jual Properti";
		$data['properti'] = $this->model_properti->GetAll();

		$this->load->view('template/header_user', $meta);
		$this->load->view('v_user/v_jualProperti', $data);
		$this->load->view('template/footer');	
	}

	public function beliProperti()
	{
		$meta['page_title'] = "Beli Properti";
		$data['properti'] = $this->model_properti->GetAll();
		$data['user'] = $this->model_user->GetAll();

		$this->load->view('template/header_user', $meta);
		$this->load->view('v_user/v_beliProperti', $data);
		$this->load->view('template/footer');	
	}

	public function tentang()
	{
		$meta['page_title'] = "Tentang";

		$this->load->view('template/header_user', $meta);
		$this->load->view('v_tentang');
		$this->load->view('template/footer');	
	}

	public function tambah_properti()
	{
			$meta['page_title'] = "Tambah Properti";

			$this->load->view('template/header_user', $meta);
			$this->load->view('v_user/v_crud/v_jualProperti/v_tambah');
			$this->load->view('template/footer');

	}

	public function edit($id)
	{
		$meta['page_title'] = 'Edit Properti';
		$data['properti'] = $this->model_properti->GetById($id);

		$this->load->view('template/header_user', $meta);
		$this->load->view('v_user/v_crud/v_jualProperti/v_edit', $data);
		$this->load->view('template/footer');
	}

	public function beli($id)
	{
		$meta['page_title'] = 'Beli Properti';
		$data['properti'] = $this->model_properti->GetById($id);
		$data['user'] = $this->model_user->GetAll();

		$this->load->view('template/header_user', $meta);
		$this->load->view('v_user/v_crud/v_beliProperti/v_beli', $data);
		$this->load->view('template/footer');
	}
}
