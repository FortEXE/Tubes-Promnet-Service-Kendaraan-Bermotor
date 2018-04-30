<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Model_log extends CI_Model {
	
		public function __construct()
		{
			parent::__construct();
			// do your magic here
		}

		public function cek_log($data) {
			$query = $this->db->get_where('t_logTransaksi', $data);
			return $query;
		}

		public function GetAll()
	    {
	        $data = $this->db->get('t_logTransaksi');
	        return $data->result_array();
	    }

	    public function GetById($xid){

	    	$data = $this->db->select('*')->from('t_logTransaksi')->where('id',$xid)->get();
	    	return $data->result_array();
	    }

	    public function deleteData($data){

	    	$q = $this->db->where('id', $data['id']);
	    	$q = $this->db->delete('t_logTransaksi');
	    }

	}
	
	/* End of file Model_logTransaksi.php */
	/* Location: ./application/models/Model_logTransaksi.php */
 ?>