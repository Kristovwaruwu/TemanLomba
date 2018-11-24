<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('dashboard/header');
$this->load->view('dashboard/'.$page,$data);
$this->load->view('dashboard/footer');