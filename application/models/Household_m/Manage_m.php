<?php  
class Manage_m extends CI_Model {
	
	public function manage()
	{	
		$check = "0";
		if ($this->session->userdata('househole_search_pro')) {
			$check = "1";
		}else if ($this->session->userdata('househole_search_acti')) {
			$check = "1";
		}else if ($this->session->userdata('househole_search_year')) {
			$check = "1";
		}else if ($this->session->userdata('househole_search_paris')) {
			$check = "1";
		}

		if ($check != "1") {
			$query_id = $this->db->query("SELECT h_row_budget 
										FROM household 
										ORDER BY h_row_budget DESC LIMIT 1");
			$numrow = $query_id->num_rows();

			if ($numrow) {
				foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
					$year = $rs["h_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
				}
			}else{
				$year = "";
			}

			$quer_code['household'] = $this->db->query(" SELECT *
											FROM  household
											LEFT JOIN provinces ON provinces.pro_id = household.h_province
											LEFT JOIN activity ON activity.ac_id = household.h_occupation
											LEFT JOIN evaluate_year ON evaluate_year.e_y_user_id = household.h_id
											WHERE household.h_row_budget = '$year' AND NOT household.h_status_bin = '2' ORDER BY h_id DESC
										  ")->result();
			$quer_code['excell'] = $this->db->query(" SELECT household.*,activity.ac_initials,provinces.name_th
											FROM  household
											LEFT JOIN provinces ON provinces.pro_id = household.h_province
											LEFT JOIN activity ON activity.ac_id = household.h_occupation
											LEFT JOIN evaluate_year ON evaluate_year.e_y_user_id = household.h_id
											WHERE household.h_row_budget = '$year' AND NOT household.h_status_bin = '2' ORDER BY h_occupation DESC
										")->result();
			
			foreach($quer_code['excell'] as $key => $value){
				// echo $value->h_id.'<br>';
				$quer_code['h_excell'][$key] = $value;
				$query = $this->db->query("SELECT h_shop_buy
										FROM honey_shop
										WHERE h_shop_h_id = '$value->h_id'
										")->result();

				$query = $this->db->query("SELECT h_shop_buy
										FROM honey_shop
										WHERE h_shop_h_id = '$value->h_id'
										")->result();
				if(!empty($query)){
					$quer_code['h_excell'][$key]->h_shop_buy = $query['0']->h_shop_buy;
				}else{
					$quer_code['h_excell'][$key]->h_shop_buy = 0;
				}
			}
			return $quer_code;
		}else{
			$h_row_budget = $this->session->userdata('househole_search_year');
			$pro = $this->session->userdata('househole_search_pro');
			$acti = $this->session->userdata('househole_search_acti');
			$paris = $this->session->userdata('househole_search_paris');

			if ($h_row_budget == '') {
				$year = "!=";
			}else{
				$year = "=";
			}

			if ($pro == '') {
				$pro1 = "!=";
			}else{
				$pro1 = "=";
			}

			if ($acti == '') {
				$acti1 = "!=";
			}else{
				$acti1 = "=";
			}

			if ($paris == '') {
				$paris1 = "!=";
			}else{
				$paris1 = "=";
			}

			$quer_code['household'] = $this->db->query(" SELECT *
											FROM  household
											LEFT JOIN provinces ON provinces.pro_id = household.h_province
											LEFT JOIN activity ON activity.ac_id = household.h_occupation
											-- LEFT JOIN evaluate_year ON evaluate_year.e_y_user_id = household.h_id
											WHERE household.h_row_budget $year '$h_row_budget' AND  household.h_province $pro1 '$pro' AND  household.h_occupation $acti1 '$acti' AND  household.h_parish $paris1 '$paris' AND NOT household.h_status_bin = '2' ORDER BY h_id DESC
										  ")->result();
										  
			$quer_code['excell'] = $this->db->query(" SELECT household.*,activity.ac_initials,provinces.name_th
											FROM  household
											LEFT JOIN provinces ON provinces.pro_id = household.h_province
											LEFT JOIN activity ON activity.ac_id = household.h_occupation
											WHERE household.h_row_budget $year '$h_row_budget' AND  household.h_province $pro1 '$pro' AND  household.h_occupation $acti1 '$acti' AND  household.h_parish $paris1 '$paris' AND NOT household.h_status_bin = '2' 
											ORDER BY h_occupation DESC
	
											")->result();

			foreach($quer_code['excell'] as $key => $value){
				// echo $value->h_id.'<br>';
				$quer_code['h_excell'][$key] = $value;
				$query = $this->db->query("SELECT h_shop_buy
										FROM honey_shop
										WHERE h_shop_h_id = '$value->h_id'
										")->result();

				$query = $this->db->query("SELECT h_shop_buy
										FROM honey_shop
										WHERE h_shop_h_id = '$value->h_id'
										")->result();
				if(!empty($query)){
					$quer_code['h_excell'][$key]->h_shop_buy = $query['0']->h_shop_buy;
				}else{
					$quer_code['h_excell'][$key]->h_shop_buy = 0;
				}
			}
			return $quer_code;
		}
	}

	public function househole_search() //ลบ
	{	
		// $h_row_budget = "";
		$h_row_budget = $this->input->post('s_year');
		$pro = $this->input->post('s_pro');
		$acti = $this->input->post('s_acti');
		$paris = $this->input->post('s_paris');
		
		$this->session->set_userdata("househole_search_year",$h_row_budget);
		$this->session->set_userdata("househole_search_pro",$pro);
		$this->session->set_userdata("househole_search_acti",$acti);
		$this->session->set_userdata("househole_search_paris",$paris);

		if ($h_row_budget == '') {
			$year = "!=";
		}else{
			$year = "=";
		}

		if ($pro == '') {
			$pro1 = "!=";
		}else{
			$pro1 = "=";
		}

		if ($acti == '') {
			$acti1 = "!=";
		}else{
			$acti1 = "=";
		}


		if ($paris == '') {
			$paris1 = "!=";
		}else{
			$paris1 = "=";
		}
		$quer_code['household'] = $this->db->query(" SELECT *
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										-- LEFT JOIN evaluate_year ON evaluate_year.e_y_user_id = household.h_id
										WHERE household.h_row_budget $year '$h_row_budget' AND  household.h_province $pro1 '$pro' AND  household.h_occupation $acti1 '$acti' AND  household.h_parish $paris1 '$paris' AND NOT household.h_status_bin = '2' ORDER BY h_id DESC
									  ")->result();

		// $quer_code['excell'] = $this->db->query(" SELECT household.*,activity.ac_initials,SUM(honey_shop.h_shop_buy) AS h_shop_buy
		$quer_code['excell'] = $this->db->query(" SELECT household.*,activity.ac_initials,provinces.name_th
										FROM  household
										-- LEFT JOIN honey_shop ON honey_shop.h_shop_h_id = household.h_id
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE household.h_row_budget $year '$h_row_budget' AND  household.h_province $pro1 '$pro' AND  household.h_occupation $acti1 '$acti' AND  household.h_parish $paris1 '$paris' AND NOT household.h_status_bin = '2' 
										ORDER BY h_occupation DESC
										-- group by honey_shop.h_shop_h_id
										
									")->result();

		foreach($quer_code['excell'] as $key => $value){
			// echo $value->h_id.'<br>';
			$quer_code['h_excell'][$key] = $value;
			$query = $this->db->query("SELECT h_shop_buy
									FROM honey_shop
									WHERE h_shop_h_id = '$value->h_id'
									")->result();

			$query = $this->db->query("SELECT h_shop_buy
									FROM honey_shop
									WHERE h_shop_h_id = '$value->h_id'
									")->result();
			if(!empty($query)){
				$quer_code['h_excell'][$key]->h_shop_buy = $query['0']->h_shop_buy;
			}else{
				$quer_code['h_excell'][$key]->h_shop_buy = 0;
			}
		}
		// echo('<pre>');
		// print_r($aaa);
		return $quer_code;
	}

	public function manage_year()
	{ 	
		$query_id = $this->db->query("	SELECT h_row_budget 
										FROM household 
										ORDER BY h_row_budget DESC LIMIT 1");
		$cal = $query_id->result() ;


		// $numrow = $query_id->num_rows();
		// foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
		// 	$cal = $rs["h_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
		// }

		$quer_year = $this->db->query(" SELECT DISTINCT `h_row_budget` 
										FROM `household`
									  ");
		$year = $quer_year->result() ;

		$quer_acti = $this->db->query(" SELECT *
										FROM activity
										WHERE activity.ac_id_pro = '3' 
									  ");
		$acti = $quer_acti->result();

		$data = array(
					   'cal' => $cal,
					   'year' => $year,
					   'acti' => $acti,
					 );
		return $data;
	}

	public function manage_provinces()
	{ 
		$provinces = $this->db->query(" SELECT *
										FROM  provinces
										WHERE provinces.pro_id = '74' OR provinces.pro_id = '75' OR provinces.pro_id = '76'
									  ");
		$pro = $provinces->result();

		$amphures = $this->db->query(" SELECT *
										FROM  provinces
										INNER JOIN amphures ON amphures.province_id = provinces.pro_id
										WHERE provinces.pro_id = '74' OR provinces.pro_id = '75' OR provinces.pro_id = '76'
									  ");
		$aum = $amphures->result();

		$districts = $this->db->query(" SELECT *
										FROM  provinces
										INNER JOIN amphures ON amphures.province_id = provinces.pro_id
										INNER JOIN districts ON districts.amphure_id = amphures.aum_id
										WHERE provinces.pro_id = '74' OR provinces.pro_id = '75' OR provinces.pro_id = '76'
									  ");
		$dis = $districts->result();

		$data = array(
					   'pro' => $pro,
					   'aum' => $aum,
					   'dis' => $dis,
					 );
		return $data;
	}

	public function manage_paris()
	{ 
		$paris = $this->db->query(" SELECT DISTINCT h_parish
									FROM  household
								  ");
		return $paris->result();
	}

	public function manage_detail($h_id)
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE household.h_id = '$h_id'
									  ");
		return $quer_code->result();
	}
	public function manage_detail_year($h_id)
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  evaluate_year
										LEFT JOIN activity ON activity.ac_id = evaluate_year.e_y_ready_raise
										WHERE evaluate_year.e_y_user_id = '$h_id'
									  ");
		return $quer_code->result();
	}
	
	public function manage_detail_imag($h_id)
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  household_imag
										WHERE im_hold = '$h_id' AND im_status = '1'
									  ");
		$profile = $quer_code->result();

		$quer_code = $this->db->query(" SELECT *
										FROM  household_imag
										WHERE im_hold = '$h_id' AND im_status = '2'
									  ");
		$around = $quer_code->result();

		$data = array(
					   'profile' => $profile,
					   'around' => $around,
					   // 'activity_hold' => $activity_hold,
					 );
		return $data;
	}

	public function manage_insert() 
	{
		$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		$h_gender = $this->input->post('h_title');
		if ($h_gender == 'นาย') {
			$h_gender_gen ='ชาย';
		}else{
			$h_gender_gen ='หญิง';
		}

		$query_id = $this->db->query("SELECT h_id 
									FROM household 
									ORDER BY h_id DESC LIMIT 1");
		$numrow = $query_id->num_rows();
		foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			$cal = $rs["h_id"]; //ตรงนี้เราจะได้ค่า CP18100
		}

		if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
    		$h_id = "1";
		}else{
			$cal++;
			$h_id = $cal;
		}

		$this->db->select('h_id');
		$this->db->where('h_id',$h_id);
		$query_num = $this->db->get('household');
		$num = $query_num->num_rows();
		if($num > 0){
			//รหัสครัวเรือนมซ้ำ
			return "false_h_id";
		}else{
			$data = array(
						  'h_id' => $h_id,
						  'h_row_budget' => $this->input->post('h_row_budget'),
						  'h_title' => $this->input->post('h_title'),
						  'h_name' => $this->input->post('h_name'),
						  'h_surname' => $this->input->post('h_surname'),
						  'h_house_number' => $this->input->post('h_house_number'),
						  'h_age' => $this->input->post('h_age'),
						  'h_gender' => $h_gender_gen,
						  'h_education' => $this->input->post('h_education'),
						  'h_alley' => $this->input->post('h_alley'),
						  'h_street' => $this->input->post('h_street'),
						  'h_swine' => $this->input->post('h_swine'),
						  'h_village' => $this->input->post('h_village'),
						  'h_parish	' => $this->input->post('h_parish'),
						  'h_district' => $this->input->post('h_district'),
						  'h_province' => $this->input->post('h_province'),
						  'h_tel' => $this->input->post('h_tel'),
						  'h_revenue' => $this->input->post('h_revenue'),
						  'h_occupation' => $this->input->post('h_occupation'),
						  'h_status' => "1",
						  'h_status_bin' => "1",
						  'h_date' => $date_time,
						);
			// $this->db->insert('halal_member',$data);
			$query_check=$this->db->insert('household',$data);

			if ($query_check) {
				$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
				return "false_true";
			}else{
			  	return "false_regieter";
			}
		}
	}

	public function manage_update() 
	{	
		$h_id = $this->input->post('h_id');
		$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		$h_title = $this->input->post('h_title');
		if ($h_title == 'นาย') {
			$h_gender_gen ='ชาย';
		}else{
			$h_gender_gen ='หญิง';
		}

		$data = array(
					  // 'h_row_budget' => $this->input->post('h_row_budget'),
					  'h_title' => $this->input->post('h_title'),
					  'h_name' => $this->input->post('h_name'),
					  'h_surname' => $this->input->post('h_surname'),
					  'h_house_number' => $this->input->post('h_house_number'),
					  'h_age' => $this->input->post('h_age'),
					  'h_birthday' => $this->input->post('h_birthday'),
					  'h_gender' => $h_gender_gen,
					  'h_education' => $this->input->post('h_education'),
					  'h_alley' => $this->input->post('h_alley'),
					  'h_street' => $this->input->post('h_street'),
					  'h_swine' => $this->input->post('h_swine'),
					  'h_village' => $this->input->post('h_village'),
					  'h_parish	' => $this->input->post('h_parish'),
					  'h_district' => $this->input->post('h_district'),
					  'h_province' => $this->input->post('h_province'),
					  'h_tel' => $this->input->post('h_tel'),
					  'h_revenue' => $this->input->post('h_revenue'),
					  'h_revenueafter' => $this->input->post('h_revenueafter'),
					  'h_occupation' => $this->input->post('h_occupation'),
					  'h_level' => $this->input->post('h_level'),
					  'h_standout' => $this->input->post('h_standout'),
					  'h_date' => $date_time,
					);
		// $this->db->insert('halal_member',$data);

		$this->db->where('h_id',$h_id);
		$query_check=$this->db->update('household',$data);

		if ($query_check) {
			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
			return "false_true";
		}else{
		  	return "false_regieter";
		}
	}

	public function manage_bin($h_id) //ลบ
	{
		$data = array(
					  'h_status_bin' => "2",
					);

		$this->db->where('h_id',$h_id);
		$this->db->update('household',$data);
	}

	

	public function househole_data_bin() //ลบ
	{
		$query_id = $this->db->query("SELECT h_row_budget 
									FROM household 
									ORDER BY h_row_budget DESC LIMIT 1");
		$numrow = $query_id->num_rows();
		foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			$year = $rs["h_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
		}

		$quer_code = $this->db->query(" SELECT *
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										WHERE household.h_row_budget = '$year' AND household.h_status_bin = '2' ORDER BY h_id DESC
									  ");
		return $quer_code->result();
	}

	public function househole_not_bin($h_id) //ลบ
	{
		$data = array(
					  'h_status_bin' => "1",
					);

		$this->db->where('h_id',$h_id);
		$this->db->update('household',$data);
	}

	public function activity_nav()
	{
		$quer_code = $this->db->query(" SELECT * 
										FROM  activity
									  ");
		// return $quer_code->result();
		$activity = $quer_code->result();

		$quer_pro = $this->db->query(" SELECT * 
										FROM  project
									  ");
		// return $quer_code->result();
		$project = $quer_pro->result();

		$ac_hold = $this->db->query(" SELECT * 
									  FROM  activity_manage
								   ");
		// return $quer_code->result();
		$activity_hold = $ac_hold->result();

		$data = array(
					   'activity' => $activity,
					   'project' => $project,
					   'activity_hold' => $activity_hold,
					 );
		return $data;
	}
	
	public function manage_dashboard()
	{ 	
		$query_id = $this->db->query("SELECT h_row_budget 
									FROM household 
									ORDER BY h_row_budget DESC LIMIT 1");
		$numrow = $query_id->num_rows();

		if ($numrow) {
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$year = $rs["h_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
			}
		}else{
			$year = "";
		}

		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										-- WHERE household.h_row_budget = '$year'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										-- WHERE household.h_row_budget = '$year'
									  ");
		$data['Household']['all_parish'] = $o_parish;
		$data['Household']['all_district'] = $o_district;
		$all_parish = $o_parish->num_rows();
		$all_district = $o_district->num_rows();
		$all_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]'
			")->num_rows();
			$all_moo += $rows_parish;
		}


		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '74'
										WHERE household.h_province = '74'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '74'
										WHERE household.h_province = '74'
									  ");
		$data['Household']['pat_parish'] = $o_parish;
		$data['Household']['pat_district'] = $o_district;
		$pat_parish = $o_parish->num_rows();
		$pat_district = $o_district->num_rows();
		$pat_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]'
			")->num_rows();
			$pat_moo += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '75'
										WHERE household.h_province = '75'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '75'
										WHERE household.h_province = '75'
									  ");
		$data['Household']['yala_parish'] = $o_parish;
		$data['Household']['yala_district'] = $o_district;
		$yala_parish = $o_parish->num_rows();
		$yala_district = $o_district->num_rows();
		$yala_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]'
			")->num_rows();
			$yala_moo += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										-- WHERE household.h_row_budget = '$year'AND household.h_province = '76'
										WHERE household.h_province = '76'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										-- WHERE household.h_row_budget = '$year' AND household.h_province = '76'
										WHERE household.h_province = '76'
									  ");
		$data['Household']['nara_parish'] = $o_parish;
		$data['Household']['nara_district'] = $o_district;
		$nara_parish = $o_parish->num_rows();
		$nara_district = $o_district->num_rows();
		$nara_moo = 0;
		// foreach ($o_parish->result_array() as $key => $value) {
		// 	$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
		// 										FROM  household
		// 										WHERE h_parish = '$value[h_parish]'
		// 	")->num_rows();
		// 	$nara_moo += $rows_parish;
		// }
		// echo "<pre>";
		// // echo "รวมทุกจังหวัด";
		// echo "<br>";
		// foreach ($data['Household']['all_parish']->result_array() as $key => $value) {
		// 	// echo $key+1 ."." . $value['h_parish'];
		// 	echo "<br>";
		// }
		// echo "ยะลา";
		// echo "<br>";
		// foreach ($data['Household']['yala_parish']->result_array() as $key => $value) {
		// 	$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
		// 										FROM  household
		// 										WHERE h_parish = '$value[h_parish]'
		// 	")->result_array();
		// 	foreach ($rows_parish as $key11 => $value11) {
		// 		echo $key+1 ."." . $value['h_parish'];
		// 		echo "/";
		// 		echo $key11+1 .".หมู่" . $value11['h_swine'];
		// 		echo "<br>";
		// 	}
		// 	echo "<br>";
		// }
		// echo "ปัตตานี";
		// echo "<br>";
		// foreach ($data['Household']['pat_parish']->result_array() as $key => $value) {
		// 	$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
		// 										FROM  household
		// 										WHERE h_parish = '$value[h_parish]'
		// 	")->result_array();
		// 	foreach ($rows_parish as $key11 => $value11) {
		// 		echo $key+1 ."." . $value['h_parish'];
		// 		echo "/";
		// 		echo $key11+1 .".หมู่" . $value11['h_swine'];
		// 		echo "<br>";
		// 	}
		// 	echo "<br>";
		// }
		// echo "นราธิวาส";
		// echo "<br>";
		// foreach ($data['Household']['nara_parish']->result_array() as $key => $value) {
		// 	$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
		// 										FROM  household
		// 										WHERE h_parish = '$value[h_parish]'
		// 	")->result_array();
		// 	foreach ($rows_parish as $key11 => $value11) {
		// 		echo $key+1 ."." . $value['h_parish'];
		// 		echo "/";
		// 		echo $key11+1 .".หมู่" . $value11['h_swine'];
		// 		echo "<br>";
		// 	}
		// 	echo "<br>";
		// }
		// echo "</pre>";

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
		$all_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]' AND h_row_budget != '$year'
			")->num_rows();
			$all_moo62 += $rows_parish;
		}


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
		$pat_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]' AND h_row_budget != '$year'
			")->num_rows();
			$pat_moo62 += $rows_parish;
		}

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
		$yala_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]' AND h_row_budget != '$year'
			")->num_rows();
			$yala_moo62 += $rows_parish;
		}

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
		$nara_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]' AND h_row_budget != '$year'
			")->num_rows();
			$nara_moo62 += $rows_parish;
		}


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

		$data = array(
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
					   
					   'all_moo' => $all_moo,
					   'pat_moo' => $pat_moo,
					   'yala_moo' => $yala_moo,
					   'nara_moo' => $nara_moo,
					   
					   'all_moo62' => $all_moo62,
					   'pat_moo62' => $pat_moo62,
					   'yala_moo62' => $yala_moo62,
					   'nara_moo62' => $nara_moo62,
					 );
		return $data;
	}

}