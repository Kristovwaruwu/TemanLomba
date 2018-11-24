<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->model('DB');
        session_start();
    }
    
	function index(){
        $uname = $_SESSION['username'];
		$params['page'] = 'view/index';
		$params['data']['data'] = $this->DB->getUserData($uname);
		$this->load->view('profile/layout',$params);
    }
    
    function edit(){
        $uname = $_SESSION['username'];
		$params['page'] = 'edit/index';
		$this->load->view('profile/layout',$params);
    }
}