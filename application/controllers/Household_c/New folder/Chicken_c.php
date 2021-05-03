<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chicken_c extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Household_m/Evaluate_m');
    	$this->load->model('Household_m/Manage_m');
    	$this->load->model('Household_m/Honey_m');
    	$this->load->model('Household_m/Chicken_m');

    	$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'8');
    }

	public function modal_success()
	{
    	$this->session->set_flashdata('manage_success','บันทึกการเปลียนแปลงสำเร็จ');
	}

	public function index($ac_id)
	{
		$househole['househole']=$this->Chicken_m->househole($ac_id);
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
		$this->load->view('household/chicken/chicken_house',$househole);
	}

	public function chicken_search($ac_id)
	{
		// echo $ac_id;
		$househole['househole']=$this->Chicken_m->chicken_search($ac_id);
		$hold_dashboard['hold_dashboard']=$this->Honey_m->hold_dashboard($ac_id);
		$acid['acid']=$this->Honey_m->ac_id($ac_id);
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		// $activity_hold['activity_hold']=$this->Evaluate_m->activity_hold();
		$manage_provinces['manage_provinces']=$this->Manage_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$hold_dashboard);
		$this->load->view('page',$activity_nav);
		// $this->load->view('head',$activity_hold);
		$this->load->view('page',$acid);
		$this->load->view('page',$manage_provinces);
		$this->load->view('head',$manage_year);
		$this->load->view('household/hold_dashboard');
		$this->load->view('household/chicken/chicken_house',$househole);
	}

	public function househole_edit($h_id)
	{
		$this->session->set_flashdata('exit_chicken','manage');

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

		$this->load->view('household/chicken/url_chicken',$h_occu);
	}

	public function eva_insert()
	{
		$h_id = $this->input->post('h_id');
		$occu = $this->input->post('h_occu');

		$h_occu['h_occu']=$this->Honey_m->ac_id($occu);
		$eva_insert['eva_insert']=$this->Evaluate_m->eva_insert($h_id);

		$this->modal_success();

		// $this->load->view('head',$eva_insert);
		$this->load->view('household/chicken/url_chicken',$h_occu);	
	}

	public function chicken_deal($h_id)
	{
		$trace_row['trace_row']=$this->Chicken_m->trace_row($h_id);

		$deal['deal']=$this->Chicken_m->deal($h_id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);
		// echo json_encode($deal['deal']);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$trace_row);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$deal);
		$this->load->view('popup/success');
		$this->load->view('household/chicken/chicken_deal',$hid);
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

	public function chicken_insert($h_id)
	{
		$chicken_insert['chicken_insert']=$this->Chicken_m->chicken_insert($h_id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);

		$this->modal_success();

		$this->load->view('household/chicken/url_deal',$hid);

	}

	public function chicken_edit($h_id)
	{
		$chicken_edit['chicken_edit']=$this->Chicken_m->chicken_edit($h_id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);

		$this->modal_success();

		$this->load->view('household/chicken/url_deal',$hid);
	}

	public function chicken_sh_delet($id)
	{
		$c_id = $this->input->post('c_id');

		$chicken_delet['chicken_delet']=$this->Chicken_m->chicken_delet($id);
		$hid['hid']=$this->Honey_m->ac_id($c_id);
		$this->modal_success();

		$this->load->view('household/chicken/url_deal',$hid);
	}

	public function chicken_tr_delet($id)
	{
		$h_id = $this->input->post('h_id');

		$this->Chicken_m->chicken_tr_delet($id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);
		$this->modal_success();

		$this->load->view('household/chicken/url_trace',$hid);
	}

	public function honey_edit($id)
	{
		$h_id = $this->input->post('h_id');

		$honey_edit['honey_edit']=$this->Honey_m->honey_edit($id);

		$this->honey_deal($h_id);
	}

	public function trace($h_id)
	{
		$trace_row['trace_row']=$this->Chicken_m->trace_row($h_id);

		// echo json_encode($trace_row['trace_row']);

		if ($trace_row['trace_row'] == 'false') {
			$acid = $this->input->post('acid');
			$this->session->set_flashdata('false_trace','ไม่มีประวัติการแจกหรือติดตาม');
			$this->index($acid);
		}else{
			$deal['deal']=$this->Chicken_m->deal($h_id);
			$hid['hid']=$this->Honey_m->ac_id($h_id);
			$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

			$this->load->view('page',$activity_nav);
			$this->load->view('page',$deal);
			$this->load->view('page',$trace_row);
			$this->load->view('head',$hid);
			$this->load->view('popup/success');
			$this->load->view('household/chicken/trace');
		}
	}

	public function trace_detail($h_id)
	{
		$trace_row['trace_row']=$this->Honey_m->trace_row($h_id);

		$trace_dtail['trace_dtail']=$this->Chicken_m->trace_dtail($h_id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('page',$trace_dtail);
		$this->load->view('page',$trace_row);
		$this->load->view('head',$hid);
		$this->load->view('household/chicken/trace_detail');
		// echo json_encode($trace_dtail['trace_dtail']);
		
	}

	public function trace_search($h_id)
	{
		$trace_row['trace_row']=$this->Chicken_m->trace_row($h_id);
		if ($trace_row['trace_row'] == 'false') {
			$acid = $this->input->post('acid');
			$this->session->set_flashdata('false_trace','ไม่มีประวัติการแจกหรือติดตาม');
			$this->index($acid);
		}else{
			$deal['deal']=$this->Chicken_m->deal_search($h_id);
			$hid['hid']=$this->Honey_m->ac_id($h_id);
			$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

			$this->load->view('page',$activity_nav);
			$this->load->view('page',$deal);
			$this->load->view('page',$trace_row);
			$this->load->view('head',$hid);
			$this->load->view('household/chicken/trace');
		}
	}

	public function trace_insert($h_id)
	{
		$trace_insert['trace_insert']=$this->Chicken_m->trace_insert($h_id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);

		$this->modal_success();

		$this->load->view('household/chicken/url_trace',$hid);
	}

	public function trace_edit($h_id)
	{
		$trace_edit['trace_edit']=$this->Chicken_m->trace_edit($h_id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);

		$this->modal_success();

		$this->load->view('household/chicken/url_trace',$hid);
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
		$shop_insert['shop_insert']=$this->Chicken_m->shop_insert($h_id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);

		$this->modal_success();
		
		$this->load->view('household/chicken/url_trace',$hid);
	}

	public function shop_update($id)
	{
		$shop_update['shop_update']=$this->Chicken_m->shop_update($id);
		
		$h_id = $this->input->post('h_id');
		$hid['hid']=$this->Honey_m->ac_id($h_id);

		$this->modal_success();
		
		$this->load->view('household/chicken/url_shop',$hid);
	}

	public function shop_chicken($h_id)
	{
		// echo $h_id;
		$shop_chicken['shop_chicken']=$this->Chicken_m->shop_chicken($h_id);
		$deal['deal']=$this->Honey_m->deal($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$deal);
		$this->load->view('head',$activity_nav);
		$this->load->view('modal/modal');
		$this->load->view('popup/success');
		$this->load->view('household/chicken/trace_detail_buy',$shop_chicken);
	}

	public function chicken_by_delet($id)
	{
		$h_id = $this->input->post('h_id');

		$this->Chicken_m->chicken_by_delet($id);
		$hid['hid']=$this->Honey_m->ac_id($h_id);

		$this->modal_success();

		$this->load->view('household/chicken/url_shop',$hid);
	}
}
