<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    function __construct()
	{
        parent::__construct();
		$this->load->database();
        $this->load->model('DB');
    }
    
	function index(){
        /*
        if (isset($_SESSION['Username'])){
            header('Location: '.base_url()."profile/".$_SESSION['Username']);
            die();
        }
        else{
            header('Location: '.base_url());
            die();
        }*/

        $uname = $_SESSION['username'];
		$params['page'] = 'view/index';
		$params['data']['data'] = $this->DB->getUserData($uname);
		$this->load->view('profile/layout',$params);
    }

    function otherProfile($id)
    {
        $uname = $id;
        $data = $this->DB->getUserData($uname);
        if ($data === -1){
            show_404();
            return;
        }
		$params['page'] = 'view/index';
        $params['data']['data'] = $data;
		$this->load->view('profile/layout',$params);
    }
    
    function edit(){
        $uname = $_SESSION['username'];
        $params['page'] = 'edit/index';
        $params['data']['data'] = $this->DB->getUserData($uname);
		$this->load->view('profile/layout',$params);
    }
}