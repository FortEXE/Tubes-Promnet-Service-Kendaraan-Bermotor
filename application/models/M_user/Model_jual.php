<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Model_jual extends CI_Model {
 
 	public function __construct()
	{
		parent::__construct();
		// do your magic here
	}

	public function cek_properti($data) {
		$query = $this->db->get_where('t_properti', $data);
		return $query;
	}

	public function GetAllProperti()
    {   

        $data = $this->db->get('t_properti');
        return $data->result_array();
    }

    public function GetAllUser()
    {   

        $data = $this->db->get('multi_login');
        return $data->result_array();
    }

    public function GetByIdProperti($xid){

    	$data = $this->db->select('*')->from('t_properti')->where('id',$xid)->get();
    	return $data->result_array();
    }

    public function GetByIdUser($xid){

    	$data = $this->db->select('*')->from('multi_login')->where('id',$xid)->get();
    	return $data->result_array();
    }

    public function insertData($data){

    	$q = $this->db->insert('t_properti', $data);
    }

    public function deleteData($data){

    	$q = $this->db->where('id', $data['id']);
    	$q = $this->db->delete('t_properti');
    }

    public function updateData($data){

    	$q = $this->db->where('id', $data['id']);
    	$q = $this->db->update('t_properti', $data);
    }
 
 }
 
 /* End of file Model_jual.php */
 /* Location: ./application/models/M_user/Model_jual.php */ 
 ?>

 