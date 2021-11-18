<?php

class Register_model extends CI_Model{

	public function ekle($data=array(),$table){

		$result=$this->db->insert($table,$data);

		return $result;
	}




	
}
?>