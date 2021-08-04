<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_c extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Dashboard_m/Dashboard_m');
    	$this->load->model('Household_m/Manage_m');
    	$this->load->model('Household_m/Evaluate_m');

    	$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'Dashboard');
    }

	public function index1()
	{
        // print_r($this->Manage_m->manage_dashboard());
		// $househole['househole']=$this->Manage_m->manage();
		$data = $this->Dashboard_m->manage_hol();
		echo"<pre>";
		print_r($data);
		echo "</pre>";

		// $manage_year['manage_year']=$this->Manage_m->manage_year();
		// $manage_provinces['manage_provinces']=$this->Manage_m->manage_provinces();
		// $activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		// $activity_hold['activity_hold']=$this->Evaluate_m->activity_hold();


		// $this->load->view('page',$activity_hold);
		// $this->load->view('page',$manage_dashboard);
		// $this->load->view('page',$activity_nav);
		// $this->load->view('head',$manage_provinces);
		// $this->load->view('page',$manage_year);
		// $this->load->view('popup/success');
		// $this->load->view('household/manage/household_data',$househole);

		// echo json_encode($manage_dashboard['manage_dashboard']);
	}

	public function index()
	{
		$data['Dashboard'] = $this->Dashboard_m->manage_hol();
		$househole['househole']=$this->Manage_m->manage();
		$manage_dashboard['manage_dashboard']=$this->Manage_m->manage_dashboard();
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$manage_provinces['manage_provinces']=$this->Manage_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$activity_hold['activity_hold']=$this->Evaluate_m->activity_hold();


		$this->load->view('page',$activity_hold);
		$this->load->view('page',$manage_dashboard);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_provinces);
		$this->load->view('page',$manage_year);
		$this->load->view('popup/success',$data);
		$this->load->view('dashboard/dashboard',$househole);
		// echo json_encode($manage_dashboard['manage_dashboard']);
	}
}
