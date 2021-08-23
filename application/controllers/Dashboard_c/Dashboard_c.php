<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_c extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Dashboard_m/Dashboard_m');
    	$this->load->model('Household_m/Manage_m');
    	$this->load->model('Household_m/Evaluate_m');

    	$this->load->model('Japo_m/Japo_m');
    	$this->load->model('Otop_m/Manage_otop_m');
    	$this->load->model('Otop_m/Otop_ubi_m');

    	$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'Dashboard');
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

		// รวมหมู่บ้าน
		$hold_dashboard['hold_dashboard']=$this->Japo_m->manage_dashboard();
		$o_manage_dashboard['o_manage_dashboard']=$this->Manage_otop_m->o_manage_parish();
		$o_ubi_dashboard['o_ubi_dashboard']=$this->Otop_ubi_m->o_ubi_dashboard();
		$data['all_moo'] = $o_ubi_dashboard['o_ubi_dashboard']['all_moo']+ $o_manage_dashboard['o_manage_dashboard']['all_moo']+$manage_dashboard['manage_dashboard']['all_moo']+$hold_dashboard['hold_dashboard']['all_moo'];
		$data['yala_moo'] = $o_ubi_dashboard['o_ubi_dashboard']['yala_moo']+ $o_manage_dashboard['o_manage_dashboard']['yala_moo']+$manage_dashboard['manage_dashboard']['yala_moo']+$hold_dashboard['hold_dashboard']['yala_moo'];
		$data['nara_moo'] = $o_ubi_dashboard['o_ubi_dashboard']['nara_moo']+ $o_manage_dashboard['o_manage_dashboard']['nara_moo']+$manage_dashboard['manage_dashboard']['nara_moo']+$hold_dashboard['hold_dashboard']['nara_moo'];
		$data['pat_moo'] = $o_ubi_dashboard['o_ubi_dashboard']['pat_moo']+ $o_manage_dashboard['o_manage_dashboard']['pat_moo']+$manage_dashboard['manage_dashboard']['pat_moo']+$hold_dashboard['hold_dashboard']['pat_moo'];


		$this->load->view('page',$activity_hold);
		$this->load->view('page',$manage_dashboard);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_provinces);
		$this->load->view('page',$manage_year);
		$this->load->view('popup/success',$data);
		$this->load->view('dashboard/dashboard',$househole);
	}
}
