<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DB extends CI_Model {

	public $user;

	public function login($password)
	{
		//hashing
		$password = $password;
		$q = "SELECT * FROM user WHERE uname = '$this->user' AND pass = '$password' ";
		$query = $this->db->query($q);
		//return $query->result();
		return $q;
	}

	public function setUser($user)
	{
		$this->user = $user;
	}

}