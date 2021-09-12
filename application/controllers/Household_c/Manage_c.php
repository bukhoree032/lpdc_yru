<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_c extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Household_m/Manage_m');
    	$this->load->model('Household_m/Evaluate_m');
    	$this->load->model('Dashboard_m/Dashboard_m');

    	$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'househole_manag');
		
    }

	public function modal_success()
	{
    	$this->session->set_flashdata('manage_success','บันทึกการเปลียนแปลงสำเร็จ');
	}

	public function index()
	{
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
		$this->load->view('popup/success');
		$this->load->view('household/manage/household_data',$househole);
		// echo json_encode($manage_dashboard['manage_dashboard']);
	}

	public function househole_search()
	{
		$househole['househole']=$this->Manage_m->househole_search();
		$manage_dashboard['manage_dashboard']=$this->Manage_m->manage_dashboard();
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$manage_provinces['manage_provinces']=$this->Manage_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$activity_hold['activity_hold']=$this->Evaluate_m->activity_hold();

		$this->load->view('page',$activity_hold);
		$this->load->view('page',$manage_dashboard);
		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('page',$manage_provinces);
		$this->load->view('page',$manage_year);
		$this->load->view('household/manage/household_data',$househole);
	}

	public function househole($h_id)
	{
		$househole['househole']=$this->Manage_m->manage_detail($h_id);
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_detail_imag);
		$this->load->view('household/manage/household_detail',$househole);
	}

	public function eva_add($h_id)
	{
		$this->session->set_flashdata('exit','manage');

		$eva_add['eva_add']=$this->Evaluate_m->eva_add($h_id);
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$provinces['provinces']=$this->Manage_m->manage_provinces();
		$househole['househole']=$this->Manage_m->manage_detail($h_id);
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);
	    // echo json_encode($househole['househole']);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		

		$this->load->view('page',$manage_detail_imag);
		$this->load->view('page',$manage_year);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$eva_add);
		$this->load->view('page',$provinces);
		$this->load->view('household/manage/household_edit',$househole);
	}

	public function eva_insert()
	{
		$h_id = $this->input->post('h_id');

		$eva_insert['eva_insert']=$this->Evaluate_m->eva_insert($h_id);

		// echo json_encode($eva_insert['eva_insert']);
		$this->modal_success();

		// $this->load->view('head',$eva_insert);
		$this->load->view('household/manage/url_manage');
	}

	public function eva_update()
	{
		$h_id = $this->input->post('h_id');

		$eva_update['eva_update']=$this->Evaluate_m->eva_update($h_id);

		$this->modal_success();

		$this->load->view('head');
		$this->load->view('household/manage/url_manage',$h_id);
	}
	
	public function househole_edit($h_id)
	{
		// $this->session->set_flashdata('exit','manage');

		$eva_add['eva_add']=$this->Evaluate_m->eva_add($h_id);
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$provinces['provinces']=$this->Manage_m->manage_provinces();
		$househole['househole']=$this->Manage_m->manage_detail($h_id);
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);
	    // echo json_encode($househole['househole']);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		

		$this->load->view('page',$manage_detail_imag);
		$this->load->view('page',$manage_year);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$eva_add);
		$this->load->view('page',$provinces);
		$this->load->view('popup/success');
		$this->load->view('popup/aaa');
		$this->load->view('household/manage/household_edit',$househole);
	}

	public function househole_update()
	{
		$h_id = $this->input->post('h_id');
		$househole_up['househole_up']=$this->Manage_m->manage_update();
		$househole['househole']=$this->Manage_m->manage_detail($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);

		$this->modal_success();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_detail_imag);
		$this->load->view('popup/success');
		$this->load->view('household/manage/household_detail',$househole);
	}

	public function househole_add()
	{
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$provinces['provinces']=$this->Manage_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_year);
		$this->load->view('household/manage/household_add',$provinces);
	}

	public function househole_insert()
	{
		$this->modal_success();

		$househole['househole']=$this->Manage_m->manage_insert();
	}

	public function househole_bin($h_id)
	{
		$this->Manage_m->manage_bin($h_id);
		$househole['househole']=$this->Manage_m->manage();
		$manage_dashboard['manage_dashboard']=$this->Manage_m->manage_dashboard();
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$manage_provinces['manage_provinces']=$this->Manage_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$activity_hold['activity_hold']=$this->Evaluate_m->activity_hold();

		$this->modal_success();

		$this->load->view('page',$manage_dashboard);
		$this->load->view('page',$activity_hold);
		$this->load->view('page',$manage_provinces);
		$this->load->view('page',$manage_year);
		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		// $this->load->view('popup/success');
		$this->load->view('household/manage/url_manage');	
		// $this->load->view('household/manage/household_data',$househole);

	}

	public function househole_data_bin()
	{

		// $this->Manage_m->manage_bin($h_id);
		$househole_data_bin['househole_data_bin']=$this->Manage_m->househole_data_bin();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('popup/success');
		$this->load->view('household/manage/household_bin',$househole_data_bin);
	}

	public function househole_bin_detail($h_id)
	{	
		$this->session->set_flashdata('exit','manage');

		$househole['househole']=$this->Manage_m->manage_detail($h_id);
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_detail_imag);
		$this->load->view('household/manage/household_detail',$househole);
	}

	public function househole_not_bin($h_id)
	{	

		$this->Manage_m->househole_not_bin($h_id);
		$househole_data_bin['househole_data_bin']=$this->Manage_m->househole_data_bin();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->modal_success();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		// $this->load->view('popup/success');
		// $this->load->view('household/manage/household_bin',$househole_data_bin);
		$this->load->view('household/manage/url_manage_bin');
	}

	public function dashbordMoo()
	{
		$data['manage_dashboard']=$this->Dashboard_m->manage_hol1("","","","household"); //ปี/ถึงปี/จังหวัด/โครงการ
		$data['manage_year']=$this->Manage_m->manage_year();
		// $manage_provinces['manage_provinces']=$this->Manage_m->manage_provinces();
		$data['activity_nav']=$this->Manage_m->activity_nav();
		$data['activity_hold']=$this->Evaluate_m->activity_hold();

		$this->load->view('page',$data);
		$this->load->view('head');
		$this->load->view('dashboard/dashbordMoo');
	}
}
