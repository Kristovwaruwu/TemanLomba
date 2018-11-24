<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LombaController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(['M_Lomba']);
		if (!isset($_SESSION["username"])){
			header('Location: '.base_url());	
			die();
		}
	}

	public function index(){
		$params['page'] = 'lomba/index';
		$params['data']['lomba']=$this->M_Lomba->getAll();
		$this->load->view('dashboard/layout',$params);
	}

	public function item($id){
		$params['page'] = 'lomba/item';
		$result = $this->M_Lomba->getSingleLomba($id);
		$params['data']['lomba']=$result;
		$params['data']['nama']=$result[0]["Judul"];
		$this->load->view('dashboard/layout',$params);
	}

	public function add(){
		$params['page'] = 'lomba/add';
		$params['data']['kategori'] = $this->M_Lomba->getAllKategoriLomba();
		$post = $this->input->post();
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$data = [
				"Judul" => $post['judul'],
				"Id_Kategori" => $post['kategori'],
				"Deskripsi" =>$post['deskripsi']
			];

			if($this->M_Lomba->save($data)){
				redirect(base_url()."dashboard/lomba");
			}

		}
		
		$this->load->view('dashboard/layout',$params);
	}
}