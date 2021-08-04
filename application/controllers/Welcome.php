<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }
	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Household_m/Manage_m');
    	$this->load->model('Login_m/Login_m');
    	
    	$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'househole_manag');
    }

	public function index()
	{
		if(empty($this->session->userdata('login'))){
			$this->load->view('login/login');
		}else{
			$this->load->view('household/manage/url_manage');
		}
	}

	public function login()
	{
		$this->load->view('login/login');
	}

	public function check_login()
	{
		$check_login['check_login']=$this->Login_m->check_login();
		$check_login1=$this->Login_m->check_login();

		if ($check_login['check_login']) {
			$this->session->set_userdata("login","ok");
			$this->load->view('household/manage/url_manage');
	    }else{
			$this->load->view('login/login');
		}
	}

	public function logout()
	{
		// $pro = $this->session->userdata('login');
		// echo $pro;
		
		$this->session->unset_userdata("login");

		$this->load->view('login/login');
	}

}
