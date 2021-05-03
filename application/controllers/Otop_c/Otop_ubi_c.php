<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// eva_h_year
class Otop_ubi_c extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Otop_m/Otop_ubi_m');
    	$this->load->model('Household_m/Manage_m');
    	$this->load->model('Household_m/Evaluate_m');
    	$this->load->model('Otop_m/Manage_otop_m');

    	$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'24');
    }

    public function modal_success()
	{
    	$this->session->set_flashdata('manage_success','บันทึกการเปลียนแปลงสำเร็จ');
	}

	public function index()
	{

		$otop['otop']=$this->Otop_ubi_m->ubi();
		$o_ubi_dashboard['o_ubi_dashboard']=$this->Otop_ubi_m->o_ubi_dashboard();
		$manage_year['manage_year']=$this->Otop_ubi_m->otop_year();
		$manage_provinces['manage_provinces']=$this->Manage_otop_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$o_ubi_dashboard);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_provinces);
		$this->load->view('page',$manage_year);
		$this->load->view('popup/success');
		$this->load->view('otop/otop_ubi/otop_ubi',$otop);
		// $this->load->view('otop/manage/otop');
	}

	public function ubi_search()
	{
		$otop['otop']=$this->Otop_ubi_m->ubi_search();
		$o_ubi_dashboard['o_ubi_dashboard']=$this->Otop_ubi_m->o_ubi_dashboard();
		$manage_year['manage_year']=$this->Otop_ubi_m->otop_year();
		$manage_provinces['manage_provinces']=$this->Manage_otop_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$o_ubi_dashboard);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_provinces);
		$this->load->view('page',$manage_year);
		$this->load->view('otop/otop_ubi/otop_ubi',$otop);
	}

	public function ubi_deal($o_id)
	{
		$trace_row['trace_row']=$this->Otop_ubi_m->trace_row($o_id);
		$deal['deal']=$this->Otop_ubi_m->deal($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$trace_row);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$deal);
		$this->load->view('popup/success');
		$this->load->view('otop/otop_ubi/otop_deal',$oid);
	}

	public function ubi_insert($o_id)
	{
		$ubi_insert['ubi_insert']=$this->Otop_ubi_m->ubi_insert($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

		$this->modal_success();

		$this->load->view('otop/otop_ubi/url_deal',$oid);

	}

	public function ubi_edit($id)
	{
		$o_id = $this->input->post('o_id');

		$ubi_edit['ubi_edit']=$this->Otop_ubi_m->ubi_edit($id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

		$this->modal_success();

		$this->load->view('otop/otop_ubi/url_deal',$oid);
	}

	public function ubi_trace($o_id)
	{
		$trace_row['trace_row']=$this->Otop_ubi_m->trace_row($o_id);
		$deal['deal']=$this->Otop_ubi_m->deal($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('page',$deal);
		$this->load->view('page',$trace_row);
		$this->load->view('head',$oid);
		$this->load->view('popup/success');
		$this->load->view('otop/otop_ubi/ubi_trace');

	}

	public function trace_insert($o_id)
	{
		$this->session->set_flashdata('ubi_mush','ลงทะเบียนสำเร็จ');

		$trace_insert['trace_insert']=$this->Otop_ubi_m->trace_insert($o_id);
		// echo json_encode($trace_insert['trace_insert']);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

		$this->modal_success();

		$this->load->view('otop/otop_ubi/url_trace',$oid);
	}

	
	public function trace_edit($o_id)
	{
		$this->session->set_flashdata('ubi_honey','ลงทะเบียนสำเร็จ');

		$trace_edit['trace_edit']=$this->Otop_ubi_m->trace_edit($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

		$this->modal_success();
		
		$this->load->view('otop/otop_ubi/url_trace',$oid);
	}

	public function trace_edit_mushroom($o_id)
	{
		$this->session->set_flashdata('ubi_mush','ลงทะเบียนสำเร็จ');

		$trace_edit['trace_edit']=$this->Otop_ubi_m->trace_edit_mushroom($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

		$this->modal_success();
		
		$this->load->view('otop/otop_ubi/url_trace',$oid);
	}

	public function shop_mushroom($o_id)
	{
		// echo $h_id;
		$shop_mushroom['shop_mushroom']=$this->Otop_ubi_m->shop_mushroom($o_id);
		$deal['deal']=$this->Otop_ubi_m->deal($o_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$deal);
		$this->load->view('head',$activity_nav);
		$this->load->view('modal/modal');
		$this->load->view('otop/otop_ubi/ubi_mushroom_buy',$shop_mushroom);
	}

	public function ubi_honey_trace($o_id)
	{
		$trace_row['trace_row']=$this->Otop_ubi_m->trace_row($o_id);
		$deal['deal']=$this->Otop_ubi_m->deal($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('page',$deal);
		$this->load->view('page',$trace_row);
		$this->load->view('head',$oid);
		$this->load->view('otop/otop_ubi/ubi_honey_trace');
	}

	public function honey_trace_insert($o_id)
	{	
		$this->session->set_flashdata('ubi_honey','ลงทะเบียนสำเร็จ');

		$honey_trace_insert['honey_trace_insert']=$this->Otop_ubi_m->honey_trace_insert($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

		$this->modal_success();

		$this->load->view('otop/otop_ubi/url_trace',$oid);
	}

	public function ubi_shop_honey($o_id)
	{
		// echo $h_id;
		$shop_mushroom['shop_mushroom']=$this->Otop_ubi_m->shop_mushroom($o_id);
		$deal['deal']=$this->Otop_ubi_m->deal($o_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$deal);
		$this->load->view('head',$activity_nav);
		$this->load->view('modal/modal');
		$this->load->view('otop/otop_ubi/ubi_shop_honey',$shop_mushroom);
	}

	public function ubi_checken_trace($o_id)
	{
		$trace_row['trace_row']=$this->Otop_ubi_m->trace_row($o_id);
		$deal['deal']=$this->Otop_ubi_m->deal($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('page',$deal);
		$this->load->view('page',$trace_row);
		$this->load->view('head',$oid);
		$this->load->view('otop/otop_ubi/ubi_checken_trace');
	}

	public function checken_trace_insert($o_id)
	{
		$this->session->set_flashdata('ubi_checken','ลงทะเบียนสำเร็จ');

		$checken_trace_insert['checken_trace_insert']=$this->Otop_ubi_m->checken_trace_insert($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

		$this->load->view('otop/otop_ubi/url_trace',$oid);
	}

	public function checken_trace_edit($o_id)
	{

		$this->session->set_flashdata('ubi_checken','ลงทะเบียนสำเร็จ');

		$checken_trace_edit['checken_trace_edit']=$this->Otop_ubi_m->checken_trace_edit($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

		$this->load->view('otop/otop_ubi/url_trace',$oid);
	}

	public function shop_chicken($o_id)
	{
		$trace_row['trace_row']=$this->Otop_ubi_m->trace_row($o_id);
		$deal['deal']=$this->Otop_ubi_m->deal($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('page',$deal);
		$this->load->view('page',$trace_row);
		$this->load->view('head',$oid);
		$this->load->view('otop/otop_ubi/ubi_shop_checken');
	}

	public function ubi_location($o_id)
	{
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		// $this->load->view('head',$manage_provinces);
		// $this->load->view('page',$manage_year);
		$this->load->view('otop/otop_ubi/ubi_location',$oid);
	}

	public function location_insert($o_id)
	{
		$location_insert['location_insert']=$this->Otop_ubi_m->location_insert($o_id);
		$oid['oid']=$this->Manage_otop_m->o_id($o_id);

		$this->modal_success();

		$this->load->view('otop/otop_ubi/url_ubi',$oid);
	}

		public function otop_h_year($h_id)
	{
		$manage_provinces['manage_provinces']=$this->Manage_otop_m->manage_provinces();
		$otop['otop']=$this->Otop_ubi_m->detail_ubi($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('page',$manage_provinces);
		$this->load->view('otop/otop_ubi/otop_year',$otop);
	}

	public function otop_update_year()
	{
		$h_id = $this->input->post('h_id');

		$househole_up['househole_up']=$this->Otop_ubi_m->otop_insert_year();
		$househole['househole']=$this->Otop_ubi_m->detail_ubi($h_id);
		// $manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$hid['hid']=$this->Evaluate_m->eva_id($h_id);

		$this->modal_success();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('otop/otop_ubi/url_year',$hid);
	}

	public function otop_ediy_update_year()
	{
		$h_id = $this->input->post('h_id');
		$e_y_id = $this->input->post('e_y_id');

		$househole_up['househole_up']=$this->Otop_ubi_m->otop_update_year($e_y_id);
		$househole['househole']=$this->Otop_ubi_m->detail_ubi($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$hid['hid']=$this->Evaluate_m->eva_id($h_id);

		$this->modal_success();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('otop/otop_ubi/url_year',$hid);
	}

	public function otop_year_detail($h_id)
	{
		$manage_provinces['manage_provinces']=$this->Manage_otop_m->manage_provinces();
		$otop['otop']=$this->Otop_ubi_m->detail_ubi($h_id);
		$otop_year['otop_year']=$this->Otop_ubi_m->ubi_detail_year($h_id);

	    // echo json_encode($househole['househole']);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$otop_year);
		$this->load->view('page',$manage_provinces);
		$this->load->view('otop/otop_ubi/otop_year_detail',$otop);
	}

	public function otop_detail_year_edit($h_id)
	{
		$manage_provinces['manage_provinces']=$this->Manage_otop_m->manage_provinces();
		$otop['otop']=$this->Otop_ubi_m->detail_ubi($h_id);
		$otop_year['otop_year']=$this->Otop_ubi_m->ubi_detail_year($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$otop_year);
		$this->load->view('page',$manage_provinces);
		$this->load->view('otop/otop_ubi/otop_year_edit',$otop);
	}
	
	public function otop_edit($h_id)
	{
		$manage_year['manage_year']=$this->Otop_ubi_m->manage_year();
		$otop_year['otop_year']=$this->Otop_ubi_m->ubi_detail_year($h_id);
		$manage_provinces['manage_provinces']=$this->Manage_otop_m->manage_provinces();
		$provinces['provinces']=$this->Manage_m->manage_provinces();
		$otop['otop']=$this->Otop_ubi_m->detail_ubi($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		

		$this->load->view('page',$manage_year);
		$this->load->view('page',$otop_year);
		$this->load->view('page',$activity_nav);
		$this->load->view('page',$provinces);
		$this->load->view('head');
		$this->load->view('page',$manage_provinces);
		$this->load->view('popup/success');
		$this->load->view('popup/aaa');
		$this->load->view('otop/otop_ubi/otop_edit',$otop);
	}

	public function otop_ubi_update()
	{
		$h_id = $this->input->post('h_id');
		$househole_up['househole_up']=$this->Otop_ubi_m->otop_ubi_update();
		$otop['otop']=$this->Otop_ubi_m->detail_ubi($h_id);
		$otop_year['otop_year']=$this->Otop_ubi_m->ubi_detail_year($h_id);

	    // echo json_encode($househole['househole']);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$otop_year);
		// $this->load->view('page',$manage_provinces);
		$this->load->view('otop/otop_ubi/otop_year_detail',$otop);
	}
}
