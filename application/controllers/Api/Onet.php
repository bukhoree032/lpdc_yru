<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onet extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
		$this->output->set_header("Access-Control-Allow-Origin:*");
    	$this->load->model('Api_m/Api_onet_m');
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
		$data['onet_query'] = $this->db->query(" SELECT *
										FROM  onet
										LEFT JOIN provinces ON provinces.pro_id = onet.on_province
										WHERE on_province $condition_pro '$pro' AND on_row_budget $condition_bud '$budget'
										")->result_array();
										
		$myJSON = $this->Api_onet_m->index($data['onet_query']);
	
		echo$myJSON;
	}
}
