<?php  
class Dashboard_m extends CI_Model {

	public function manage_hol($budget,$tobudget,$province,$acti)
	{
		$year = date('Y')+543;
		$NOTbudget = '';
		$NOTprovince = '';

		$parish_household = '';
		$parish_otop = '';
		$parish_japo = '';
		$parish_onet = '';
		$parish_ubi = '';

		$district_household = '';
		$district_otop = '';
		$district_japo = '';
		$district_onet = '';
		$district_ubi = '';
		
		$household = '';
		$otop = '';
		$japomodel = '';
		$onet = '';
		$otop_ubi = '';

		if(empty($budget)){
			if(empty($tobudget)){
				$budget = 'false';
				$tobudget = 'false';
				$NOTbudget = 'NOT';
			}else{
				$budget = '0';
				$tobudget = $tobudget;
			}
		}else{
			if(empty($tobudget)){
				$budget = $budget;
				$tobudget = '9999';
			}else{
				if($budget > $tobudget){
					$budget_save = $tobudget;
					$tobudget = $budget;
					$budget = $budget_save;
				}
			}
		}

		if(empty($province)){
			$province = 'false';
			$NOTprovince = 'NOT';
		}

		if($acti == '3' || $acti == ''){
			$parish_household = $this->db->query(" 	SELECT DISTINCT h_parish
													FROM  household
													WHERE NOT h_status_bin = '2'
													AND $NOTbudget h_row_budget BETWEEN $budget AND $tobudget 
													AND $NOTprovince h_province = $province;
												")->result_array();
			$district_household = $this->db->query(" 	SELECT DISTINCT h_district
														FROM  household
														WHERE NOT h_status_bin = '2'
														AND $NOTbudget h_row_budget BETWEEN $budget AND $tobudget 
														AND $NOTprovince h_province = $province;
													")->result_array();
			foreach ($parish_household as $key_parish => $value_parish) {
				$parish = $value_parish['h_parish'];
				$moo_household[$parish] = $this->db->query(" SELECT DISTINCT h_swine
													FROM  household
													WHERE NOT h_status_bin = '2'
													AND $NOTbudget h_row_budget BETWEEN $budget AND $tobudget 
													AND $NOTprovince h_province = $province
													AND h_parish = '$parish';
												")->result_array();
			}
			foreach ($parish_household as $key => $value) {
				$parish_household[$key] = $value['h_parish'];
			}
			foreach ($district_household as $key => $value) {
				$district_household[$key] = $value['h_district'];
			}
		}

		if($acti == '2' || $acti == ''){
			$parish_otop = $this->db->query(" 	SELECT DISTINCT o_parish
												FROM  otop
												WHERE $NOTbudget o_row_budget BETWEEN $budget AND $tobudget 
												AND $NOTprovince o_province = $province;
											")->result_array();
			$district_otop = $this->db->query(" SELECT DISTINCT o_district
												FROM  otop
												WHERE $NOTbudget o_row_budget BETWEEN $budget AND $tobudget 
												AND $NOTprovince o_province = $province;
											")->result_array();
			foreach ($parish_otop as $key_parish => $value_parish) {
				$parish = $value_parish['o_parish'];
				$moo_otop[$parish] = $this->db->query(" SELECT DISTINCT o_swine
													FROM  otop
													WHERE $NOTbudget o_row_budget BETWEEN $budget AND $tobudget 
													AND $NOTprovince o_province = $province
													AND o_parish = '$parish'
												")->result_array();
			}
			foreach ($parish_otop as $key => $value) {
				$parish_otop[$key] = $value['o_parish'];
			}
			foreach ($district_otop as $key => $value) {
				$district_otop[$key] = $value['o_district'];
			}
		}
		
		if($acti == '9' || $acti == ''){
			$parish_japo = $this->db->query(" 	SELECT DISTINCT j_parish
												FROM  japomodel
												WHERE $NOTbudget j_row_budget BETWEEN $budget AND $tobudget 
												AND $NOTprovince j_province = $province;
										")->result_array();
			$district_japo = $this->db->query(" SELECT DISTINCT j_district
												FROM  japomodel
												WHERE $NOTbudget j_row_budget BETWEEN $budget AND $tobudget 
												AND $NOTprovince j_province = $province;
										")->result_array();
			foreach ($parish_japo as $key_parish => $value_parish) {
				$parish = $value_parish['j_parish'];
				$moo_japo[$parish] = $this->db->query(" 	SELECT DISTINCT j_swine
												FROM  japomodel
												WHERE $NOTbudget j_row_budget BETWEEN $budget AND $tobudget 
												AND $NOTprovince j_province = $province
												AND j_parish = '$parish'
											")->result_array();
			}
			foreach ($parish_japo as $key => $value) {
				$parish_japo[$key] = $value['j_parish'];
			}
			foreach ($district_japo as $key => $value) {
				$district_japo[$key] = $value['j_district'];
			}
		}
		
		if($acti == '4' || $acti == ''){
			$parish_onet = $this->db->query(" 	SELECT DISTINCT on_parish
												FROM  onet
												WHERE $NOTbudget on_row_budget BETWEEN $budget AND $tobudget 
												AND $NOTprovince on_province = $province;
											")->result_array();
			$district_onet = $this->db->query(" SELECT DISTINCT on_district
												FROM  onet
												WHERE $NOTbudget on_row_budget BETWEEN $budget AND $tobudget 
												AND $NOTprovince on_province = $province;
											")->result_array();		
			foreach ($parish_onet as $key => $value) {
				$parish_onet[$key] = $value['on_parish'];
			}
			foreach ($district_onet as $key => $value) {
				$district_onet[$key] = $value['on_district'];
			}
		}
		
		if($acti == 'ubi' || $acti == ''){
			$parish_ubi = $this->db->query(" 	SELECT DISTINCT o_ubi_parish
												FROM  otop_ubi
												WHERE $NOTbudget o_ubi_row_budget BETWEEN $budget AND $tobudget 
												AND $NOTprovince o_ubi_province = $province;
										")->result_array();
			$district_ubi = $this->db->query(" SELECT DISTINCT o_ubi_district
												FROM  otop_ubi
												WHERE $NOTbudget o_ubi_row_budget BETWEEN $budget AND $tobudget 
												AND $NOTprovince o_ubi_province = $province;
										")->result_array();
			foreach ($parish_ubi as $key_parish => $value_parish) {
				$parish = $value_parish['o_ubi_parish'];
				$moo_ubi[$parish] = $this->db->query(" 	SELECT DISTINCT o_ubi_swine
												FROM  otop_ubi
												WHERE $NOTbudget o_ubi_row_budget BETWEEN $budget AND $tobudget
												AND $NOTprovince o_ubi_province = $province
												AND o_ubi_parish = '$parish'
											")->result_array();
			}
			foreach ($parish_ubi as $key => $value) {
				$parish_ubi[$key] = $value['o_ubi_parish'];
			}
			foreach ($district_ubi as $key => $value) {
				$district_ubi[$key] = $value['o_ubi_district'];
			}
		}
		if($acti == '3'){
			$all_parish = array_merge($parish_household);
			$all_district = array_merge($district_household);
		}
		if($acti == '2'){
			$all_parish = array_merge($parish_otop);
			$all_district = array_merge($district_otop);
		}
		if($acti == '9'){
			$all_parish = array_merge($parish_japo);
			$all_district = array_merge($district_japo);
		}
		if($acti == '4'){
			$all_parish = array_merge($parish_onet);
			$all_district = array_merge($district_onet);
		}
		if($acti == 'ubi'){
			$all_parish = array_merge($parish_ubi);
			$all_district = array_merge($district_ubi);
		}
		if($acti == ''){
			$all_parish = array_merge($parish_household,$parish_otop,$parish_japo,$parish_onet,$parish_ubi);
			$all_district = array_merge($district_household,$district_otop,$district_japo,$district_onet,$district_ubi);
		}
		
		if(isset($all_parish)){
			$all_parish = array_unique($all_parish);
		}
		if(isset($all_district)){
			$all_district = array_unique($all_district);
		}
		
		if(isset($all_parish)){
			foreach ($all_parish as $key_all => $value_all) {
				if(isset($moo_household[$value_all])){
					foreach ($moo_household[$value_all] as $key => $value) {
						$count_moo = '0';
						if(isset($all_moo[$value_all])){
							$count_moo = count($all_moo[$value_all]);
						}
						$all_moo[$value_all][$count_moo] = $value['h_swine'];
					}
				}
				if(isset($moo_otop[$value_all])){
					foreach ($moo_otop[$value_all] as $key => $value) {
						$count_moo = '0';
						if(isset($all_moo[$value_all])){
							$count_moo = count($all_moo[$value_all]);
						}
						$all_moo[$value_all][$count_moo] = $value['o_swine'];
					}
				}
				if(isset($moo_japo[$value_all])){
					foreach ($moo_japo[$value_all] as $key => $value) {
						$count_moo = '0';
						if(isset($all_moo[$value_all])){
							$count_moo = count($all_moo[$value_all]);
						}
						$all_moo[$value_all][$count_moo] = $value['j_swine'];
					}
				}
				if(isset($moo_ubi[$value_all])){
					foreach ($moo_ubi[$value_all] as $key => $value) {
						$count_moo = '0';
						if(isset($all_moo[$value_all])){
							$count_moo = count($all_moo[$value_all]);
						}
						$all_moo[$value_all][$count_moo] = $value['o_ubi_swine'];
					}
				}
			}
		}
		if(isset($all_moo)){
			foreach ($all_moo as $key => $value) {
				$un_moo[$key] = array_unique($value);
				$count_moo += count($un_moo[$key]);
			}
		}
		
		if(isset($all_parish)){
			$data['count']['all_parish'] = count($all_parish);
		}
		if(isset($all_district)){
			$data['count']['all_district'] = count($all_district);
		}
		if(isset($count_moo)){
			$data['count']['all_moo'] = $count_moo;
		}

		if(isset($all_parish)){
			$data['count']['data_all_parish'] = $all_parish;
		}
		if(isset($all_district)){
			$data['count']['data_all_district'] = $all_district;
		}
		if(isset($un_moo)){
			$data['count']['data_all_moo'] = $un_moo;
		}

		if($acti == '3' || $acti == ''){
			$household = $this->db->query(" SELECT h_province
											FROM  household
											WHERE NOT h_status_bin = '2'
											AND $NOTbudget h_row_budget BETWEEN $budget AND $tobudget 
											AND $NOTprovince h_province = $province;
										")->num_rows();
			$data['count']['all_h'] = $household;
		}

		if($acti == '2' || $acti == ''){
			$otop = $this->db->query(" 	SELECT o_province
										FROM  otop
										WHERE $NOTbudget o_row_budget BETWEEN $budget AND $tobudget 
										AND $NOTprovince o_province = $province;
									")->num_rows();
			$data['count']['all_h'] = $otop;
		}
		if($acti == '9' || $acti == ''){
			$japomodel = $this->db->query(" SELECT j_province
											FROM  japomodel
											WHERE $NOTbudget j_row_budget BETWEEN $budget AND $tobudget 
											AND $NOTprovince j_province = $province;
										")->num_rows();
			$data['count']['all_h'] = $japomodel;
		}

		if($acti == '4' || $acti == ''){
			$onet = $this->db->query(" 	SELECT on_province
										FROM  onet
										WHERE $NOTbudget on_row_budget BETWEEN $budget AND $tobudget 
										AND $NOTprovince on_province = $province;
									")->num_rows();
			$data['count']['all_h'] = $onet;
		}

		if($acti == 'ubi' || $acti == ''){
			$otop_ubi = $this->db->query(" 	SELECT o_ubi_province
										FROM  otop_ubi
										WHERE $NOTbudget o_ubi_row_budget BETWEEN $budget AND $tobudget 
										AND $NOTprovince o_ubi_province = $province;
									")->num_rows();
			$data['count']['all_h'] = $otop_ubi;
		}
		
		if($acti == ''){
			$data['count']['all_h'] = $household+$otop+$japomodel+$otop_ubi;
			$data['count']['all_scholl'] = $onet;
		}
		if(!isset($data['count'])){
			$data['count'] = '';
		}
		return $data['count'];
	}
}