<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_Jasa extends CI_Controller {

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
			
		}else {
			echo error_reporting();
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
			echo $value['rowid'] . '<br>';
			echo $value['id'] . '<br>';
			echo $value['qty'] . '<br>';
			echo $value['price'] . '<br>';
			echo $value['name'] . '<br><br>';
		}
	}

	public function destroy()
	{
		$this->cart->destroy();
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */