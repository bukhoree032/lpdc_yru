<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Honey_sh_c extends CI_Controller {

	// public function __construct()
 //    {
 //    	parent::__construct();
 //    	$this->load->model('Honey_model');
 //    }

	public function index()
	{
		// $this->load->view('test');
		$this->load->view('welcome_message');
	}

	public function househole()
	{
		// $househole['househole']=$this->Honey_model->househole();

		$this->load->view('househole/manage',$househole);
	}
}
