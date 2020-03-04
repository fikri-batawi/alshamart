<?php 

class Auth_model extends CI_Model{

	public function register($data)
	{
		return $this->db->insert('user', $data);
	}

	public function getUser($email){
		return $this->db->get_where('user', ['email' => $email])->row_array();
	}

	public function totalUser(){
		return $this->db->count_all('user');
	}

}