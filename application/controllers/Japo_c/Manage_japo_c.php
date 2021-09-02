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

		$this->load->view('japo_model/url_index');
	}

	public function japo_edit($j_id)
	{
		$this->modal_success();
		
		$data=$this->Japo_m->japo_edit($j_id);

		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$provinces['provinces']=$this->Manage_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$data);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_year);
		$this->load->view('japo_model/japo_edit',$provinces);
	}
	
	public function japo_update()
	{
		$this->modal_success();

		$househole['househole']=$this->Japo_m->japo_update();

		$this->load->view('japo_model/url_index');
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

	public function japo_deal($j_id)
	{
		$data['japo_deal']=$this->Japo_m->japo_deal($j_id);

		if(isset($data['japo_deal']['quer_code']['j_occupation'])){
			$j_occupation = unserialize($data['japo_deal']['quer_code']['j_occupation']);
			foreach ($j_occupation as $key => $value) {
				foreach ($data['japo_deal']['activity'] as $key_activity => $value_activity) {
					if($value == $value_activity['ac_id']){
						$data_occupation[$value_activity['ac_id']] = $value_activity['ac_initials'];
					}
				}
			}
			$data['occupation'] = $data_occupation;
		}

		$data['j_id']= $j_id;
		$data['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('head',$data);
		$this->load->view('popup/success');
		$this->load->view('japo_model/deal',$j_id);
	}

	public function insert_deal($j_id)
	{
		$this->Japo_m->insert_deal($j_id);
		$data['j_id'] = $j_id;

		$this->load->view('japo_model/url_deal',$data);
	}

	public function update_deal($j_s_id)
	{
		$this->Japo_m->update_deal($j_s_id);
		$data['j_id'] = $this->input->post('j_s_h_id');

		$this->load->view('japo_model/url_deal',$data);
	}

	public function japo_trace($j_id)
	{
		$data['trace']=$this->Japo_m->japo_trace($j_id);

		if(isset($data['trace']['quer_code']['j_occupation'])){
			$j_occupation = unserialize($data['trace']['quer_code']['j_occupation']);
			foreach ($j_occupation as $key => $value) {
				foreach ($data['trace']['activity'] as $key_activity => $value_activity) {
					if($value == $value_activity['ac_id']){
						$data_occupation[$value_activity['ac_id']] = $value_activity['ac_initials'];
					}
				}
			}
			$data['occupation'] = $data_occupation;
		}

		$data['activity_nav']=$this->Manage_m->activity_nav();
		$data['j_id'] = $j_id;
		
		$this->load->view('head',$data);
		$this->load->view('popup/success');
		$this->load->view('japo_model/trace');
	}

	public function insert_trace($j_id)
	{
		$this->Japo_m->insert_trace($j_id);
		$data['j_id'] = $j_id;

		$this->load->view('japo_model/url_trace',$data);
	}
}
