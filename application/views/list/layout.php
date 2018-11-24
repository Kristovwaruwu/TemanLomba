<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('dashboard/header');
$this->load->view('dashboard/menu');
$this->load->view('dashboard/'.$page,!empty($data)?$data:null);
$this->load->view('dashboard/footer');