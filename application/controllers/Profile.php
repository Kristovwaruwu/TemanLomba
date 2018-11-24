<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function index(){
		$params['page'] = 'home/index';
		$params['data']['tes']='aaaa';
		$this->load->view('profile/layout',$params);
	}

}