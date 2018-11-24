<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		session_start();
		$this->load->database();
		$this->load->model('DB');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login()
	{
		if (!isset( $_POST["password"])){
			header('Location: '.base_url()."dashboard");
		}
		$uname = $_POST["username"];
		$password = $_POST["password"];

		$result = $this->DB->login($uname, $password);

		//set into session
		$SESSION["username"] = $uname;
		
	}
}
