<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			// do your magic here
		}

		public function cek_user($data) {
			$query = $this->db->get_where('multi_login', $data);
			return $query;
		}

    	public function GetAll()
	    {
	        $data = $this->db->get('multi_login');
	        return $data->result_array();
	    }

	    public function GetById($xid){

	    	$data = $this->db->select('*')->from('multi_login')->where('id',$xid)->get();
	    	return $data->result_array();
	    }

	    public function insertData($data){

	    	$q = $this->db->insert('multi_login', $data);
	    }

	    public function deleteData($data){

	    	$q = $this->db->where('id', $data['id']);
	    	$q = $this->db->delete('multi_login');
	    }

	    public function updateData($data){

	    	$q = $this->db->where('id', $data['id']);
	    	$q = $this->db->update('multi_login', $data);
	    }

	}



?>