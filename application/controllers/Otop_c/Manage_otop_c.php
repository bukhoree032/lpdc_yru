<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_otop_c extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Household_m/Manage_m');
    	$this->load->model('Otop_m/Manage_otop_m');

    	$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'12');
    }

    public function modal_success()
	{
    	$this->session->set_flashdata('manage_success','บันทึกการเปลียนแปลงสำเร็จ');
	}

	public function index()
	{

		$otop['otop']=$this->Manage_otop_m->manage();
		$o_manage_dashboard['o_manage_dashboard']=$this->Manage_otop_m->o_manage_dashboard();
		$o_manage_parish['o_manage_parish']=$this->Manage_otop_m->o_manage_parish();
		$off_selecgoalANDpro['off_selecgoalANDpro']=$this->Manage_otop_m->off_selecgoalANDpro();
		$manage_year['manage_year']=$this->Manage_otop_m->manage_year();
		$manage_provinces['manage_provinces']=$this->Manage_otop_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$off_selecgoalANDpro);
		$this->load->view('page',$o_manage_dashboard);
		$this->load->view('page',$o_manage_parish);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_provinces);
		$this->load->view('page',$manage_year);
		$this->load->view('popup/success');
		$this->load->view('otop/manage/otop',$otop);

	}

	public function otop_search()
	{
		$otop['otop']=$this->Manage_otop_m->otop_search();
		$o_manage_dashboard['o_manage_dashboard']=$this->Manage_otop_m->o_manage_dashboard();
		$o_manage_parish['o_manage_parish']=$this->Manage_otop_m->o_manage_parish();
		$off_selecgoalANDpro['off_selecgoalANDpro']=$this->Manage_otop_m->off_selecgoalANDpro();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$manage_year['manage_year']=$this->Manage_otop_m->manage_year();
		$manage_provinces['manage_provinces']=$this->Manage_otop_m->manage_provinces();

		$this->load->view('page',$off_selecgoalANDpro);
		$this->load->view('page',$o_manage_dashboard);
		$this->load->view('page',$o_manage_parish);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_provinces);
		$this->load->view('page',$manage_year);
		$this->load->view('otop/manage/otop',$otop);
	}


	public function otop_trace($o_s_id)
	{
		$otop['otop']=$this->Manage_otop_m->otop_trace($o_s_id);
		$selecgoalANDpro['selecgoalANDpro']=$this->Manage_otop_m->selecgoalANDpro($o_s_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$selecgoalANDpro);
		$this->load->view('otop/manage/otop_trace',$otop);
	}

	public function otop_t_insert($o_s_id)
	{
		$otop_t_insert['otop_t_insert']=$this->Manage_otop_m->otop_t_insert($o_s_id);
		$selecgoalANDpro['selecgoalANDpro']=$this->Manage_otop_m->selecgoalANDpro($o_s_id);
		$os_id['os_id']=$this->Manage_otop_m->o_id($o_s_id);
		
		$this->modal_success();

		$this->load->view('otop/manage/url_detaill',$os_id);
	}

	public function otop_location($o_id)
	{
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$oid['oid']=$this->Manage_otop_m->o_id($o_id);

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		// $this->load->view('head',$manage_provinces);
		// $this->load->view('page',$manage_year);
		$this->load->view('otop/manage/otop_location',$oid);
	}

	public function location_insert($o_id)
	{
		$location_insert['location_insert']=$this->Manage_otop_m->location_insert($o_id);
		$oid['oid']=$this->Manage_otop_m->o_id($o_id);

		$this->modal_success();

		$this->load->view('otop/manage/url_otop',$oid);
	}

	public function otop_detail($o_s_id)
	{
		$otop_detail['otop_detail']=$this->Manage_otop_m->otop_detail($o_s_id);
		$selecgoalANDpro['selecgoalANDpro']=$this->Manage_otop_m->selecgoalANDpro($o_s_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$oid['oid']=$this->Manage_otop_m->o_id($o_s_id);

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$selecgoalANDpro);
		$this->load->view('popup/success');
		$this->load->view('otop/manage/otop_detail',$otop_detail);
	}

	public function otop_rate_detail($o_s_id)
	{
    	$this->session->set_flashdata('exit_rate','บันทึกการเปลียนแปลงสำเร็จ');

		$otop_detail['otop_detail']=$this->Manage_otop_m->otop_detail($o_s_id);
		$selecgoalANDpro['selecgoalANDpro']=$this->Manage_otop_m->selecgoalANDpro($o_s_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$oid['oid']=$this->Manage_otop_m->o_id($o_s_id);

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$selecgoalANDpro);
		$this->load->view('otop/manage/otop_detail',$otop_detail);
	}

	public function otop_add()
	{
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$goalANDpro['goalANDpro']=$this->Manage_otop_m->goalANDpro();
		$manage_provinces['manage_provinces']=$this->Manage_otop_m->manage_provinces();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_provinces);
		$this->load->view('otop/manage/otop_add',$goalANDpro);
	}

	public function otop_insert()
	{
		$otop_insert['otop_insert']=$this->Manage_otop_m->otop_insert();

		$this->modal_success();

		$this->load->view('otop/manage/url_otop');
	}

	public function otop_edit($o_id)
	{
		$otop_edit['otop_edit']=$this->Manage_otop_m->otop_edit($o_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$goalANDpro['goalANDpro']=$this->Manage_otop_m->goalANDpro();
		$manage_provinces['manage_provinces']=$this->Manage_otop_m->manage_provinces();

		$this->load->view('page',$otop_edit);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_provinces);
		$this->load->view('otop/manage/otop_edit',$goalANDpro);
	}

	public function otop_update($o_id)
	{
		$this->Manage_otop_m->otop_update($o_id);

		$this->modal_success();

		$this->load->view('otop/manage/url_otop');
	}

	public function otop_rate($o_row_budget)
	{

		$goalANDpro['goalANDpro']=$this->Manage_otop_m->goalANDpro();
		$otop_rate['otop_rate']=$this->Manage_otop_m->otop_rate($o_row_budget);
		$o_manage_dashboard['o_manage_dashboard']=$this->Manage_otop_m->o_manage_dashboard();
		$o_manage_parish['o_manage_parish']=$this->Manage_otop_m->o_manage_parish();
		$off_selecgoalANDpro['off_selecgoalANDpro']=$this->Manage_otop_m->off_selecgoalANDpro();
		$manage_year['manage_year']=$this->Manage_otop_m->manage_year();
		$manage_provinces['manage_provinces']=$this->Manage_otop_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$goalANDpro);
		$this->load->view('page',$off_selecgoalANDpro);
		$this->load->view('page',$o_manage_dashboard);
		$this->load->view('page',$o_manage_parish);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_provinces);
		$this->load->view('page',$manage_year);
		$this->load->view('otop/manage/otop_rate',$otop_rate);
	}

	public function otop_insert_rate($o_s_id)
	{
		$otop_insert_rate['otop_insert_rate'] = $this->Manage_otop_m->otop_insert_rate($o_s_id);
		$os_id['os_id']=$this->Manage_otop_m->o_id($o_s_id);

		$this->load->view('otop/manage/url_otop_rate',$otop_insert_rate);
	}

	public function product()
	{
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$goalANDpro['goalANDpro']=$this->Manage_otop_m->goalANDpro();

		$this->load->view('head',$activity_nav);
		$this->load->view('otop/manage/otop_product',$goalANDpro);
	}

	public function product_insert()
	{
		$product_insert['product_insert'] = $this->Manage_otop_m->product_insert();
		// echo json_encode($product_insert['product_insert']);
		$this->load->view('otop/manage/url_product_insert');
	}

	public function product_update($p_id)
	{
		$product_insert['product_insert'] = $this->Manage_otop_m->product_update($p_id);
		// echo json_encode($product_insert['product_insert']);
		$this->load->view('otop/manage/url_product_insert');
	}

	public function goal()
	{	
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$goalANDpro['goalANDpro']=$this->Manage_otop_m->goalANDpro();

		$this->load->view('head',$activity_nav);
		$this->load->view('otop/manage/otop_goal',$goalANDpro);

	}

	public function goal_insert()
	{
		$this->Manage_otop_m->goal_insert();

		$this->load->view('otop/manage/url_goal_insert');
	}

	public function goal_update($g_id)
	{
		$this->Manage_otop_m->goal_update($g_id);

		$this->load->view('otop/manage/url_goal_insert');
	}

}
