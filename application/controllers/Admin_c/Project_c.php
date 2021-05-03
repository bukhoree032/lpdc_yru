<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_c extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Admin_m/Project_m');
    }

	public function index()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'manage_project');


		$project['project']=$this->Project_m->project();
		$activity_nav['activity_nav']=$this->Project_m->activity_nav();

		$this->load->view('head',$activity_nav);
		$this->load->view('manage_admin/manage_project/manage_detail',$project);
	}

	public function pro_add()
	{
		$activity_nav['activity_nav']=$this->Project_m->activity_nav();

		$this->load->view('head',$activity_nav);
		$this->load->view('manage_admin/manage_project/project_add');
	}

	public function pro_insert()
	{
		$pro_insert['pro_insert']=$this->Project_m->pro_insert();
		$project['project']=$this->Project_m->project();
		$activity_nav['activity_nav']=$this->Project_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$pro_insert);
		$this->load->view('manage_admin/manage_project/manage_detail',$project);
	}

	public function activity($pro_id)
	{
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'manage_project');

		$activity_year['activity_year']=$this->Project_m->activity_year($pro_id);
		$activity['activity']=$this->Project_m->activity($pro_id);
		$activity_nav['activity_nav']=$this->Project_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$activity_year);
		$this->load->view('manage_admin/manage_project/manage_edit',$activity);
	}

	public function activity_add($pro_id)
	{
		$activity['activity']=$this->Project_m->activity($pro_id);
	    // echo json_encode($househole['househole']);
		$activity_nav['activity_nav']=$this->Project_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('manage_admin/manage_project/activity_add',$activity);
	}

	public function activity_insert()
	{
		$pro_id = $this->input->post('pro_id');
		// echo $pro_id;

		$activity_insert['activity_insert']=$this->Project_m->activity_insert($pro_id);
		$activity['activity']=$this->Project_m->activity($pro_id);
		$activity_nav['activity_nav']=$this->Project_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('manage_admin/manage_project/manage_edit',$activity);
	}

	public function activity_edit($ac_id)
	{
		$activity_edit['activity_edit']=$this->Project_m->activity_edit($ac_id);
		$activity_nav['activity_nav']=$this->Project_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('manage_admin/manage_project/activity_edit',$activity_edit);
	}

	public function activity_update()
	{
		$ac_id = $this->input->post('ac_id');
		$pro_id = $this->input->post('pro_id');
		
		$activity_update['activity_update']=$this->Project_m->activity_update($ac_id);
		$activity['activity']=$this->Project_m->activity($pro_id);
		$activity_nav['activity_nav']=$this->Project_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('manage_admin/manage_project/manage_edit',$activity);
	}

	public function project_edit($pro_id)
	{
		$activity['activity']=$this->Project_m->activity($pro_id);
		$activity_nav['activity_nav']=$this->Project_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('manage_admin/manage_project/project_edit',$activity);
	}

	public function year_insert()
	{
		$pro_id = $this->input->post('pro_id');

		$year_insert['year_insert']=$this->Project_m->year_insert($pro_id);
		$activity['activity']=$this->Project_m->activity($pro_id);
		$activity_nav['activity_nav']=$this->Project_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('manage_admin/manage_project/manage_edit',$activity);
	}

	public function project_update()
	{
		$pro_id = $this->input->post('pro_id');
		
		$project_update['project_update']=$this->Project_m->project_update($pro_id);
		$activity['activity']=$this->Project_m->activity($pro_id);
		$activity_nav['activity_nav']=$this->Project_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('manage_admin/manage_project/manage_edit',$activity);
	}
}
