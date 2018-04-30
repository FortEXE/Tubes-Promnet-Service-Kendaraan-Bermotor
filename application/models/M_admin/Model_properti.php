<?php 

 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Model_properti extends CI_Model {
 
 	public function __construct()
	{
		parent::__construct();
		// do your magic here
	}

	public function cek_properti($data) {
		$query = $this->db->get_where('t_properti', $data);
		return $query;
	}

	public function GetAll()
    {   

        $data = $this->db->get('t_properti');
        return $data->result_array();
    }

    public function GetById($xid){

    	$data = $this->db->select('*')->from('t_properti')->where('id',$xid)->get();
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
 
 /* End of file Model_property.php */
 /* Location: ./application/models/Model_properti.php */ 

 ?>

