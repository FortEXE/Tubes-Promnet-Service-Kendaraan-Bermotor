<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getAll()
	{
		$data = $this->db->get('barang');
        return $data->result_array();
	}

}

/* End of file Model_barang.php */
/* Location: ./application/models/Model_barang.php */

?>