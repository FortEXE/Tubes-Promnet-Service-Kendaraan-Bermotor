<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_beli extends CI_Model {

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

    public function insertLog($data){
    	$q = $this->db->insert('t_logTransaksi', $data);
    }

}

/* End of file Model_beli.php */
/* Location: ./application/models/M_user/Model_beli.php */
 ?>