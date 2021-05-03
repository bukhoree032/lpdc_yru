<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_japo_c extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Household_m/Evaluate_m');
    	$this->load->model('Household_m/Manage_m');
    	$this->load->model('Household_m/Honey_m');
    	$this->load->model('Household_m/Chicken_m');
    	$this->load->model('Japo_m/Japo_m');

    	$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'27');
    }

	public function modal_success()
	{
    	$this->session->set_flashdata('manage_success','บันทึกการเปลียนแปลงสำเร็จ');
	}

	public function index()
	{
		$japo['japo']=$this->Japo_m->manage();
		$activity_nav['activity_nav']=$this->Japo_m->activity_nav();
		$hold_dashboard['hold_dashboard']=$this->Japo_m->manage_dashboard();
		$manage_year['manage_year']=$this->Japo_m->manage_year();
		$manage_provinces['manage_provinces']=$this->Manage_m->manage_provinces();


		// echo json_encode($japo['japo']);

		$this->load->view('page',$manage_year);
		$this->load->view('page',$manage_provinces);
		$this->load->view('head',$activity_nav);
		$this->load->view('modal/modal');
		$this->load->view('household/hold_dashboard',$hold_dashboard);
		$this->load->view('japo_model/japo_model',$japo);
	}
	
	public function japo_add()
	{
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$provinces['provinces']=$this->Manage_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_year);
		$this->load->view('japo_model/japo_add',$provinces);
	}

	public function japo_insert()
	{
		$this->modal_success();

		$househole['househole']=$this->Japo_m->japo_insert();
	}

	public function japo_search()
	{
		// echo $ac_id;
		$japo['japo']=$this->Japo_m->japo_search();
		$manage_year['manage_year']=$this->Japo_m->manage_year();
		$hold_dashboard['hold_dashboard']=$this->Japo_m->manage_dashboard();
		$manage_provinces['manage_provinces']=$this->Japo_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		// echo json_encode($manage_year['manage_year']['cal']);
		$this->load->view('page',$activity_nav);
		$this->load->view('page',$manage_provinces);
		$this->load->view('head',$manage_year);
		$this->load->view('household/hold_dashboard',$hold_dashboard);
		$this->load->view('japo_model/japo_model',$japo);
	}
}
