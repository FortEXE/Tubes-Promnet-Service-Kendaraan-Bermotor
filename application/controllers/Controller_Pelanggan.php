<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pelanggan');
	}

	public function index()
	{
	
	}

	public function proses_pembelian()
	{
		$data_pelanggan = [
		    'NAMA_PELANGGAN' => $this->input->post('nama'),
		    'ALAMAT_PELANGGAN' => $this->input->post('alamat'),
		    'NO_TELP_PELANGGAN' => $this->input->post('no_telp'),
		    'NO_STNK_PELANGGAN' => $this->input->post('no_stnk'),
		    'TAHUN_STNK_PELANGGAN' => $this->input->post('tahun_stnk')
		];

		$this->session->set_userdata($data_pelanggan);
		$q = $this->Model_pelanggan->insertData($data_pelanggan);

		if ($q) {
			redirect('controller_utama/pembayaran','refresh');
		}else{
			echo 'gagal menambahkan data';
		}
	}

}

/* End of file Controller_Pelanggan.php */
/* Location: ./application/controllers/Controller_Pelanggan.php */