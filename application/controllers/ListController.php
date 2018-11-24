<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(['M_Lomba']);
	}

	public function index(){
		$params['page'] = 'list/index';
		$params['data']['lomba']=$this->M_Lomba->getAll();
		$this->load->view('list/layout',$params);
	}

	
}