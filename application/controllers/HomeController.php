<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	function index(){
		$params['page'] = 'home/index';
		$params['data']['tes']='aaaa';
		$this->load->view('front/layout',$params);
	}

}