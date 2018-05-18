<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaksi_jasa extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getAll()
	{
		$data = $this->db->get('transaksi_jasa');
        return $data->result_array();
	}

}

/* End of file Model_transaksi_jasa.php */
/* Location: ./application/models/Model_transaksi_jasa.php */


?>