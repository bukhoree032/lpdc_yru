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


		$quer_code = $this->db->query(" SELECT h_title,h_province,h_status_past
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE household.h_row_budget = '$year' AND NOT household.h_status_bin = '2' ORDER BY h_id DESC
									  ");

		$all_num63 = $quer_code->num_rows();
		$year63 = $year;
		$all_men63 = 0;
		$all_women63 = 0;
		$all_notpass63 = 0;
		$all_pass63 = 0;
		$all_wait63 = 0;
		foreach ($quer_code->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			if ($rs["h_title"] == "นาย") {
	          $all_men63 = $all_men63+1;
	        }else{
	          $all_women63 = $all_women63+1;
	        }

	        if ($rs["h_status_past"] == "2") {
	          	$all_notpass63 = $all_notpass63+1;
	        }else if ($rs["h_status_past"] == "1") {
	          	$all_pass63 = $all_pass63+1;
	        }else{
	        	$all_wait63 = $all_wait63+1;
	        }
		}

		$pat_num63 = 0;
		$pat_men63 = 0;
		$pat_women63 = 0;
		$pat_notpass63 = 0;
		$pat_pass63 = 0;
		$pat_wait63 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["h_province"] == "74") {
				$pat_num63 = $pat_num63+1;
				if ($rs["h_title"] == "นาย") {
		          $pat_men63 = $pat_men63+1;
		        }else{
		          $pat_women63 = $pat_women63+1;
		        }

		        if ($rs["h_status_past"] == "2") {
		          	$pat_notpass63 = $pat_notpass63+1;
		        }else if ($rs["h_status_past"] == "1") {
		          	$pat_pass63 = $pat_pass63+1;
		        }else{
		        	$pat_wait63 = $pat_wait63+1;
		        }
		    }
		}

		$nara_num63 = 0;
		$nara_men63 = 0;
		$nara_women63 = 0;
		$nara_notpass63 = 0;
		$nara_pass63 = 0;
		$nara_wait63 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["h_province"] == "76") {
				$nara_num63 = $nara_num63+1;
				if ($rs["h_title"] == "นาย") {
		          $nara_men63 = $nara_men63+1;
		        }else{
		          $nara_women63 = $nara_women63+1;
		        }

		        if ($rs["h_status_past"] == "2") {
		          	$nara_notpass63 = $nara_notpass63+1;
		        }else if ($rs["h_status_past"] == "1") {
		          	$nara_pass63 = $nara_pass63+1;
		        }else{
		        	$nara_wait63 = $nara_wait63+1;
		        }
		    }
		}

		$yala_num63 = 0;
		$yala_men63 = 0;
		$yala_women63 = 0;
		$yala_notpass63 = 0;
		$yala_pass63 = 0;
		$yala_wait63 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["h_province"] == "75") {
				$yala_num63 = $yala_num63+1;
				if ($rs["h_title"] == "นาย") {
		          $yala_men63 = $yala_men63+1;
		        }else{
		          $yala_women63 = $yala_women63+1;
		        }

		        if ($rs["h_status_past"] == "2") {
		          	$yala_notpass63 = $yala_notpass63+1;
		        }else if ($rs["h_status_past"] == "1") {
		          	$yala_pass63 = $yala_pass63+1;
		        }else{
		        	$yala_wait63 = $yala_wait63+1;
		        }
		    }
		}

		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										WHERE household.h_row_budget != '$year'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										WHERE household.h_row_budget != '$year'
									  ");
		$data['Household']['all_parish62'] = $o_parish;
		$data['Household']['all_district62'] = $o_district;
		$all_parish62 = $o_parish->num_rows();
		$all_district62 = $o_district->num_rows();


		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										WHERE household.h_row_budget != '$year'AND household.h_province = '74'
										-- WHERE household.h_province = '74'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										WHERE household.h_row_budget != '$year' AND household.h_province = '74'
										-- WHERE household.h_province = '74'
									  ");
		$data['Household']['pat_parish62'] = $o_parish;
		$data['Household']['pat_district62'] = $o_district;
		$pat_parish62 = $o_parish->num_rows();
		$pat_district62 = $o_district->num_rows();

		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										WHERE household.h_row_budget != '$year'AND household.h_province = '75'
										-- WHERE household.h_province = '75'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										WHERE household.h_row_budget != '$year' AND household.h_province = '75'
										-- WHERE household.h_province = '75'
									  ");
		$data['Household']['yala_parish62'] = $o_parish;
		$data['Household']['yala_district62'] = $o_district;
		$yala_parish62 = $o_parish->num_rows();
		$yala_district62 = $o_district->num_rows();

		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										WHERE household.h_row_budget != '$year'AND household.h_province = '76'
										-- WHERE household.h_province = '76'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										WHERE household.h_row_budget != '$year' AND household.h_province = '76'
										-- WHERE household.h_province = '76'
									  ");
		$data['Household']['nara_parish62'] = $o_parish;
		$data['Household']['nara_district62'] = $o_district;
		$nara_parish62 = $o_parish->num_rows();
		$nara_district62 = $o_district->num_rows();


		$quer_code = $this->db->query(" SELECT h_title,h_province,h_status_past
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE household.h_row_budget != '$year' AND NOT household.h_status_bin = '2' ORDER BY h_id DESC
									  ");
		if ($year) {
			$year = $year-1;
		}else{
			$year = "";
		}
		$year62 = $year;

		$all_num62 = $quer_code->num_rows();
		$all_men62 = 0;
		$all_women62 = 0;
		$all_notpass62 = 0;
		$all_pass62 = 0;
		$all_wait62 = 0;
		foreach ($quer_code->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			if ($rs["h_title"] == "นาย") {
	          $all_men62 = $all_men62+1;
	        }else{
	          $all_women62 = $all_women62+1;
	        }

	        if ($rs["h_status_past"] == "2") {
	          	$all_notpass62 = $all_notpass62+1;
	        }else if ($rs["h_status_past"] == "1") {
	          	$all_pass62 = $all_pass62+1;
	        }else{
	        	$all_wait62 = $all_wait62+1;
	        }
		}

		$pat_num62 = 0;
		$pat_men62 = 0;
		$pat_women62 = 0;
		$pat_notpass62 = 0;
		$pat_pass62 = 0;
		$pat_wait62 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["h_province"] == "74") {
				$pat_num62 = $pat_num62+1;
				if ($rs["h_title"] == "นาย") {
		          $pat_men62 = $pat_men62+1;
		        }else{
		          $pat_women62 = $pat_women62+1;
		        }

		        if ($rs["h_status_past"] == "2") {
		          	$pat_notpass62 = $pat_notpass62+1;
		        }else if ($rs["h_status_past"] == "1") {
		          	$pat_pass62 = $pat_pass62+1;
		        }else{
		        	$pat_wait62 = $pat_wait62+1;
		        }
		    }
		}

		$nara_num62 = 0;
		$nara_men62 = 0;
		$nara_women62 = 0;
		$nara_notpass62 = 0;
		$nara_pass62 = 0;
		$nara_wait62 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["h_province"] == "76") {
				$nara_num62 = $nara_num62+1;
				if ($rs["h_title"] == "นาย") {
		          $nara_men62 = $nara_men62+1;
		        }else{
		          $nara_women62 = $nara_women62+1;
		        }

		        if ($rs["h_status_past"] == "2") {
		          	$nara_notpass62 = $nara_notpass62+1;
		        }else if ($rs["h_status_past"] == "1") {
		          	$nara_pass62 = $nara_pass62+1;
		        }else{
		        	$nara_wait62 = $nara_wait62+1;
		        }
		    }
		}

		$yala_num62 = 0;
		$yala_men62 = 0;
		$yala_women62 = 0;
		$yala_notpass62 = 0;
		$yala_pass62 = 0;
		$yala_wait62 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["h_province"] == "75") {
				$yala_num62 = $yala_num62+1;
				if ($rs["h_title"] == "นาย") {
		          $yala_men62 = $yala_men62+1;
		        }else{
		          $yala_women62 = $yala_women62+1;
		        }

		        if ($rs["h_status_past"] == "2") {
		          	$yala_notpass62 = $yala_notpass62+1;
		        }else if ($rs["h_status_past"] == "1") {
		          	$yala_pass62 = $yala_pass62+1;
		        }else{
		        	$yala_wait62 = $yala_wait62+1;
		        }
		    }
		}

		$quer_code = $this->db->query(" SELECT h_title,h_province,h_status_past
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE NOT household.h_status_bin = '2' ORDER BY h_id DESC
									  ");

		$all_num = $quer_code->num_rows();
		$all_men = 0;
		$all_women = 0;
		$all_notpass = 0;
		$all_pass = 0;
		$all_wait = 0;
		foreach ($quer_code->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			if ($rs["h_title"] == "นาย") {
	          $all_men = $all_men+1;
	        }else{
	          $all_women = $all_women+1;
	        }

	        if ($rs["h_status_past"] == "2") {
	          	$all_notpass = $all_notpass+1;
	        }else if ($rs["h_status_past"] == "1") {
	          	$all_pass = $all_pass+1;
	        }else{
	        	$all_wait = $all_wait+1;
	        }
		}

		$pat_num = 0;
		$pat_men = 0;
		$pat_women = 0;
		$pat_notpass = 0;
		$pat_pass = 0;
		$pat_wait = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["h_province"] == "74") {
				$pat_num = $pat_num+1;
				if ($rs["h_title"] == "นาย") {
		          $pat_men = $pat_men+1;
		        }else{
		          $pat_women = $pat_women+1;
		        }

		        if ($rs["h_status_past"] == "2") {
		          	$pat_notpass = $pat_notpass+1;
		        }else if ($rs["h_status_past"] == "1") {
		          	$pat_pass = $pat_pass+1;
		        }else{
		        	$pat_wait = $pat_wait+1;
		        }
		    }
		}

		$nara_num = 0;
		$nara_men = 0;
		$nara_women = 0;
		$nara_notpass = 0;
		$nara_pass = 0;
		$nara_wait = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["h_province"] == "76") {
				$nara_num = $nara_num+1;
				if ($rs["h_title"] == "นาย") {
		          $nara_men = $nara_men+1;
		        }else{
		          $nara_women = $nara_women+1;
		        }

		        if ($rs["h_status_past"] == "2") {
		          	$nara_notpass = $nara_notpass+1;
		        }else if ($rs["h_status_past"] == "1") {
		          	$nara_pass = $nara_pass+1;
		        }else{
		        	$nara_wait = $nara_wait+1;
		        }
		    }
		}

		$yala_num = 0;
		$yala_men = 0;
		$yala_women = 0;
		$yala_notpass = 0;
		$yala_pass = 0;
		$yala_wait = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["h_province"] == "75") {
				$yala_num = $yala_num+1;
				if ($rs["h_title"] == "นาย") {
		          $yala_men = $yala_men+1;
		        }else{
		          $yala_women = $yala_women+1;
		        }

		        if ($rs["h_status_past"] == "2") {
		          	$yala_notpass = $yala_notpass+1;
		        }else if ($rs["h_status_past"] == "1") {
		          	$yala_pass = $yala_pass+1;
		        }else{
		        	$yala_wait = $yala_wait+1;
		        }
		    }
		}

		$data['dasbord_hol'] = array(
					   'all_num' => $all_num,
					   'all_men' => $all_men,
					   'all_women' => $all_women,
					   'all_num62' => $all_num62,
					   'all_men62' => $all_men62,
					   'all_women62' => $all_women62,
					   'year62' => $year62,
					   'all_num63' => $all_num63,
					   'all_men63' => $all_men63,
					   'all_women63' => $all_women63,
					   'year63' => $year63,

					   'yala_num' => $yala_num,
					   'yala_men' => $yala_men,
					   'yala_women' => $yala_women,
					   'yala_num62' => $yala_num62,
					   'yala_men62' => $yala_men62,
					   'yala_women62' => $yala_women62,
					   'year62' => $year62,
					   'yala_num63' => $yala_num63,
					   'yala_men63' => $yala_men63,
					   'yala_women63' => $yala_women63,
					   'year63' => $year63,

					   'nara_num' => $nara_num,
					   'nara_men' => $nara_men,
					   'nara_women' => $nara_women,
					   'nara_num62' => $nara_num62,
					   'nara_men62' => $nara_men62,
					   'nara_women62' => $nara_women62,
					   'year62' => $year62,
					   'nara_num63' => $nara_num63,
					   'nara_men63' => $nara_men63,
					   'nara_women63' => $nara_women63,
					   'year63' => $year63,

					   'pat_num' => $pat_num,
					   'pat_men' => $pat_men,
					   'pat_women' => $pat_women,
					   'pat_num62' => $pat_num62,
					   'pat_men62' => $pat_men62,
					   'pat_women62' => $pat_women62,
					   'year62' => $year62,
					   'pat_num63' => $pat_num63,
					   'pat_men63' => $pat_men63,
					   'pat_women63' => $pat_women63,
					   'year63' => $year63,

					   'all_notpass' => $all_notpass,
					   'all_pass' => $all_pass,
					   'all_wait' => $all_wait,
					   'all_notpass62' => $all_notpass62,
					   'all_pass62' => $all_pass62,
					   'all_wait62' => $all_wait62,
					   'all_notpass63' => $all_notpass63,
					   'all_pass63' => $all_pass63,
					   'all_wait63' => $all_wait63,
					   'yala_notpass' => $yala_notpass,
					   'yala_pass' => $yala_pass,
					   'yala_wait' => $yala_wait,
					   'yala_notpass62' => $yala_notpass62,
					   'yala_pass62' => $yala_pass62,
					   'yala_wait62' => $yala_wait62,
					   'yala_notpass63' => $yala_notpass63,
					   'yala_pass63' => $yala_pass63,
					   'yala_wait63' => $yala_wait63,
					   'nara_notpass' => $nara_notpass,
					   'nara_pass' => $nara_pass,
					   'nara_wait' => $nara_wait,
				   	   'nara_notpass62' => $nara_notpass62,
					   'nara_pass62' => $nara_pass62,
					   'nara_wait62' => $nara_wait62,
					   'nara_notpass63' => $nara_notpass63,
					   'nara_pass63' => $nara_pass63,
					   'nara_wait63' => $nara_wait63,
					   'pat_notpass' => $pat_notpass,
					   'pat_pass' => $pat_pass,
					   'pat_wait' => $pat_wait,
					   'pat_notpass62' => $pat_notpass62,
					   'pat_pass62' => $pat_pass62,
					   'pat_wait62' => $pat_wait62,
					   'pat_notpass63' => $pat_notpass63,
					   'pat_pass63' => $pat_pass63,
					   'pat_wait63' => $pat_wait63,


					   'all_parish62' => $all_parish62,
					   'all_district62' => $all_district62,
					   'pat_parish62' => $pat_parish62,
					   'pat_district62' => $pat_district62,
					   'yala_parish62' => $yala_parish62,
					   'yala_district62' => $yala_district62,
					   'nara_parish62' => $nara_parish62,
					   'nara_district62' => $nara_district62,
					   
					   'all_parish' => $all_parish,
					   'all_district' => $all_district,
					   'pat_parish' => $pat_parish,
					   'pat_district' => $pat_district,
					   'yala_parish' => $yala_parish,
					   'yala_district' => $yala_district,
					   'nara_parish' => $nara_parish,
					   'nara_district' => $nara_district,
					 );
		return $data;
	}
}