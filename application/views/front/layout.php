<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('front/header');
$this->load->view('front/menu');
$this->load->view('front/'.$page,$data);
$this->load->view('loginmodal');
$this->load->view('registermodal');
$this->load->view('front/footer');