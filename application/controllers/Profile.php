<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('DB');
    }
    
	function index(){
		$params['page'] = 'home/index';
		$params['data']['tes']='aaaa';
		$this->load->view('profile/layout',$params);
	}
}