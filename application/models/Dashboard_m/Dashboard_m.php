<?php  
class Dashboard_m extends CI_Model {
	
	public function manage_hol()
	{ 	
		$year = date('Y')+543;

		$parish_household = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										-- WHERE household.h_row_budget = '$year'
									  ")->result_array();
		$district_household = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										-- WHERE household.h_row_budget = '$year'
									  ")->result_array();
		
		$parish_otop = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										-- WHERE household.h_row_budget = '$year'
									  ")->result_array();
		$district_otop = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										-- WHERE household.h_row_budget = '$year'
									  ")->result_array();
		
		$parish_japo = $this->db->query(" SELECT DISTINCT j_parish
										FROM  japomodel
										-- WHERE household.h_row_budget = '$year'
									  ")->result_array();
		$district_japo = $this->db->query(" SELECT DISTINCT j_district
										FROM  japomodel
										-- WHERE household.h_row_budget = '$year'
									  ")->result_array();
		
		$parish_onet = $this->db->query(" SELECT DISTINCT on_parish
										FROM  onet
										-- WHERE household.h_row_budget = '$year'
									  ")->result_array();
		$district_onet = $this->db->query(" SELECT DISTINCT on_district
										FROM  onet
										-- WHERE household.h_row_budget = '$year'
									  ")->result_array();
		foreach ($parish_household as $key => $value) {
			$parish_household[$key] = $value['h_parish'];
		}
		foreach ($district_household as $key => $value) {
			$district_household[$key] = $value['h_district'];
		}
		foreach ($parish_otop as $key => $value) {
			$parish_otop[$key] = $value['o_parish'];
		}
		foreach ($district_otop as $key => $value) {
			$district_otop[$key] = $value['o_district'];
		}
		foreach ($parish_japo as $key => $value) {
			$parish_japo[$key] = $value['j_parish'];
		}
		foreach ($district_japo as $key => $value) {
			$district_japo[$key] = $value['j_district'];
		}
		foreach ($parish_onet as $key => $value) {
			$parish_onet[$key] = $value['on_parish'];
		}
		foreach ($district_onet as $key => $value) {
			$district_onet[$key] = $value['on_district'];
		}
		$all_parish = array_merge($parish_household,$parish_otop,$parish_japo,$parish_onet);
		$all_district = array_merge($district_household,$district_otop,$district_japo,$district_onet);
		$all_parish = array_unique($all_parish);
		$all_district = array_unique($all_district);
		$data['count']['all_parish'] = count($all_parish);
		$data['count']['all_district'] = count($all_district);
		$data['Household']['all_parish_household'] = $parish_household;
		$data['Household']['all_district_household'] = $district_household;

		$data['Household']['all_parish_otop'] = $parish_otop;
		$data['Household']['all_district_otop'] = $district_otop;

		$data['Household']['all_parish_japo'] = $parish_japo;
		$data['Household']['all_district_japo'] = $district_japo;

		$data['Household']['all_parish_onet'] = $parish_onet;
		$data['Household']['all_district_onet'] = $district_onet;
		// $all_parish = $o_parish->num_rows();
		// $all_district = $o_district->num_rows();

		$parish_household = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '74'
										WHERE household.h_province = '74'
									  ")->result_array();
		$district_household = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '74'
										WHERE household.h_province = '74'
									  ")->result_array();

		$parish_otop = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '74'
										WHERE otop.o_province = '74'
									")->result_array();
		$district_otop = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '74'
										WHERE otop.o_province = '74'
									")->result_array();

		$parish_japo = $this->db->query(" SELECT DISTINCT j_parish
										FROM  japomodel
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '74'
										WHERE japomodel.j_province = '74'
									")->result_array();
		$district_japo = $this->db->query(" SELECT DISTINCT j_district
										FROM  japomodel
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '74'
										WHERE japomodel.j_province = '74'
									")->result_array();

		$parish_onet = $this->db->query(" SELECT DISTINCT on_parish
										FROM  onet
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '74'
										WHERE onet.on_province = '74'
									")->result_array();
		$district_onet = $this->db->query(" SELECT DISTINCT on_district
										FROM  onet
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '74'
										WHERE onet.on_province = '74'
									")->result_array();
		foreach ($parish_household as $key => $value) {
			$parish_household[$key] = $value['h_parish'];
		}
		foreach ($district_household as $key => $value) {
			$district_household[$key] = $value['h_district'];
		}
		foreach ($parish_otop as $key => $value) {
			$parish_otop[$key] = $value['o_parish'];
		}
		foreach ($district_otop as $key => $value) {
			$district_otop[$key] = $value['o_district'];
		}
		foreach ($parish_japo as $key => $value) {
			$parish_japo[$key] = $value['j_parish'];
		}
		foreach ($district_japo as $key => $value) {
			$district_japo[$key] = $value['j_district'];
		}
		foreach ($parish_onet as $key => $value) {
			$parish_onet[$key] = $value['on_parish'];
		}
		foreach ($district_onet as $key => $value) {
			$district_onet[$key] = $value['on_district'];
		}
		$pat_parish = array_merge($parish_household, $parish_otop, $parish_japo, $parish_onet);
		$pat_district = array_merge($district_household, $district_otop, $district_japo, $district_onet);
		$pat_parish = array_unique($pat_parish);
		$pat_district = array_unique($pat_district);
		$data['count']['pat_parish'] = count($pat_parish);
		$data['count']['pat_district'] = count($pat_district);

		$data['Household']['pat_parish_household'] = $parish_household;
		$data['Household']['pat_district_household'] = $district_household;

		$data['Household']['pat_parish_otop'] = $parish_otop;
		$data['Household']['pat_district_otop'] = $district_otop;

		$data['Household']['pat_parish_otop'] = $parish_japo;
		$data['Household']['pat_district_otop'] = $district_japo;

		$data['Household']['pat_parish_onet'] = $parish_onet;
		$data['Household']['pat_district_onet'] = $district_onet;
		// $pat_parish = $o_parish->num_rows();
		// $pat_district = $o_district->num_rows();

		$parish_household = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '75'
										WHERE household.h_province = '75'
									  ")->result_array();
		$district_household = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '75'
										WHERE household.h_province = '75'
									  ")->result_array();

		$parish_otop = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '75'
										WHERE otop.o_province = '75'
									")->result_array();
		$district_otop = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '75'
										WHERE otop.o_province = '75'
									")->result_array();

		$parish_japo = $this->db->query(" SELECT DISTINCT j_parish
										FROM  japomodel
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '74'
										WHERE japomodel.j_province = '75'
									")->result_array();
		$district_japo = $this->db->query(" SELECT DISTINCT j_district
										FROM  japomodel
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '74'
										WHERE japomodel.j_province = '75'
									")->result_array();

		$parish_onet = $this->db->query(" SELECT DISTINCT on_parish
										FROM  onet
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '74'
										WHERE onet.on_province = '75'
									")->result_array();
		$district_onet = $this->db->query(" SELECT DISTINCT on_district
										FROM  onet
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '74'
										WHERE onet.on_province = '75'
									")->result_array();
		foreach ($parish_household as $key => $value) {
			$parish_household[$key] = $value['h_parish'];
		}
		foreach ($district_household as $key => $value) {
			$district_household[$key] = $value['h_district'];
		}
		foreach ($parish_otop as $key => $value) {
			$parish_otop[$key] = $value['o_parish'];
		}
		foreach ($district_otop as $key => $value) {
			$district_otop[$key] = $value['o_district'];
		}
		foreach ($parish_japo as $key => $value) {
			$parish_japo[$key] = $value['j_parish'];
		}
		foreach ($district_japo as $key => $value) {
			$district_japo[$key] = $value['j_district'];
		}
		foreach ($parish_onet as $key => $value) {
			$parish_onet[$key] = $value['on_parish'];
		}
		foreach ($district_onet as $key => $value) {
			$district_onet[$key] = $value['on_district'];
		}
		$yala_parish = array_merge($parish_household, $parish_otop, $parish_japo, $parish_onet);
		$yala_district = array_merge($district_household, $district_otop, $district_japo, $district_onet);
		$yala_parish = array_unique($yala_parish);
		$yala_district = array_unique($yala_district);
		$data['count']['yala_parish'] = count($yala_parish);
		$data['count']['yala_district'] = count($yala_district);

		$data['Household']['yala_parish_household'] = $parish_household;
		$data['Household']['yala_district_household'] = $district_household;

		$data['Household']['yala_parish_otop'] = $parish_otop;
		$data['Household']['yala_district_otop'] = $district_otop;

		$data['Household']['yala_parish_otop'] = $parish_japo;
		$data['Household']['yala_district_otop'] = $district_japo;

		$data['Household']['yala_parish_onet'] = $parish_onet;
		$data['Household']['yala_district_onet'] = $district_onet;
		// $yala_parish = $o_parish->num_rows();
		// $yala_district = $o_district->num_rows();

		$parish_household = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '76'
										WHERE household.h_province = '76'
									  ")->result_array();
		$district_household = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '76'
										WHERE household.h_province = '76'
									  ")->result_array();

		$parish_otop = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '76'
										WHERE otop.o_province = '76'
									")->result_array();
		$district_otop = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '76'
										WHERE otop.o_province = '76'
									")->result_array();

		$parish_japo = $this->db->query(" SELECT DISTINCT j_parish
										FROM  japomodel
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '74'
										WHERE japomodel.j_province = '76'
									")->result_array();
		$district_japo = $this->db->query(" SELECT DISTINCT j_district
										FROM  japomodel
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '74'
										WHERE japomodel.j_province = '76'
									")->result_array();

		$parish_onet = $this->db->query(" SELECT DISTINCT on_parish
										FROM  onet
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '74'
										WHERE onet.on_province = '76'
									")->result_array();
		$district_onet = $this->db->query(" SELECT DISTINCT on_district
										FROM  onet
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '74'
										WHERE onet.on_province = '76'
									")->result_array();
		foreach ($parish_household as $key => $value) {
			$parish_household[$key] = $value['h_parish'];
		}
		foreach ($district_household as $key => $value) {
			$district_household[$key] = $value['h_district'];
		}
		foreach ($parish_otop as $key => $value) {
			$parish_otop[$key] = $value['o_parish'];
		}
		foreach ($district_otop as $key => $value) {
			$district_otop[$key] = $value['o_district'];
		}
		foreach ($parish_japo as $key => $value) {
			$parish_japo[$key] = $value['j_parish'];
		}
		foreach ($district_japo as $key => $value) {
			$district_japo[$key] = $value['j_district'];
		}
		foreach ($parish_onet as $key => $value) {
			$parish_onet[$key] = $value['on_parish'];
		}
		foreach ($district_onet as $key => $value) {
			$district_onet[$key] = $value['on_district'];
		}
		$nara_parish = array_merge($parish_household, $parish_otop, $parish_japo, $parish_onet);
		$nara_district = array_merge($district_household, $district_otop, $district_japo, $district_onet);
		$nara_parish = array_unique($nara_parish);
		$nara_district = array_unique($nara_district);
		$data['count']['nara_parish'] = count($nara_parish);
		$data['count']['nara_district'] = count($nara_district);

		$data['Household']['nara_parish_household'] = $parish_household;
		$data['Household']['nara_district_household'] = $district_household;

		$data['Household']['nara_parish_otop'] = $parish_otop;
		$data['Household']['nara_district_otop'] = $district_otop;

		$data['Household']['nara_parish_otop'] = $parish_japo;
		$data['Household']['nara_district_otop'] = $district_japo;

		$data['Household']['nara_parish_onet'] = $parish_onet;
		$data['Household']['nara_district_onet'] = $district_onet;
		// $nara_parish = $o_parish->num_rows();
		// $nara_district = $o_district->num_rows();
		
		$household = $this->db->query(" SELECT h_province
									FROM  household
									WHERE NOT household.h_status_bin = '2'
								")->num_rows();

		$otop = $this->db->query(" SELECT o_province
									FROM  otop
								")->num_rows();

		$japomodel = $this->db->query(" SELECT j_province
									FROM  japomodel
								")->num_rows();

		$onet = $this->db->query(" SELECT on_province
										FROM  onet
									")->num_rows();

		$data['count']['nara_h'] = $household+$otop+$japomodel;
		$data['count']['nara_scholl'] = $onet;
		
		$household = $this->db->query(" SELECT h_province
										FROM  household
										WHERE NOT household.h_status_bin = '2' AND household.h_province = '74'
									  ")->num_rows();
		
		$otop = $this->db->query(" SELECT o_province
										FROM  otop
										WHERE o_province = '74'
									  ")->num_rows();
		
		$japomodel = $this->db->query(" SELECT j_province
										FROM  japomodel
										WHERE j_province = '74'
									  ")->num_rows();
		
		$onet = $this->db->query(" SELECT on_province
										FROM  onet
										WHERE on_province = '74'
									  ")->num_rows();
		$data['count']['pat_h'] = $household+$otop+$japomodel;
		$data['count']['pat_scholl'] = $onet;
		
		$household = $this->db->query(" SELECT h_province
										FROM  household
										WHERE NOT household.h_status_bin = '2' AND household.h_province = '75'
									  ")->num_rows();
		
		$otop = $this->db->query(" SELECT o_province
										FROM  otop
										WHERE o_province = '75'
									  ")->num_rows();
		
		$japomodel = $this->db->query(" SELECT j_province
										FROM  japomodel
										WHERE j_province = '75'
									  ")->num_rows();
		
		$onet = $this->db->query(" SELECT on_province
										FROM  onet
										WHERE on_province = '75'
									  ")->num_rows();
		$data['count']['yala_h'] = $household+$otop+$japomodel;
		$data['count']['yala_scholl'] = $onet;
		
		$household = $this->db->query(" SELECT h_province
										FROM  household
										WHERE NOT household.h_status_bin = '2' AND household.h_province = '76'
									  ")->num_rows();
		
		$otop = $this->db->query(" SELECT o_province
										FROM  otop
										WHERE o_province = '76'
									  ")->num_rows();
		
		$japomodel = $this->db->query(" SELECT j_province
										FROM  japomodel
										WHERE j_province = '76'
									  ")->num_rows();
		
		$onet = $this->db->query(" SELECT on_province
										FROM  onet
										WHERE on_province = '76'
									  ")->num_rows();
		$data['count']['nara_h'] = $household+$otop+$japomodel;
		$data['count']['nara_scholl'] = $onet;

		return $data['count'];
	}

	public function manage_hol1($budget,$tobudget,$province,$acti)
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