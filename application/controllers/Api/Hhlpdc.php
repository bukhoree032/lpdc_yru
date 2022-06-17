<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hhlpdc extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
		$this->output->set_header("Access-Control-Allow-Origin:*");
    	$this->load->model('Api_m/Api_hhlpdc_m');
    }

	public function select($pro, $budget)
	{
		if($pro == 0){
			$condition_pro = '!=';
		}else{
			$condition_pro = '=';
		}
		if($budget == 0){
			$condition_bud = '!=';
		}else{
			$condition_bud = '=';
		}
		$data['japo_query'] = $this->db->query(" SELECT *
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										WHERE h_province $condition_pro '$pro' AND h_row_budget $condition_bud '$budget'
										")->result_array();
										
		$myJSON = $this->Api_hhlpdc_m->index($data['japo_query']);
	
		echo$myJSON;
	}
}
