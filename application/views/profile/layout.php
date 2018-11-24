<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('profile/header');
$this->load->view('profile/'.$page,$data);
$this->load->view('profile/footer');