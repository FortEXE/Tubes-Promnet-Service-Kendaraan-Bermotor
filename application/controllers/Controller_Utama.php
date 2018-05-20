<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Utama extends CI_Controller {

	public function index()
	{
		$meta['page_title'] = "selamat datang di servis motor AI";
		$this->load->view('template/header', $meta);
		$this->load->view('v_utama');
		$this->load->view('template/footer');
	}

	public function sesi()
	{

		$sess = $this->session->userdata();

		echo 'nama: ';
		echo $sess['NAMA_PELANGGAN'];
		echo '<br/>';
		echo 'alamat: ';
		echo $sess['ALAMAT_PELANGGAN'];
		echo '<br/>';
		echo 'no telp: ';
		echo $sess['NO_TELP_PELANGGAN'];
		echo '<br/>';
		echo 'no stnk: ';
		echo $sess['NO_STNK_PELANGGAN'];
		echo '<br/>';
		echo 'tahun stnk: ';
		echo $sess['TAHUN_STNK_PELANGGAN'];
		echo '<br/>';
	}

	public function beliBarang($page = '')
	{

		if($page === NULL){
			$page = 0;
		}

		$meta['page_title'] = "beli barang";
		$this->load->model('Model_barang');


		$config['base_url'] = 'http://localhost/tubespromnet/index.php/controller_utama/beliBarang';
		$config['total_rows'] = $this->Model_barang->jumlah_data();
		$config['per_page'] = 20;

		$from = $this->uri->segment(10);
		$this->pagination->initialize($config);

		$data['barang'] = $this->Model_barang->data($config['per_page'], $page);
		$this->load->view('template/header', $meta);
		$this->load->view('v_barang', $data);
		$this->load->view('template/footer');
	}

	public function detailBarang($xid)
	{
		$meta['page_title'] = "beli barang";
		$this->load->model('Model_barang');
		$data['barang'] = $this->Model_barang->getById($xid);
		$this->load->view('template/header', $meta);
		$this->load->view('v_detailbarang', $data);
		$this->load->view('template/footer');
	}

	public function beliJasa()
	{
		
		$meta['page_title'] = "beli jasa";
		$this->load->model('Model_jasa');
		$data['jasa'] = $this->Model_jasa->getAll();

		$this->load->view('template/header', $meta);
		$this->load->view('v_jasa', $data);
		$this->load->view('template/footer');
	}

	public function pembelian()
	{

		$sess = $this->session->userdata();
		$this->load->model('Model_pelanggan');
		$this->Model_pelanggan->startTransaksi();

		$data = [
		    'cart_barang' => $this->cart->contents()
		];

		$meta['page_title'] = "form pembelian";
		$this->load->view('template/header', $meta);

		if (empty($sess)) {
			$this->load->view('v_formpembeli', $data);			
		}else{
			$this->load->view('v_pembayaran', $data);
		}
		$this->load->view('template/footer');
	}

	public function pembayaran()
	{

		$data = [
		    'cart_barang' => $this->cart->contents()
		];

		$meta['page_title'] = "form pembayaran";
		$this->load->view('template/header', $meta);
		$this->load->view('v_pembayaran', $data);
		$this->load->view('template/footer');
	}



}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */