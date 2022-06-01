<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Japo extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Api_m/Api_japo_m');
    }

	public function sumrary()
	{
		$data['japo_query'] = $this->db->query(" SELECT *
										FROM  japomodel
										LEFT JOIN provinces ON provinces.pro_id = japomodel.j_province
										")->result_array();
		
		$myJSON = $this->Api_japo_m->index($data['japo_query']);
		
		echo$myJSON;
	}

	public function select($pro, $budget)
	{
		$data['japo_query'] = $this->db->query(" SELECT *
										FROM  japomodel
										LEFT JOIN provinces ON provinces.pro_id = japomodel.j_province
										WHERE j_province = '$pro' AND j_row_budget = '$budget'
										")->result_array();
										
		$myJSON = $this->Api_japo_m->index($data['japo_query']);
	
		echo$myJSON;
	}

	public function select_provinces($pro)
	{
		$data['japo_query'] = $this->db->query(" SELECT *
										FROM  japomodel
										LEFT JOIN provinces ON provinces.pro_id = japomodel.j_province
										WHERE j_province = '$pro'
										")->result_array();
										
		$myJSON = $this->Api_japo_m->index($data['japo_query']);
	
		echo$myJSON;
	}

	public function select_budget($budget)
	{
		$data['japo_query'] = $this->db->query(" SELECT *
										FROM  japomodel
										LEFT JOIN provinces ON provinces.pro_id = japomodel.j_province
										WHERE j_row_budget = '$budget'
										")->result_array();
										
		$myJSON = $this->Api_japo_m->index($data['japo_query']);
	
		echo$myJSON;
	}
}
