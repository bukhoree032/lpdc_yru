<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Otop extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
		$this->output->set_header("Access-Control-Allow-Origin:*");
    	$this->load->model('Api_m/Api_otop_m');
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
		$data['otop_query'] = $this->db->query(" SELECT *
										FROM  otop
										LEFT JOIN provinces ON provinces.pro_id = otop.o_province
										WHERE o_province $condition_pro '$pro' AND o_row_budget $condition_bud '$budget'
										")->result_array();
										
		$myJSON = $this->Api_otop_m->index($data['otop_query']);
	
		echo$myJSON;
	}
}
