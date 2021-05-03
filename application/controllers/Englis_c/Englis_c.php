<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Englis_c extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	// $this->load->model('Otop_m/Otop_ubi_m');
    	$this->load->model('Englis_m/Englis_m');
    	$this->load->model('Household_m/Manage_m');
    	$this->load->model('Otop_m/Manage_otop_m');

    	$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'26');
    }

	public function index()
	{
		$eng['eng']=$this->Englis_m->eng();
		$e_dashboard['e_dashboard']=$this->Englis_m->e_dashboard();
		$manage_year['manage_year']=$this->Englis_m->eng_year();
		$eng_corps['eng_corps']=$this->Englis_m->eng_corps();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$e_dashboard);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$eng_corps);
		$this->load->view('page',$manage_year);
		$this->load->view('englis/englis',$eng);
		// echo json_encode()
	}

	public function eng_search()
	{
		$eng['eng']=$this->Englis_m->eng_search();
		$e_dashboard['e_dashboard']=$this->Englis_m->e_dashboard();
		$manage_year['manage_year']=$this->Englis_m->eng_year();
		$eng_corps['eng_corps']=$this->Englis_m->eng_corps();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$e_dashboard);
		$this->load->view('page',$activity_nav);
		// $this->load->view('head',$manage_provinces);
		$this->load->view('head',$eng_corps);
		$this->load->view('page',$manage_year);
		$this->load->view('englis/englis',$eng);
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
		$this->load->view('otop/otop_ubi/otop_deal',$oid);
	}

	public function ubi_insert($o_id)
	{
		$ubi_insert['ubi_insert']=$this->Otop_ubi_m->ubi_insert($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

		$this->load->view('otop/otop_ubi/url_deal',$oid);

	}

	public function ubi_edit($id)
	{
		$o_id = $this->input->post('o_id');

		$ubi_edit['ubi_edit']=$this->Otop_ubi_m->ubi_edit($id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

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
		$this->load->view('otop/otop_ubi/ubi_trace');

	}

	public function trace_insert($o_id)
	{
		$trace_insert['trace_insert']=$this->Otop_ubi_m->trace_insert($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

		$this->load->view('otop/otop_ubi/url_trace',$oid);
	}

	public function trace_edit($o_id)
	{
		$trace_edit['trace_edit']=$this->Otop_ubi_m->trace_edit($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

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
		$honey_trace_insert['honey_trace_insert']=$this->Otop_ubi_m->honey_trace_insert($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

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
		$checken_trace_insert['checken_trace_insert']=$this->Otop_ubi_m->checken_trace_insert($o_id);
		$oid['oid']=$this->Otop_ubi_m->o_id($o_id);

		$this->load->view('otop/otop_ubi/url_trace',$oid);
	}

	public function checken_trace_edit($o_id)
	{
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
}
