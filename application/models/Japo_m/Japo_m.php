<?php  
class Japo_m extends CI_Model {
	
	public function delete($id,$j_s_id,$db)
	{	
		echo $j_s_id."/".$db;
		$this->db->where($j_s_id,$id);
        $this->db->delete($db);
	}

	public function manage()
	{	
		$check = "";
		if ($this->session->userdata('japo_search_pro')) {
			$check = "1";
		}else if ($this->session->userdata('japo_search_year')) {
			$check = "3";
		}
		if ($check != "1" ||  $check != "3") {
			$query_id = $this->db->query("SELECT j_row_budget 
										FROM japomodel 
										ORDER BY j_row_budget DESC LIMIT 1");
			$numrow = $query_id->num_rows();

			if ($numrow) {
				foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
					$year = $rs["j_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
				}
			}else{
				$year = "";
			}

			$quer_code = $this->db->query(" SELECT *
											FROM  japomodel
											LEFT JOIN provinces ON provinces.pro_id = japomodel.j_province
											WHERE japomodel.j_row_budget = '$year' ORDER BY j_id DESC
										  ");
			return $quer_code->result();
		}else{
			$j_row_budget = $this->session->userdata('japo_search_year');
			$pro = $this->session->userdata('japo_search_pro');

			if ($j_row_budget == '') {
				$year = "!=";
			}else{
				$year = "=";
			}

			if ($pro == '') {
				$pro1 = "!=";
			}else{
				$pro1 = "=";
			}

			$quer_code = $this->db->query(" SELECT *
											FROM  japomodel
											LEFT JOIN provinces ON provinces.pro_id = japomodel.j_province
											WHERE japomodel.j_row_budget $year '$j_row_budget' AND  japomodel.j_province $pro1 '$pro' ORDER BY j_id DESC
										  ");
			return $quer_code->result();
		}
	}

	public function japo_search() //ลบ
	{	
		// $h_row_budget = "";
		$j_row_budget = $this->input->post('s_year');
		$pro = $this->input->post('s_pro');
		
		$this->session->set_userdata("japo_search_year",$j_row_budget);
		$this->session->set_userdata("japo_search_pro",$pro);

		if ($j_row_budget == '') {
			$year = "!=";
		}else{
			$year = "=";
		}

		if ($pro == '') {
			$pro1 = "!=";
		}else{
			$pro1 = "=";
		}

		$quer_code = $this->db->query(" SELECT *
											FROM  japomodel
											LEFT JOIN provinces ON provinces.pro_id = japomodel.j_province
											WHERE japomodel.j_row_budget $year '$j_row_budget' AND  japomodel.j_province $pro1 '$pro' ORDER BY j_id DESC
										  ");
		return $quer_code->result();
	}
	public function manage_year()
	{ 	
		$query_id = $this->db->query("	SELECT j_row_budget 
										FROM japomodel 
										ORDER BY j_row_budget DESC LIMIT 1");
		$cal = $query_id->result() ;


		$quer_year = $this->db->query(" SELECT DISTINCT `j_row_budget` 
										FROM `japomodel`
									  ");
		$year = $quer_year->result() ;

		$data = array(
					   'cal' => $cal,
					   'year' => $year,
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

	public function japo_insert() 
	{
		$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		$j_gender = $this->input->post('j_title');
		if ($j_gender == 'นาย') {
			$j_gender_gen ='ชาย';
		}else{
			$j_gender_gen ='หญิง';
		}
		$j_occupation = $this->input->post('j_occupation');

		if(isset($j_occupation)){
			$j_occupation = serialize($j_occupation);
		}

		$data = array(
						'j_row_budget' => $this->input->post('j_row_budget'),
						'j_occupation' => $j_occupation,
						'j_title' => $this->input->post('j_title'),
						'j_name' => $this->input->post('j_name'),
						'j_surname' => $this->input->post('j_surname'),
						'j_age' => $this->input->post('j_age'),
						'j_gender_gen' => $j_gender_gen,
						'j_revenue' => $this->input->post('j_revenue'),
						'j_house_number' => $this->input->post('j_house_number'),
						'j_alley' => $this->input->post('j_alley'),
						'j_street' => $this->input->post('j_street'),
						'j_swine' => $this->input->post('j_swine'),
						'j_village' => $this->input->post('j_village'),
						'j_parish	' => $this->input->post('j_parish'),
						'j_district' => $this->input->post('j_district'),
						'j_province' => $this->input->post('j_province'),
						'j_latitude' => $this->input->post('lat'),
						'j_longitude' => $this->input->post('long'),
						'j_tel' => $this->input->post('j_tel'),
					);
		$query_check=$this->db->insert('japomodel',$data);
		
		if ($query_check) {
			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
			return "false_true";
		}else{
			return "false_regieter";
		}
	}

	public function japo_update() 
	{
		
		$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		$j_gender = $this->input->post('j_title');
		if ($j_gender == 'นาย') {
			$j_gender_gen ='ชาย';
		}else{
			$j_gender_gen ='หญิง';
		}
		$j_occupation = $this->input->post('j_occupation');

		if(isset($j_occupation)){
			$j_occupation = serialize($j_occupation);
		}

		$data = array(
						'j_row_budget' => $this->input->post('j_row_budget'),
						'j_occupation' => $j_occupation,
						'j_title' => $this->input->post('j_title'),
						'j_name' => $this->input->post('j_name'),
						'j_surname' => $this->input->post('j_surname'),
						'j_age' => $this->input->post('j_age'),
						'j_gender_gen' => $j_gender_gen,
						'j_revenue' => $this->input->post('j_revenue'),
						'j_house_number' => $this->input->post('j_house_number'),
						'j_alley' => $this->input->post('j_alley'),
						'j_street' => $this->input->post('j_street'),
						'j_swine' => $this->input->post('j_swine'),
						'j_village' => $this->input->post('j_village'),
						'j_parish	' => $this->input->post('j_parish'),
						'j_district' => $this->input->post('j_district'),
						'j_province' => $this->input->post('j_province'),
						'j_latitude' => $this->input->post('lat'),
						'j_longitude' => $this->input->post('long'),
						'j_tel' => $this->input->post('j_tel'),
					);

		$this->db->where('j_id ',$this->input->post('j_id'));
		$query_check=$this->db->update('japomodel',$data);

		if ($query_check) {
			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
			return "false_true";
		}else{
				return "false_regieter";
		}
	}

	public function japo_edit($j_id)
	{ 
		$data['quer_code'] = $this->db->query(" SELECT *
										FROM  japomodel
										LEFT JOIN provinces ON provinces.pro_id = japomodel.j_province
										WHERE japomodel.j_id = '$j_id'
									  ")->result_array()['0'];

		$data['activity'] = $this->db->query(" SELECT ac_id,ac_initials FROM  activity ")->result_array();

		return $data;
	}

	public function manage_update() 
	{	
		$h_id = $this->input->post('j_id');
		$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		$h_title = $this->input->post('j_title');
		if ($h_title == 'นาย') {
			$h_gender_gen ='ชาย';
		}else{
			$h_gender_gen ='หญิง';
		}

		$data = array(
			'j_row_budget' => $this->input->post('j_row_budget'),
			'j_occupation' => $j_occupation,
			'j_title' => $this->input->post('j_title'),
			'j_name' => $this->input->post('j_name'),
			'j_surname' => $this->input->post('j_surname'),
			'j_age' => $this->input->post('j_age'),
			'j_gender_gen' => $j_gender_gen,
			'j_revenue' => $this->input->post('j_revenue'),
			'j_house_number' => $this->input->post('j_house_number'),
			'j_alley' => $this->input->post('j_alley'),
			'j_street' => $this->input->post('j_street'),
			'j_swine' => $this->input->post('j_swine'),
			'j_village' => $this->input->post('j_village'),
			'j_parish	' => $this->input->post('j_parish'),
			'j_district' => $this->input->post('j_district'),
			'j_province' => $this->input->post('j_province'),
			'j_latitude' => $this->input->post('lat'),
			'j_longitude' => $this->input->post('long'),
			'j_tel' => $this->input->post('j_tel'),
		);

		$this->db->where('h_id',$h_id);
		$query_check=$this->db->update('household',$data);

		if ($query_check) {
			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
			return "false_true";
		}else{
		  	return "false_regieter";
		}
	}

	public function japo_deal($j_id)
	{ 
		$data['quer_deal'] = $this->db->query(" SELECT japomodel_share.*,ac_initials
										FROM  japomodel_share
										LEFT JOIN activity ON japomodel_share.j_s_occupation = activity.ac_id
										WHERE japomodel_share.j_s_h_id = '$j_id'
									  ")->result_array();

		$data['quer_code'] = $this->db->query(" SELECT *
										FROM  japomodel
										LEFT JOIN provinces ON japomodel.j_province = provinces.pro_id
										WHERE japomodel.j_id = '$j_id'
									  ")->result_array()['0'];

		$data['activity'] = $this->db->query(" SELECT ac_id,ac_initials FROM  activity ")->result_array();

		return $data;
	}

	public function insert_deal() 
	{
		$query_check=$this->db->insert('japomodel_share',$this->input->post());

		if ($query_check) {
			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
			return "false_true";
		}else{
			return "false_regieter";
		}
	}

	public function update_deal($j_s_id) 
	{
		
		$this->db->where('j_s_id',$j_s_id);
		$query_check=$this->db->update('japomodel_share',$this->input->post());

		if ($query_check) {
			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
			return "false_true";
		}else{
				return "false_regieter";
		}
	}

	public function japo_trace($j_id)
	{ 
		$data['quer_trace'] = $this->db->query(" SELECT japomodel_trace.*,ac_initials
										FROM  japomodel_trace
										LEFT JOIN activity ON japomodel_trace.j_t_occupation = activity.ac_id
										WHERE japomodel_trace.j_t_h_id = '$j_id'
									  ")->result_array();

		$data['quer_code'] = $this->db->query(" SELECT *
										FROM  japomodel
										LEFT JOIN provinces ON japomodel.j_province = provinces.pro_id
										WHERE japomodel.j_id = '$j_id'
									  ")->result_array()['0'];

		$data['activity'] = $this->db->query(" SELECT ac_id,ac_initials FROM  activity ")->result_array();

		return $data;
	}

	public function insert_trace() 
	{
		$query_check=$this->db->insert('japomodel_trace',$this->input->post());

		if ($query_check) {
			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
			return "false_true";
		}else{
			return "false_regieter";
		}
	}

	public function update_trace($j_t_id) 
	{
		$this->db->where('j_t_id',$j_t_id);
		$query_check=$this->db->update('japomodel_trace',$this->input->post());

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
		$query_id = $this->db->query("SELECT j_row_budget 
									FROM japomodel 
									ORDER BY j_row_budget DESC LIMIT 1");
		$numrow = $query_id->num_rows();

		if ($numrow) {
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$year = $rs["j_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
			}
		}else{
			$year = "";
		}

		$o_parish = $this->db->query(" SELECT DISTINCT j_parish
										FROM  japomodel
										WHERE japomodel.j_row_budget = '$year'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT j_district
										FROM  japomodel
										WHERE japomodel.j_row_budget = '$year'
									  ");
		$all_parish = $o_parish->num_rows();
		$all_district = $o_district->num_rows();
		$all_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT j_swine
												FROM  japomodel
												WHERE j_parish = '$value[j_parish]'
			")->num_rows();
			$all_moo += $rows_parish;
		}


		$o_parish = $this->db->query(" SELECT DISTINCT j_parish
										FROM  japomodel
										WHERE japomodel.j_row_budget = '$year'AND japomodel.j_province = '74'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT j_district
										FROM  japomodel
										WHERE japomodel.j_row_budget = '$year' AND japomodel.j_province = '74'
									  ");
		$pat_parish = $o_parish->num_rows();
		$pat_district = $o_district->num_rows();
		$pat_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT j_swine
												FROM  japomodel
												WHERE j_parish = '$value[j_parish]'
			")->num_rows();
			$pat_moo += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT j_parish
										FROM  japomodel
										WHERE japomodel.j_row_budget = '$year'AND japomodel.j_province = '75'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT j_district
										FROM  japomodel
										WHERE japomodel.j_row_budget = '$year' AND japomodel.j_province = '75'
									  ");
		$yala_parish = $o_parish->num_rows();
		$yala_district = $o_district->num_rows();
		$yala_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT j_swine
												FROM  japomodel
												WHERE j_parish = '$value[j_parish]'
			")->num_rows();
			$yala_moo += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT j_parish
										FROM  japomodel
										WHERE japomodel.j_row_budget = '$year'AND japomodel.j_province = '76'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT j_district
										FROM  japomodel
										WHERE japomodel.j_row_budget = '$year' AND japomodel.j_province = '76'
									  ");
		$nara_parish = $o_parish->num_rows();
		$nara_district = $o_district->num_rows();
		$nara_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT j_swine
												FROM  japomodel
												WHERE j_parish = '$value[j_parish]'
			")->num_rows();
			$nara_moo += $rows_parish;
		}


		$quer_code = $this->db->query(" SELECT j_title,j_province
										FROM  japomodel
										LEFT JOIN provinces ON provinces.pro_id = japomodel.j_province
										WHERE japomodel.j_row_budget = '$year'  ORDER BY j_id DESC
									  ");

		$all_num63 = $quer_code->num_rows();
		$year63 = $year;
		$all_men63 = 0;
		$all_women63 = 0;
		$all_notpass63 = 0;
		$all_pass63 = 0;
		$all_wait63 = 0;
		foreach ($quer_code->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			if ($rs["j_title"] == "นาย") {
	          $all_men63 = $all_men63+1;
	        }else{
	          $all_women63 = $all_women63+1;
	        }
		}

		$pat_num63 = 0;
		$pat_men63 = 0;
		$pat_women63 = 0;
		$pat_notpass63 = 0;
		$pat_pass63 = 0;
		$pat_wait63 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["j_province"] == "74") {
				$pat_num63 = $pat_num63+1;
				if ($rs["j_title"] == "นาย") {
		          $pat_men63 = $pat_men63+1;
		        }else{
		          $pat_women63 = $pat_women63+1;
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
			if ($rs["j_province"] == "76") {
				$nara_num63 = $nara_num63+1;
				if ($rs["j_title"] == "นาย") {
		          $nara_men63 = $nara_men63+1;
		        }else{
		          $nara_women63 = $nara_women63+1;
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
			if ($rs["j_province"] == "75") {
				$yala_num63 = $yala_num63+1;
				if ($rs["j_title"] == "นาย") {
		          $yala_men63 = $yala_men63+1;
		        }else{
		          $yala_women63 = $yala_women63+1;
		        }
		    }
		}

		$o_parish = $this->db->query(" SELECT DISTINCT j_parish
										FROM  japomodel
										WHERE japomodel.j_row_budget != '$year'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT j_district
										FROM  japomodel
										WHERE japomodel.j_row_budget != '$year'
									  ");
		$all_parish62 = $o_parish->num_rows();
		$all_district62 = $o_district->num_rows();
		$all_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT j_swine
												FROM  japomodel
												WHERE j_parish = '$value[j_parish]' AND j_row_budget != '$year'
			")->num_rows();
			$all_moo62 += $rows_parish;
		}


		$o_parish = $this->db->query(" SELECT DISTINCT j_parish
										FROM  japomodel
										WHERE japomodel.j_row_budget != '$year'AND japomodel.j_province = '74'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT j_district
										FROM  japomodel
										WHERE japomodel.j_row_budget != '$year' AND japomodel.j_province = '74'
									  ");
		$pat_parish62 = $o_parish->num_rows();
		$pat_district62 = $o_district->num_rows();
		$pat_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT j_swine
												FROM  japomodel
												WHERE j_parish = '$value[j_parish]' AND j_row_budget != '$year'
			")->num_rows();
			$pat_moo62 += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT j_parish
										FROM  japomodel
										WHERE japomodel.j_row_budget != '$year'AND japomodel.j_province = '75'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT j_district
										FROM  japomodel
										WHERE japomodel.j_row_budget != '$year' AND japomodel.j_province = '75'
									  ");
		$yala_parish62 = $o_parish->num_rows();
		$yala_district62 = $o_district->num_rows();
		$yala_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT j_swine
												FROM  japomodel
												WHERE j_parish = '$value[j_parish]' AND j_row_budget != '$year'
			")->num_rows();
			$yala_moo62 += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT j_parish
										FROM  japomodel
										WHERE japomodel.j_row_budget != '$year'AND japomodel.j_province = '76'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT j_district
										FROM  japomodel
										WHERE japomodel.j_row_budget != '$year' AND japomodel.j_province = '76'
									  ");
		$nara_parish62 = $o_parish->num_rows();
		$nara_district62 = $o_district->num_rows();
		$nara_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT j_swine
												FROM  japomodel
												WHERE j_parish = '$value[j_parish]' AND j_row_budget != '$year'
			")->num_rows();
			$nara_moo62 += $rows_parish;
		}


		$quer_code = $this->db->query(" SELECT j_title,j_province
										FROM  japomodel
										LEFT JOIN provinces ON provinces.pro_id = japomodel.j_province
										WHERE japomodel.j_row_budget != '$year'  ORDER BY j_id DESC
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
			if ($rs["j_title"] == "นาย") {
	          $all_men62 = $all_men62+1;
	        }else{
	          $all_women62 = $all_women62+1;
	        }
		}

		$pat_num62 = 0;
		$pat_men62 = 0;
		$pat_women62 = 0;
		$pat_notpass62 = 0;
		$pat_pass62 = 0;
		$pat_wait62 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["j_province"] == "74") {
				$pat_num62 = $pat_num62+1;
				if ($rs["j_title"] == "นาย") {
		          $pat_men62 = $pat_men62+1;
		        }else{
		          $pat_women62 = $pat_women62+1;
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
			if ($rs["j_province"] == "76") {
				$nara_num62 = $nara_num62+1;
				if ($rs["j_title"] == "นาย") {
		          $nara_men62 = $nara_men62+1;
		        }else{
		          $nara_women62 = $nara_women62+1;
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
			if ($rs["j_province"] == "75") {
				$yala_num62 = $yala_num62+1;
				if ($rs["j_title"] == "นาย") {
		          $yala_men62 = $yala_men62+1;
		        }else{
		          $yala_women62 = $yala_women62+1;
		        }
		    }
		}

		$quer_code = $this->db->query(" SELECT j_title,j_province
										FROM  japomodel
										LEFT JOIN provinces ON provinces.pro_id = japomodel.j_province
										ORDER BY j_id DESC
									  ");

		$all_num = $quer_code->num_rows();
		$all_men = 0;
		$all_women = 0;
		$all_notpass = 0;
		$all_pass = 0;
		$all_wait = 0;
		foreach ($quer_code->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			if ($rs["j_title"] == "นาย") {
	          $all_men = $all_men+1;
	        }else{
	          $all_women = $all_women+1;
	        }
		}

		$pat_num = 0;
		$pat_men = 0;
		$pat_women = 0;
		$pat_notpass = 0;
		$pat_pass = 0;
		$pat_wait = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["j_province"] == "74") {
				$pat_num = $pat_num+1;
				if ($rs["j_title"] == "นาย") {
		          $pat_men = $pat_men+1;
		        }else{
		          $pat_women = $pat_women+1;
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
			if ($rs["j_province"] == "76") {
				$nara_num = $nara_num+1;
				if ($rs["j_title"] == "นาย") {
		          $nara_men = $nara_men+1;
		        }else{
		          $nara_women = $nara_women+1;
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
			if ($rs["j_province"] == "75") {
				$yala_num = $yala_num+1;
				if ($rs["j_title"] == "นาย") {
		          $yala_men = $yala_men+1;
		        }else{
		          $yala_women = $yala_women+1;
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