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
		$data = $this->db->get('barang',20, 10);
        return $data->result_array();
	}

	public function data($page, $from)
	{
		$data = $this->db->get('barang',$page, $from);
        return $data->result_array();
	}

	public function getById($xid)
	{
		$data = $this->db->where('ID_BARANG', $xid)->get('barang');
        return $data->result_array();
	}

	function jumlah_data(){
		return $this->db->get('barang')->num_rows();
	}

}

/* End of file Model_barang.php */
/* Location: ./application/models/Model_barang.php */

?>