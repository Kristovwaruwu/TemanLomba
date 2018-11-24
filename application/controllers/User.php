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
		//$this->load->view('welcome_message');

		//jangan lupa dihapus
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/menu');
		$this->load->view('coba');
		$this->load->view('dashboard/footer');
	}

	public function login()
	{
		if (!isset( $_POST["Password"])){
			header('Location: '.base_url()."dashboard");
		}
		$uname = $_POST["Username"];
		$password = $_POST["Password"];

		$result = $this->DB->login($uname, $password);

		//set into session
		if ($result) 
		{
			$SESSION["username"] = $uname;
			$SESSION["status"] = "active";
			echo 'test';

			//TODO send kalau berhasil login
			//header('Location: '.base_url()."welcome");	
		}
		else {
			//TODO set kalau salah
			echo 'gagal';

			//header('Location: '.base_url()."dashboard");
		}
	}

	public function logout()
	{
		session_destroy();
		header('Location: '.base_url());
		die();
	}

	public function create()
	{
		if (!isset( $_POST["Password"])){
			show_404();
		}
		$result = $this->DB->createUser($_POST);

		if ($result) 
		{
			//TODO send kalau berhasil daftar
			header('Location: '.base_url()."dashboard");	
			die();
		}
		else {
			//TODO set kalau gagal daftar
		}
	}

	
}
