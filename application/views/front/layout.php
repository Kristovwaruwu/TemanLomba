<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if($page =="home/index"){
	$this->load->view('front/headerhome');
	$this->load->view('front/menuhome');
} else{
	$this->load->view('front/header');
	$this->load->view('front/menu');
}


$this->load->view('front/'.$page,$data);
$this->load->view('loginmodal');
$this->load->view('registermodal');
$this->load->view('front/footer');