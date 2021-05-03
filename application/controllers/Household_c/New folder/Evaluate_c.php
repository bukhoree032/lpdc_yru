<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluate_c extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Household_m/Evaluate_m');
    	$this->load->model('Household_m/Manage_m');
    	
    	$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'househole_eva');
    	
    }

    public function modal_success()
	{
    	$this->session->set_flashdata('manage_success','บันทึกการเปลียนแปลงสำเร็จ');
	}

	public function index()
	{
		$househole['househole']=$this->Manage_m->manage();
		$manage_dashboard['manage_dashboard']=$this->Manage_m->manage_dashboard();
		$activity_nav['activity_nav']=$this->Evaluate_m->activity_nav();
		$activity_hold['activity_hold']=$this->Evaluate_m->activity_hold();
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$manage_provinces['manage_provinces']=$this->Manage_m->manage_provinces();

		$this->load->view('page',$manage_dashboard);
		$this->load->view('page',$manage_year);
		$this->load->view('page',$manage_provinces);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$househole);
		$this->load->view('household/evaluate/evaluate_house',$activity_hold);
	}

	public function eva_search()
	{
		$househole['househole']=$this->Manage_m->househole_search();
		$manage_dashboard['manage_dashboard']=$this->Manage_m->manage_dashboard();
		$activity_nav['activity_nav']=$this->Evaluate_m->activity_nav();
		$activity_hold['activity_hold']=$this->Evaluate_m->activity_hold();
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$manage_provinces['manage_provinces']=$this->Manage_m->manage_provinces();

		$this->load->view('page',$manage_dashboard);
		$this->load->view('page',$activity_nav);
		$this->load->view('page',$manage_provinces);
		$this->load->view('page',$manage_year);
		$this->load->view('head',$activity_hold);
		$this->load->view('household/evaluate/evaluate_house',$househole);
	}

	public function eva_detail($h_id)
	{
		$househole['househole']=$this->Manage_m->manage_detail($h_id);
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_detail_imag);
		$this->load->view('household/evaluate/evaluate_detail',$househole);
	}

	public function eva_h_edit($h_id)
	{
		$provinces['provinces']=$this->Manage_m->manage_provinces();
		$househole['househole']=$this->Manage_m->manage_detail($h_id);
	    // echo json_encode($househole['househole']);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('page',$provinces);
		$this->load->view('household/evaluate/evaluate_detail_edit',$househole);
	}

	public function househole_update()
	{
		$h_id = $this->input->post('h_id');

		$househole_up['househole_up']=$this->Manage_m->manage_update();
		$househole['househole']=$this->Manage_m->manage_detail($h_id);
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->modal_success();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_detail_imag);
		$this->load->view('popup/success');
		$this->load->view('household/evaluate/evaluate_detail',$househole);
	}

	public function eva_property()
	{
		

		// $provinces['provinces']=$this->Manage_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('household/evaluate/evaluate_property');
	}

	public function eva_add($h_id)
	{
	
		$eva_add['eva_add']=$this->Evaluate_m->eva_add($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$eva_add);
		$this->load->view('household/evaluate/evaluate_detail_add',$manage_detail_imag);
	}

	public function eva_insert()
	{
		$h_id = $this->input->post('h_id');

		$eva_insert['eva_insert']=$this->Evaluate_m->eva_insert($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);
		$househole['househole']=$this->Manage_m->manage_detail($h_id);

		$hid['hid']=$this->Evaluate_m->eva_id($h_id);

		$this->modal_success();
		// echo json_encode($eva_insert['eva_insert']);
		
		$this->load->view('household/evaluate/url_detail',$hid);
	}

	public function eva_update()
	{
		$h_id = $this->input->post('h_id');

		$eva_update['eva_update']=$this->Evaluate_m->eva_update($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);
		$househole['househole']=$this->Manage_m->manage_detail($h_id);


		$this->modal_success();
		// echo json_encode($eva_insert['eva_insert']);

		$this->load->view('page',$househole);
		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('popup/success');
		$this->load->view('household/evaluate/evaluate_detail',$manage_detail_imag);
	}

	public function detel_imag()
	{
		$imag_id = $this->input->post('id');
		$this->Evaluate_m->detel_imag($imag_id);

		echo json_encode($imag_id);
	}

	public function detel_imag_pro()
	{
		$imag_id = $this->input->post('id');
		$this->Evaluate_m->detel_imag_pro($imag_id);

		echo json_encode($imag_id);
	}

	public function eva_update_phone($h_id)
	{
		$househole['househole']=$this->Evaluate_m->eva_add($h_id);
		$activity_nav['activity_nav']=$this->Evaluate_m->activity_nav();
		$activity_hold['activity_hold']=$this->Evaluate_m->activity_hold();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$househole);
		$this->load->view('household/evaluate/evaluate_property',$activity_hold);
	}
}
