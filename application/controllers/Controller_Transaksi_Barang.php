<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Transaksi_Barang extends CI_Controller {

	public function index()
	{
		
	}

	public function proses_pembayaran()
	{

		$bayar = $this->input->post('jumlahpembayaran');
		$harga = $this->cart->total();

		if($harga == $bayar){
			redirect('cart_barang/destroy','refresh');
		}
	}

}

/* End of file Controller_Transaksi_Barang.php */
/* Location: ./application/controllers/Controller_Transaksi_Barang.php */