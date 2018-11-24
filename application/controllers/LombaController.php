<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LombaController extends CI_Controller {

	function index(){
		$params['page'] = 'lomba/index';
		$params['data']['tes']='aaaa';
		$this->load->view('dashboard/layout',$params);
	}
}