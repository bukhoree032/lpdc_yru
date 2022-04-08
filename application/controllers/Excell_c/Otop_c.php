<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Otop_c extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Household_m/Manage_m');
    	$this->load->model('Otop_m/Manage_otop_m');
    	$this->load->model('Excell_m/Otop_m');

    	$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'12');
    }

    public function modal_success()
	{
    	$this->session->set_flashdata('manage_success','บันทึกการเปลียนแปลงสำเร็จ');
	}

	public function index()
	{
		// echo'aa';
		$otop['excell']=$this->Otop_m->otop_search();

		$this->load->view('excell/otop_excell',$otop);
	}
}
