<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mushroom_c extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Household_m/Evaluate_m');
    	$this->load->model('Household_m/Manage_m');
    	$this->load->model('Household_m/Honey_m');
    	$this->load->model('Household_m/Mushroom_m');

    	$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'10');
    }

    public function modal_success()
	{
    	$this->session->set_flashdata('manage_success','บันทึกการเปลียนแปลงสำเร็จ');
	}

	public function index($ac_id)
	{
		$househole['househole']=$this->Mushroom_m->househole($ac_id);
		$hold_dashboard['hold_dashboard']=$this->Honey_m->hold_dashboard($ac_id);
		$acid['acid']=$this->Honey_m->ac_id($ac_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		// $activity_hold['activity_hold']=$this->Evaluate_m->activity_hold();
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$manage_provinces['manage_provinces']=$this->Manage_m->manage_provinces();

		$this->load->view('page',$hold_dashboard);
		$this->load->view('page',$manage_year);
		$this->load->view('page',$manage_provinces);
		$this->load->view('page',$acid);
		$this->load->view('head',$activity_nav);
		$this->load->view('household/hold_dashboard');
		$this->load->view('modal/modal');
		$this->load->view('household/mushroom/mushroom_house',$househole);
	}

	public function mushroom_search($ac_id)
	{
		$househole['househole']=$this->Mushroom_m->mushroom_search($ac_id);
		$hold_dashboard['hold_dashboard']=$this->Honey_m->hold_dashboard($ac_id);
		$acid['acid']=$this->Honey_m->ac_id($ac_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		// $activity_hold['activity_hold']=$this->Evaluate_m->activity_hold();
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$manage_provinces['manage_provinces']=$this->Manage_m->manage_provinces();

		$this->load->view('page',$hold_dashboard);
		$this->load->view('page',$manage_year);
		$this->load->view('page',$manage_provinces);
		$this->load->view('page',$acid);
		$this->load->view('head',$activity_nav);
		$this->load->view('household/hold_dashboard');
		$this->load->view('modal/modal');
		$this->load->view('household/mushroom/mushroom_house',$househole);
	}

	public function househole_edit($h_id)
	{
		$this->session->set_flashdata('exit_mush','manage');

		$ac_id = $this->input->post('acid');

		$acid['acid']=$this->Honey_m->ac_id($ac_id);
		$eva_add['eva_add']=$this->Evaluate_m->eva_add($h_id);
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$provinces['provinces']=$this->Manage_m->manage_provinces();
		$househole['househole']=$this->Manage_m->manage_detail($h_id);
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);
	    // echo json_encode($househole['househole']);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$acid);
		$this->load->view('page',$manage_detail_imag);
		$this->load->view('page',$manage_year);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$eva_add);
		$this->load->view('page',$provinces);
		$this->load->view('household/manage/household_edit',$househole);
	}

	public function househole_update()
	{
		$h_id = $this->input->post('h_id');
		$occu = $this->input->post('h_occu');
		$h_occu['h_occu']=$this->Honey_m->ac_id($occu);
		$househole_up['househole_up']=$this->Manage_m->manage_update();
		$househole['househole']=$this->Manage_m->manage_detail($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);

		$this->load->view('household/mushroom/url_mushroom',$h_occu);
	}

	public function eva_insert()
	{
		$h_id = $this->input->post('h_id');
		$occu = $this->input->post('h_occu');

		$h_occu['h_occu']=$this->Honey_m->ac_id($occu);
		$eva_insert['eva_insert']=$this->Evaluate_m->eva_insert($h_id);

		$this->modal_success();

		// $this->load->view('head',$eva_insert);
		$this->load->view('household/mushroom/url_mushroom',$h_occu);	
	}

	public function mushroom_deal($h_id)
	{
		$trace_row['trace_row']=$this->Mushroom_m->trace_row($h_id);
		$deal['deal']=$this->Mushroom_m->deal($h_id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);
		// echo json_encode($deal['deal']);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$trace_row);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$deal);
		$this->load->view('popup/success');
		$this->load->view('household/mushroom/mushroom_deal',$hid);
	}

	public function mushroom_sh_delet($id)
	{
		$h_id = $this->input->post('h_id');

		$this->Mushroom_m->mushroom_delet($id);
		$hid['hid']=$this->Mushroom_m->ac_id($h_id);

		$this->modal_success();

		$this->load->view('household/mushroom/url_deal',$hid);
	}

	public function mushroom_tr_delet($id)
	{
		$h_id = $this->input->post('h_id');

		$this->Mushroom_m->mushroom_tr_delet($id);
		$hid['hid']=$this->Mushroom_m->ac_id($h_id);

		$this->modal_success();

		$this->load->view('household/mushroom/url_trace',$hid);
	}

	public function honey_add($h_id)
	{
		$deal['deal']=$this->Honey_m->deal($h_id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);
		// echo json_encode($deal['deal']);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$deal);
		$this->load->view('household/honey/deal_phone',$hid);
	}

	public function mushroom_insert($h_id)
	{
		$mushroom_insert['mushroom_insert']=$this->Mushroom_m->mushroom_insert($h_id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);

		$this->modal_success();

		$this->load->view('household/mushroom/url_deal',$hid);

	}

	public function mushroom_edit($id)
	{
		$h_id = $this->input->post('h_id');

		$mushroom_edit['mushroom_edit']=$this->Mushroom_m->mushroom_edit($id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);

		$this->modal_success();

		$this->load->view('household/mushroom/url_deal',$hid);
	}

	public function mushroom_trace($h_id)
	{
		$trace_row['trace_row']=$this->Mushroom_m->trace_row($h_id);

		if ($trace_row['trace_row'] == 'false') {
			$acid = $this->input->post('acid');
			$this->session->set_flashdata('false_trace','ไม่มีประวัติการแจกหรือติดตาม');
			$this->index($acid);
		}else{
			$deal['deal']=$this->Mushroom_m->deal($h_id);
			$hid['hid']=$this->Honey_m->ac_id($h_id);
			$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

			$this->load->view('page',$activity_nav);
			$this->load->view('page',$deal);
			$this->load->view('page',$trace_row);
			$this->load->view('head',$hid);
			$this->load->view('popup/success');
			$this->load->view('household/mushroom/mushroom_trace');
		}
	}

	public function trace_search($h_id)
	{
		$trace_row['trace_row']=$this->Mushroom_m->trace_row($h_id);
		if ($trace_row['trace_row'] == 'false') {
			$acid = $this->input->post('acid');
			$this->session->set_flashdata('false_trace','ไม่มีประวัติการแจกหรือติดตาม');
			$this->index($acid);
		}else{
			$deal['deal']=$this->Mushroom_m->deal_search($h_id);
			$hid['hid']=$this->Honey_m->ac_id($h_id);
			$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

			$this->load->view('page',$activity_nav);
			$this->load->view('page',$deal);
			$this->load->view('page',$trace_row);
			$this->load->view('head',$hid);
			$this->load->view('household/mushroom/mushroom_trace');
		}
	}

	public function trace_insert($h_id)
	{
		$trace_insert['trace_insert']=$this->Mushroom_m->trace_insert($h_id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);

		$this->modal_success();

		$this->load->view('household/mushroom/url_trace',$hid);
	}

	public function trace_edit($h_id)
	{
		$trace_edit['trace_edit']=$this->Mushroom_m->trace_edit($h_id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);

		$this->modal_success();

		$this->load->view('household/mushroom/url_trace',$hid);
	}

	public function trace_phone($h_id)
	{
		$deal['deal']=$this->Honey_m->deal($h_id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);
		// echo json_encode($deal['deal']);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$deal);
		$this->load->view('household/honey/trace_phone',$hid);
	}

	public function shop_insert($h_id)
	{
		$shop_insert['shop_insert']=$this->Honey_m->shop_insert($h_id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);
		$this->load->view('household/honey/url',$hid);
	}

	public function trace_update($h_id)
	{

		$trace_edit['trace_edit']=$this->Mushroom_m->trace_edit($h_id);
		$id = $this->input->post('id');
		$hid['hid']=$this->Honey_m->ac_id($h_id);

		$this->modal_success();

		$this->load->view('household/mushroom/url_bay',$hid);
	}

	public function mushroom_bay_delet($id)
	{
		$h_id = $this->input->post('h_id');

		$this->Mushroom_m->mushroom_tr_delet($id);
		$hid['hid']=$this->Mushroom_m->ac_id($h_id);

		$this->modal_success();

		$this->load->view('household/mushroom/url_bay',$hid);
	}

	public function shop_mushroom($h_id)
	{
		// echo $h_id;
		$shop_mushroom['shop_mushroom']=$this->Mushroom_m->shop_mushroom($h_id);
		$deal['deal']=$this->Honey_m->deal($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$deal);
		$this->load->view('head',$activity_nav);
		$this->load->view('modal/modal');
		$this->load->view('popup/success');
		$this->load->view('household/mushroom/mushroom_detail_buy',$shop_mushroom);
	}

}
