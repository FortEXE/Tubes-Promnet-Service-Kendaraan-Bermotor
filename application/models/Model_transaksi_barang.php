<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaksi_barang extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getAll()
	{
		$data = $this->db->get('transaksi_barang');
        return $data->result_array();
	}

}

/* End of file Model_transaksi_barang.php */
/* Location: ./application/models/Model_transaksi_barang.php */

?>