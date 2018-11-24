<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('DB');
		$this->DB->user = "test";
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login()
	{
		//TODO atur set ke userna
		if (!isset( $_POST["uname"])){
			//echo base_url();
			//header('Location: '.base_url());
			//die();
		}
		$result = $this->DB->login("123");

		echo $result;
		if ($result){
			echo '1';
		}
		else{
			echo '0';
		}
		
	}
}
