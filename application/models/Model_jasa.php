<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jasa extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getAll()
	{
		$data = $this->db->get('jasa');
        return $data->result_array();
	}

}

/* End of file Model_jasa.php */
/* Location: ./application/models/Model_jasa.php */

?>