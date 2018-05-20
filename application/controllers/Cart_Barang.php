<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function add()
	{
		// $this->cart->insert();

		$id = $this->input->post('id_barang');
		$qty = $this->input->post('qty_barang');
		$price = $this->input->post('harga_barang');
		$name = $this->input->post("nama_barang");

		$data = [
			'id'      => $id,
			'qty'     => $qty,
			'price'   => $price,
			'name'    => $name
						
		];
		
		if($this->cart->insert($data)){
			echo 'data ditambah';
			redirect(site_url('controller_utama/beliBarang'),'refresh');
			
		}else {
			echo 'data gagal ditambahkan';
		}
	}

	public function remove()
	{
		$this->cart->update($data);
	}

	public function show()
	{
		$cart = $this->cart->contents();
		foreach ($cart as $value) {
			echo 'rowid: '. $value['rowid'] . '<br>';
			echo 'id: '. $value['id'] . '<br>';
			echo 'qty: '. $value['qty'] . '<br>';
			echo 'harga: '. $value['price'] . '<br>';
			echo 'nama: '. $value['name'] . '<br>';
			echo 'sub total: '. $value['subtotal'] . '<br><br>';
		}

		echo 'total harga: Rp. '. number_format($this->cart->total(),0,'.','.');

		$this->load->view('v_keranjangbarang');
	}

	public function destroy()
	{
		$this->cart->destroy();
		redirect(site_url(''),'refresh');
	}



}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */