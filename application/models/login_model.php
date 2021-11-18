<?php

class Login_model extends CI_Model{


	

	public function __construct()
	{

		parent::__construct();

	}

	 public function login($username,$password)
	{

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$q = $this->db->get('users');
		if($q->num_rows()>0) 
		{
			return TRUE;
		}else
		{
			return FALSE;
		}

	}













}






?>