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
		$data['dashboard_pat']=$this->Dashboard_m->manage_hol1('','','74',''); //ปี/ถึงปี/จังหวัด/โครงการ ปัตตานี
		$data['dashboard_yala']=$this->Dashboard_m->manage_hol1('','','75',''); //ปี/ถึงปี/จังหวัด/โครงการ ยะลา
		$data['dashboard_nara']=$this->Dashboard_m->manage_hol1('','','76',''); //ปี/ถึงปี/จังหวัด/โครงการ นรา
		$data['dashboard_all']=$this->Dashboard_m->manage_hol1('','','',''); //ปี/ถึงปี/จังหวัด/โครงการ รวม

		$data['manage_dashboard']=$this->Manage_m->manage_dashboard();
		$data['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('head',$data);
		$this->load->view('popup/success');
		$this->load->view('dashboard/dashboard');
	}

	public function dashbordMoo()
	{
		$data['budget'] = '';
		$data['tobudget'] = '';
		$data['province'] = '';
		$data['acti'] = '';
		$data['manage_dashboard']=$this->Dashboard_m->manage_hol1($data['budget'],$data['tobudget'],$data['province'],$data['acti']); //ปี/ถึงปี/จังหวัด/โครงการ
		$data['manage_year']=$this->Manage_m->manage_year();
		$data['manage_provinces']=$this->Manage_m->manage_provinces();
		$data['activity_nav']=$this->Manage_m->activity_nav();
		$data['activity_hold']=$this->Evaluate_m->activity_hold();


		$this->load->view('page',$data);
		$this->load->view('head');
		$this->load->view('dashboard/dashbordMoo');
	}

	public function dashbordMoo_search()
	{
		$data['budget'] = $this->input->post('budget');
		$data['tobudget'] = $this->input->post('tobudget');
		$data['province'] = $this->input->post('province');
		$data['acti'] = $this->input->post('acti');
		$data['manage_dashboard']=$this->Dashboard_m->manage_hol1($data['budget'],$data['tobudget'],$data['province'],$data['acti']); //ปี/ถึงปี/จังหวัด/โครงการ
		$data['manage_year']=$this->Manage_m->manage_year();
		$data['manage_provinces']=$this->Manage_m->manage_provinces();
		$data['activity_nav']=$this->Manage_m->activity_nav();
		$data['activity_hold']=$this->Evaluate_m->activity_hold();


		$this->load->view('page',$data);
		$this->load->view('head');
		$this->load->view('dashboard/dashbordMoo');
	}
}