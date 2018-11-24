<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(['M_Lomba']);
	}

	public function index(){
		$params['page'] = 'list-lomba/index';
		$params['data']['lomba']=$this->M_Lomba->getAll();
		$this->load->view('front/layout',$params);
	}

	public function detail($id){
		$params['page'] = 'list-lomba/detail';
		$params['data']['lomba']=$this->M_Lomba->getSingleLomba($id);
		$this->load->view('front/layout',$params);
	}

	
}