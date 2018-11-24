<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LombaController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(['M_Lomba']);
	}

	public function index(){
		$params['page'] = 'lomba/index';
		$params['data']['lomba']=$this->M_Lomba->getAll();
		$this->load->view('dashboard/layout',$params);
	}
}