<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pelanggan extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getAll()
	{
		$data = $this->db->get('pelanggan');
        return $data->result_array();
	}

	public function insertData($data)
	{
		$q = $this->db->insert('Pelanggan', $data);

		if ($q) {
			return true;
		}
	}

	public function startTransaksi()
	{
		$this->db->trans_start();
	}

	public function endTransaction()
	{
		$this->db->trans_commit();
	}

	public function rollback()
	{
		$this->db->trans_rollback();
	}

	public function commit()
	{
		$this->db->trans_commit();
	}
}

/* End of file Model_pelanggan.php */
/* Location: ./application/models/Model_pelanggan.php */

?>