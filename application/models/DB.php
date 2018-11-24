<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DB extends CI_Model {

	public function login($user, $password)
	{
		/*
			Checking login
		*/
		//hashing
		$password = $password;

		$q = "SELECT * FROM tbl_user WHERE Username = '$user' AND Password = '$password' ";
		$query = $this->db->query($q);
		$result = $query->result_array();
		//return $query->result();
		return count($result)?true:false;
	}

	public function createUser($arr)
	{
		/*
			Creating User
		*/
		$arr = array($arr["Username"], $arr["Password"], $arr["Email"],
			$arr["Institution"], $arr["Bio"]
		);
		$q = "INSERT INTO tbl_user (Username,Password,Email,Institution,Bio) VALUES (?,?,?,?,?)";
		return $this->db->simple_query($q,$arr);
	}

	public function getUserData($uname)
	{
		$q = "SELECT Username,Email,Name,Institution,Bio,Main_interest FROM tbl_user WHERE Username = ? LIMIT 1";
		$result = $this->db->query($q,$uname);

		return $result->row_array();
	}

	public function setUserData($arr)
	{
		$arr = array($arr["Name"], $arr["Institution"], $arr["Bio"], $arr["Username"]);
		$q = "UPDATE tbl_user SET Name = ? Institution = ? , Bio = ? WHERE Username = ?";

		return $result = $this->db->simple_query($q,$arr);
	}
}