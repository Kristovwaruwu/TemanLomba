<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	function index(){
		$params['page'] = 'home/index';
		$params['data']['tes']='aaaa';
		$this->load->view('dashboard/layout',$params);
	}

}