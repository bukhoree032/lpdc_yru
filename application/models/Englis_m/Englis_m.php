<?php  
class Englis_m extends CI_Model {
	
	public function eng()
	{	
		$check = "0";
		if ($this->session->userdata('eng_search_pro')) {
			$check = "1";
		}else if ($this->session->userdata('eng_search_year')) {
			$check = "1";
		}

		if ($check != "1") {
			$query_id = $this->db->query("SELECT e_row_budget 
										FROM english
										ORDER BY e_row_budget DESC LIMIT 1");
			$numrow = $query_id->num_rows();

			if ($numrow) {
				foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
					$year = $rs["e_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
				}
			}else{
				$year = "";
			}

			$quer_code = $this->db->query(" SELECT *
											FROM  english
											LEFT JOIN english_branch ON english_branch.branch_id = english.e_branch
											LEFT JOIN english_corps ON english_corps.corps_id = english.e_corps
											LEFT JOIN english_course ON english_course.course_id = english.e_course
											LEFT JOIN english_train ON english_train.train_id = english.e_train
											WHERE english.e_row_budget = '$year' ORDER BY e_id DESC
										  ");
			return $quer_code->result();
		}else{
			$e_row_budget = $this->session->userdata('eng_search_year');
			$pro = $this->session->userdata('eng_search_pro');

			if ($e_row_budget == '') {
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
											FROM  english
											LEFT JOIN english_branch ON english_branch.branch_id = english.e_branch
											LEFT JOIN english_corps ON english_corps.corps_id = english.e_corps
											LEFT JOIN english_course ON english_course.course_id = english.e_course
											LEFT JOIN english_train ON english_train.train_id = english.e_train
											WHERE english.e_row_budget $year '$e_row_budget' AND english.e_corps $pro1 '$pro'  ORDER BY e_id DESC
										  ");
			return $quer_code->result();
		}
	}

	// public function o_id($o_id)
	// {	
	// 	return $o_id;
	// }

	public function eng_search() //ลบ
	{	
		$e_row_budget = $this->input->post('s_year');
		$pro = $this->input->post('s_pro');

		$this->session->set_userdata("eng_search_year",$e_row_budget);
		$this->session->set_userdata("eng_search_pro",$pro);

		if ($e_row_budget == '') {
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
										FROM  english
										LEFT JOIN english_branch ON english_branch.branch_id = english.e_branch
										LEFT JOIN english_corps ON english_corps.corps_id = english.e_corps
										LEFT JOIN english_course ON english_course.course_id = english.e_course
										LEFT JOIN english_train ON english_train.train_id = english.e_train
										WHERE english.e_row_budget $year '$e_row_budget' AND  english.e_corps $pro1 '$pro' ORDER BY e_id DESC
									  ");
		return $quer_code->result();
	}

	public function eng_year()
	{ 	
		$query_id = $this->db->query("	SELECT e_row_budget 
										FROM english 
										ORDER BY e_row_budget DESC LIMIT 1");
		$cal = $query_id->result() ;

		$quer_year = $this->db->query(" SELECT DISTINCT `e_row_budget` 
										FROM `english`
									  ");
		$year = $quer_year->result() ;

		$data = array(
					   'cal' => $cal,
					   'year' => $year,
					   // 'acti' => $acti,
					 );
		return $data;
	}

	public function eng_corps()
	{ 	
		$query_corps = $this->db->query("	SELECT *
											FROM english_corps
										");
		$corps = $query_corps->result() ;

		$query_course = $this->db->query("	SELECT *
										FROM english_course
									");
		$course = $query_course->result() ;

		$query_branch = $this->db->query("	SELECT *
										FROM english_branch
									");
		$branch = $query_branch->result() ;

		$data = array(
					   'corps' => $corps,
					   'course' => $course,
					   'branch' => $branch,
					 );
		return $data;
	}

	public function trace_row($o_id)
	{	
		$query_id = $this->db->query("SELECT * 
									FROM otop_ubi_share 
									WHERE o_ubi_sh_h_id = '$o_id'
									ORDER BY o_ubi_sh_h_id DESC LIMIT 1
									");
		$numrow = $query_id->num_rows();
		if ($numrow == "0") {
			$cal = "1";
			$cal1 = "1";
		}else{ 
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$cal = $rs["o_ubi_sh_id"]; //ตรงนี้เราจะได้ค่า CP18100
				$cal1 = $rs["o_ubi_sh_id"]; //ตรงนี้เราจะได้ค่า CP18100
			}
			$cal ++;
		}
		
		if ($numrow >= "0") {
			$query_trace = $this->db->query("SELECT * 
										FROM otop_ubi_trance
										WHERE o_ubi_tr_h_id = '$o_id' AND o_ubi_tr_sh_id = '$cal1'
										ORDER BY o_ubi_tr_row DESC LIMIT 1
										");
			$numrow_trace = $query_trace->num_rows();
			if ($numrow_trace == "0") {
				$cal_trace = "1";
			}else{ 
				foreach ($query_trace->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
					$cal_trace = $rs["o_ubi_tr_row"]; //ตรงนี้เราจะได้ค่า CP18100
				}
				$cal_trace ++;
			}

			$query_trace_checken = $this->db->query("SELECT * 
										FROM otop_ubi_trance_checken
										WHERE o_ubi_tr_h_id = '$o_id' AND o_ubi_tr_sh_id = '$cal1'
										ORDER BY o_ubi_tr_row DESC LIMIT 1
										");
			$numrow_trace_checken = $query_trace_checken->num_rows();
			if ($numrow_trace_checken == "0") {
				$cal_trace_checken = "1";
			}else{ 
				foreach ($query_trace_checken->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
					$cal_trace_checken = $rs["o_ubi_tr_row"]; //ตรงนี้เราจะได้ค่า CP18100
				}
				$cal_trace_checken ++;
			}


			$data = array(
						   'cal' => $cal,
						   'trace' => $cal_trace,
						   'trace_checken' => $cal_trace_checken,
						   // 'trace' => $trace,
						 );
			return $data;
		}else{
			return "false";
		}
	}

	public function deal($o_id)
	{	
		$otop_ubi = $this->db->query(" SELECT *
										FROM otop_ubi
										WHERE o_ubi_id = '$o_id' 
									  ");
		// return $household->result();
		$hold = $otop_ubi->result();

		$otop_ubi_share = $this->db->query(" SELECT *
										FROM otop_ubi_share
										LEFT JOIN otop_ubi ON otop_ubi.o_ubi_id = otop_ubi_share.o_ubi_sh_h_id
										WHERE o_ubi_sh_h_id = '$o_id' 
									  ");
		// return $quer_code->result();
		$honey = $otop_ubi_share->result();
		
		$otop_ubi_trance = $this->db->query(" SELECT o_ubi_tr_row
										FROM otop_ubi_trance 
										ORDER BY o_ubi_tr_row DESC LIMIT 1
									  ");
		// return $quer_code->result();
		$trace_row = $otop_ubi_trance->result();

		$otop_ubi_trance = $this->db->query(" SELECT *
										FROM otop_ubi_trance 
										LEFT JOIN otop_ubi_share ON otop_ubi_share.o_ubi_sh_id = otop_ubi_trance.o_ubi_tr_sh_id
										LEFT JOIN otop_ubi ON otop_ubi.o_ubi_id = otop_ubi_trance.o_ubi_tr_h_id
										WHERE otop_ubi_trance.o_ubi_tr_h_id = '$o_id' AND otop_ubi_share.o_ubi_sh_h_id = '$o_id'
									  ");
		// return $quer_code->result();
		$trace = $otop_ubi_trance->result();

		$otop_ubi_trance_checken = $this->db->query(" SELECT o_ubi_tr_row
										FROM otop_ubi_trance_checken 
										ORDER BY o_ubi_tr_row DESC LIMIT 1
									  ");
		// return $quer_code->result();
		$trace_row_checken = $otop_ubi_trance_checken->result();

		$otop_ubi_trance_checken = $this->db->query(" SELECT *
										FROM otop_ubi_trance_checken 
										LEFT JOIN otop_ubi_share ON otop_ubi_share.o_ubi_sh_id = otop_ubi_trance_checken.o_ubi_tr_sh_id
										LEFT JOIN otop_ubi ON otop_ubi.o_ubi_id = otop_ubi_trance_checken.o_ubi_tr_h_id
										WHERE otop_ubi_trance_checken.o_ubi_tr_h_id = '$o_id' AND otop_ubi_share.o_ubi_sh_h_id = '$o_id'
									  ");
		// return $quer_code->result();
		$trace_checken = $otop_ubi_trance_checken->result();

		$data = array(
					   'hold' => $hold,
					   'honey' => $honey,
					   'trace' => $trace,
					   'trace_row' => $trace_row,
					   'trace_checken' => $trace_checken,
					   'trace_row_checken' => $trace_row_checken,
					 );
		return $data;
	}

	public function ubi_insert($o_id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		$data = array(
					  'o_ubi_sh_id' => $this->input->post('deal'),
					  'o_ubi_sh_h_id' => $o_id,
					  'o_ubi_sh_gobbet' => $this->input->post('gender'),
					  'o_ubi_sh_annotation' => $this->input->post('annotation'),
					  'o_ubi_sh_date' => $date_time,
					);
		$this->db->insert('otop_ubi_share',$data);

		return $data;
	}

	public function ubi_edit($o_id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		$data = array(
					  'o_ubi_sh_gobbet' => $this->input->post('gender'),
					  'o_ubi_sh_annotation' => $this->input->post('annotation'),
					  'o_ubi_sh_date_up' => $date_time,
					);

		$this->db->where('o_ubi_id',$o_id);
		$this->db->update('otop_ubi_share',$data);
	}
	// public function otop_search() //ลบ
	// {	
	// 	$o_row_budget = $this->input->post('s_year');
	// 	$pro = $this->input->post('s_pro');
		
	// 	if ($o_row_budget == '') {
	// 		$year = "!=";
	// 	}else{
	// 		$year = "=";
	// 	}

	// 	if ($pro == '') {
	// 		$pro1 = "!=";
	// 	}else{
	// 		$pro1 = "=";
	// 	}

	// 	$quer_code = $this->db->query(" SELECT *
	// 									FROM  otop
	// 									LEFT JOIN provinces ON provinces.pro_id = otop.o_province
	// 									WHERE otop.o_row_budget $year '$o_row_budget' AND  otop.o_province $pro1 '$pro' ORDER BY o_id DESC
	// 								  ");
	// 	return $quer_code->result();
	// }

	public function trace_insert($o_id)
	{	
		$date_time = date("Y-m-d");

		$data = array(
					  'o_ubi_tr_h_id' => $o_id,
					  'o_ubi_tr_sh_id' => $this->input->post('deal'),
					  'o_ubi_tr_row' => $this->input->post('trace'),
					  'o_ubi_tr_suplus' => $this->input->post('gobbet'),
					  'o_ubi_tr_waste' => $this->input->post('waste'),
					  'o_ubi_tr_buy' => $this->input->post('buy'),
					  'o_ubi_tr_weight' => $this->input->post('weight'),
					  'o_ubi_tr_period' => $this->input->post('period'),
					  'o_ubi_tr_annotition' => $this->input->post('annotation'),
					  'o_ubi_tr_date' => $date_time,
					);
		$this->db->insert('otop_ubi_trance',$data);
	}

	public function trace_edit($o_id)
	{	
		$date_time = date("Y-m-d");
		$id = $this->input->post('id');

		$data = array(
					  'o_ubi_tr_h_id' => $o_id,
					  'o_ubi_tr_sh_id' => $this->input->post('deal'),
					  'o_ubi_tr_row' => $this->input->post('trace'),
					  'o_ubi_tr_suplus' => $this->input->post('gobbet'),
					  'o_ubi_tr_waste' => $this->input->post('waste'),
					  'o_ubi_tr_buy' => $this->input->post('buy'),
					  'o_ubi_tr_weight' => $this->input->post('weight'),
					  'o_ubi_tr_period' => $this->input->post('period'),
					  'o_ubi_tr_annotition' => $this->input->post('annotation'),
					  'o_ubi_tr_date_up' => $date_time,
					);
		
		$this->db->where('o_ubi_tr_id ',$id);
		$this->db->update('otop_ubi_trance',$data);
	}

	public function shop_mushroom($o_id)
	{	
		$quer_code = $this->db->query(" SELECT *
										FROM  otop_ubi_trance
										WHERE o_ubi_tr_h_id = '$o_id' 
									  ");
		return $quer_code->result();
	}

	public function honey_trace_insert($o_id)
	{	
		$date_time = date("Y-m-d");

		$data = array(
					  'o_ubi_tr_h_id' => $o_id,
					  'o_ubi_tr_sh_id' => $this->input->post('deal'),
					  'o_ubi_tr_row' => $this->input->post('trace'),
					  'o_ubi_tr_suplus' => $this->input->post('gobbet'),
					  'o_ubi_tr_waste' => $this->input->post('waste'),
					  'o_ubi_tr_keep' => $this->input->post('keep'),
					  'o_ubi_tr_buy' => $this->input->post('price'),
					  'o_ubi_tr_weight' => $this->input->post('CC'),
					  'o_ubi_tr_period' => $this->input->post('period'),
					  'o_ubi_tr_annotition' => $this->input->post('annotation'),
					  'o_ubi_tr_date' => $date_time,
					);
		$this->db->insert('otop_ubi_trance',$data);
	}

	public function checken_trace_insert($o_id)
	{	
		$date_time = date("Y-m-d");

		$data = array(
					  'o_ubi_tr_h_id' => $o_id,
					  'o_ubi_tr_sh_id' => $this->input->post('deal'),
					  'o_ubi_tr_row' => $this->input->post('trace'),
					  'o_ubi_tr_gobbet_male' => $this->input->post('gobbet_male'),
					  'o_ubi_tr_gobbet_female' => $this->input->post('gobbet_female'),
					  'o_ubi_tr_dead_male' => $this->input->post('dead_male'),
					  'o_ubi_tr_dead_female' => $this->input->post('dead_female'),
					  'o_ubi_male' => $this->input->post('male'),
					  'o_ubi_male_weight' => $this->input->post('male_weight'),
					  'o_ubi_male_buy' => $this->input->post('sell_male'),
					  'o_ubi_female' => $this->input->post('female'),
					  'o_ubi_female_weight' => $this->input->post('female_weight'),
					  'o_ubi_female_buy' => $this->input->post('sell_female'),
					  'o_ubi_tr_period' => $this->input->post('period'),
					  'o_ubi_tr_annotition' => $this->input->post('annotation'),
					  'o_ubi_tr_date' => $date_time,
					);
		$this->db->insert('otop_ubi_trance_checken',$data);
		// return $asd;
	}

	public function checken_trace_edit($o_id)
	{	
		$date_time = date("Y-m-d");
		$id = $this->input->post('id');

		$data = array(
					  'o_ubi_tr_sh_id' => $this->input->post('deal'),
					  'o_ubi_tr_row' => $this->input->post('trace'),
					  'o_ubi_tr_gobbet_male' => $this->input->post('gobbet_male'),
					  'o_ubi_tr_gobbet_female' => $this->input->post('gobbet_female'),
					  'o_ubi_tr_dead_male' => $this->input->post('dead_male'),
					  'o_ubi_tr_dead_female' => $this->input->post('dead_female'),
					  'o_ubi_male' => $this->input->post('male'),
					  'o_ubi_male_weight' => $this->input->post('male_weight'),
					  'o_ubi_male_buy' => $this->input->post('sell_male'),
					  'o_ubi_female' => $this->input->post('female'),
					  'o_ubi_female_weight' => $this->input->post('female_weight'),
					  'o_ubi_female_buy' => $this->input->post('sell_female'),
					  'o_ubi_tr_period' => $this->input->post('period'),
					  'o_ubi_tr_annotition' => $this->input->post('annotation'),
					  'o_ubi_tr_date_up' => $date_time,
					);
		$this->db->where('o_ubi_tr_id',$id);
		$this->db->update('otop_ubi_trance_checken',$data);
	}

	public function e_dashboard()
	{ 	
		$query_id = $this->db->query("SELECT e_row_budget 
									  FROM english 
								 	  ORDER BY e_row_budget DESC LIMIT 1");
		$numrow = $query_id->num_rows();

		if ($numrow) {
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$year = $rs["e_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
			}
		}else{
			$year = "";
		}

		$year63 = $year;

		$e_CEFR = $this->db->query(" SELECT e_CEFR,e_corps
									 FROM  english
									 WHERE english.e_row_budget = '$year'
								  ");
		$all_num63 = $e_CEFR->num_rows();

		$all_c1_63 = 0;
		$all_b2_63 = 0;
		$all_b1_63 = 0;
		$all_a2_63 = 0;
		$all_a1_63 = 0;
		$all_absent63 = 0;
		foreach ($e_CEFR->result_array() as $rs) {
			if ($rs["e_CEFR"] == "C1") {
				$all_c1_63 = $all_c1_63+1;
			}else if ($rs["e_CEFR"] == "B2") {
				$all_b2_63 = $all_b2_63+1;
			}else if ($rs["e_CEFR"] == "B1") {
				$all_b1_63 = $all_b1_63+1;
			}else if ($rs["e_CEFR"] == "A2") {
				$all_a2_63 = $all_a2_63+1;
			}else if ($rs["e_CEFR"] == "A1") {
				$all_a1_63 = $all_a1_63+1;
			}else{
				$all_absent63 = $all_absent63+1;
			}
		}

		$edu_num63 = 0;
		$edu_c1_63 = 0;
		$edu_b2_63 = 0;
		$edu_b1_63 = 0;
		$edu_a2_63 = 0;
		$edu_a1_63 = 0;
		$edu_absent63 = 0;
		foreach ($e_CEFR->result_array() as $rs) { //74 = pat
			if ($rs["e_corps"] == "1") {
				$edu_num63 = $edu_num63+1;
				if ($rs["e_CEFR"] == "C1") {
					$edu_c1_63 = $edu_c1_63+1;
				}else if ($rs["e_CEFR"] == "B2") {
					$edu_b2_63 = $edu_b2_63+1;
				}else if ($rs["e_CEFR"] == "B1") {
					$edu_b1_63 = $edu_b1_63+1;
				}else if ($rs["e_CEFR"] == "A2") {
					$edu_a2_63 = $edu_a2_63+1;
				}else if ($rs["e_CEFR"] == "A1") {
					$edu_a1_63 = $edu_a1_63+1;
				}else{
					$edu_absent63 = $edu_absent63+1;
				}
		    }
		}

		$h_num63 = 0;
		$h_c1_63 = 0;
		$h_b2_63 = 0;
		$h_b1_63 = 0;
		$h_a2_63 = 0;
		$h_a1_63 = 0;
		$h_absent63 = 0;
		foreach ($e_CEFR->result_array() as $rs) { //74 = pat
			if ($rs["e_corps"] == "2") {
				$h_num63 = $h_num63+1;
				if ($rs["e_CEFR"] == "C1") {
					$h_c1_63 = $h_c1_63+1;
				}else if ($rs["e_CEFR"] == "B2") {
					$h_b2_63 = $h_b2_63+1;
				}else if ($rs["e_CEFR"] == "B1") {
					$h_b1_63 = $h_b1_63+1;
				}else if ($rs["e_CEFR"] == "A2") {
					$h_a2_63 = $h_a2_63+1;
				}else if ($rs["e_CEFR"] == "A1") {
					$h_a1_63 = $h_a1_63+1;
				}else{
					$h_absent63 = $h_absent63+1;
				}
		    }
		}

		$s_num63 = 0;
		$s_c1_63 = 0;
		$s_b2_63 = 0;
		$s_b1_63 = 0;
		$s_a2_63 = 0;
		$s_a1_63 = 0;
		$s_absent63 = 0;
		foreach ($e_CEFR->result_array() as $rs) { //74 = pat
			if ($rs["e_corps"] == "3") {
				$s_num63 = $s_num63+1;
				if ($rs["e_CEFR"] == "C1") {
					$s_c1_63 = $s_c1_63+1;
				}else if ($rs["e_CEFR"] == "B2") {
					$s_b2_63 = $s_b2_63+1;
				}else if ($rs["e_CEFR"] == "B1") {
					$s_b1_63 = $s_b1_63+1;
				}else if ($rs["e_CEFR"] == "A2") {
					$s_a2_63 = $s_a2_63+1;
				}else if ($rs["e_CEFR"] == "A1") {
					$s_a1_63 = $s_a1_63+1;
				}else{
					$s_absent63 = $s_absent63+1;
				}
		    }
		}

		$m_num63 = 0;
		$m_c1_63 = 0;
		$m_b2_63 = 0;
		$m_b1_63 = 0;
		$m_a2_63 = 0;
		$m_a1_63 = 0;
		$m_absent63 = 0;
		foreach ($e_CEFR->result_array() as $rs) { //74 = pat
			if ($rs["e_corps"] == "4") {
				$m_num63 = $m_num63+1;
				if ($rs["e_CEFR"] == "C1") {
					$m_c1_63 = $m_c1_63+1;
				}else if ($rs["e_CEFR"] == "B2") {
					$m_b2_63 = $m_b2_63+1;
				}else if ($rs["e_CEFR"] == "B1") {
					$m_b1_63 = $m_b1_63+1;
				}else if ($rs["e_CEFR"] == "A2") {
					$m_a2_63 = $m_a2_63+1;
				}else if ($rs["e_CEFR"] == "A1") {
					$m_a1_63 = $m_a1_63+1;
				}else{
					$m_absent63 = $m_absent63+1;
				}
		    }
		}

		if ($year) {
			$year = $year-1;
		}else{
			$year = "";
		}

		$year62 = $year;

		$e_CEFR = $this->db->query(" SELECT e_CEFR,e_corps
									 FROM  english
									 WHERE english.e_row_budget = '$year'
								  ");
		$all_num62 = $e_CEFR->num_rows();

		$all_c1_62 = 0;
		$all_b2_62 = 0;
		$all_b1_62 = 0;
		$all_a2_62 = 0;
		$all_a1_62 = 0;
		$all_absent62 = 0;
		foreach ($e_CEFR->result_array() as $rs) {
			if ($rs["e_CEFR"] == "C1") {
				$all_c1_62 = $all_c1_62+1;
			}else if ($rs["e_CEFR"] == "B2") {
				$all_b2_62 = $all_b2_62+1;
			}else if ($rs["e_CEFR"] == "B1") {
				$all_b1_62 = $all_b1_62+1;
			}else if ($rs["e_CEFR"] == "A2") {
				$all_a2_62 = $all_a2_62+1;
			}else if ($rs["e_CEFR"] == "A1") {
				$all_a1_62 = $all_a1_62+1;
			}else{
				$all_absent62 = $all_absent62+1;
			}
		}

		$edu_num62 = 0;
		$edu_c1_62 = 0;
		$edu_b2_62 = 0;
		$edu_b1_62 = 0;
		$edu_a2_62 = 0;
		$edu_a1_62 = 0;
		$edu_absent62 = 0;
		foreach ($e_CEFR->result_array() as $rs) { //74 = pat
			if ($rs["e_corps"] == "1") {
				$edu_num62 = $edu_num62+1;
				if ($rs["e_CEFR"] == "C1") {
					$edu_c1_62 = $edu_c1_62+1;
				}else if ($rs["e_CEFR"] == "B2") {
					$edu_b2_62 = $edu_b2_62+1;
				}else if ($rs["e_CEFR"] == "B1") {
					$edu_b1_62 = $edu_b1_62+1;
				}else if ($rs["e_CEFR"] == "A2") {
					$edu_a2_62 = $edu_a2_62+1;
				}else if ($rs["e_CEFR"] == "A1") {
					$edu_a1_62 = $edu_a1_62+1;
				}else{
					$edu_absent62 = $edu_absent62+1;
				}
		    }
		}

		$h_num62 = 0;
		$h_c1_62 = 0;
		$h_b2_62 = 0;
		$h_b1_62 = 0;
		$h_a2_62 = 0;
		$h_a1_62 = 0;
		$h_absent62 = 0;
		foreach ($e_CEFR->result_array() as $rs) { //74 = pat
			if ($rs["e_corps"] == "2") {
				$h_num62 = $h_num62+1;
				if ($rs["e_CEFR"] == "C1") {
					$h_c1_62 = $h_c1_62+1;
				}else if ($rs["e_CEFR"] == "B2") {
					$h_b2_62 = $h_b2_62+1;
				}else if ($rs["e_CEFR"] == "B1") {
					$h_b1_62 = $h_b1_62+1;
				}else if ($rs["e_CEFR"] == "A2") {
					$h_a2_62 = $h_a2_62+1;
				}else if ($rs["e_CEFR"] == "A1") {
					$h_a1_62 = $h_a1_62+1;
				}else{
					$h_absent62 = $h_absent62+1;
				}
		    }
		}

		$s_num62 = 0;
		$s_c1_62 = 0;
		$s_b2_62 = 0;
		$s_b1_62 = 0;
		$s_a2_62 = 0;
		$s_a1_62 = 0;
		$s_absent62 = 0;
		foreach ($e_CEFR->result_array() as $rs) { //74 = pat
			if ($rs["e_corps"] == "3") {
				$s_num62 = $s_num62+1;
				if ($rs["e_CEFR"] == "C1") {
					$s_c1_62 = $s_c1_62+1;
				}else if ($rs["e_CEFR"] == "B2") {
					$s_b2_62 = $s_b2_62+1;
				}else if ($rs["e_CEFR"] == "B1") {
					$s_b1_62 = $s_b1_62+1;
				}else if ($rs["e_CEFR"] == "A2") {
					$s_a2_62 = $s_a2_62+1;
				}else if ($rs["e_CEFR"] == "A1") {
					$s_a1_62 = $s_a1_62+1;
				}else{
					$s_absent62 = $s_absent62+1;
				}
		    }
		}

		$m_num62 = 0;
		$m_c1_62 = 0;
		$m_b2_62 = 0;
		$m_b1_62 = 0;
		$m_a2_62 = 0;
		$m_a1_62 = 0;
		$m_absent62 = 0;
		foreach ($e_CEFR->result_array() as $rs) { //74 = pat
			if ($rs["e_corps"] == "4") {
				$m_num62 = $m_num62+1;
				if ($rs["e_CEFR"] == "C1") {
					$m_c1_62 = $m_c1_62+1;
				}else if ($rs["e_CEFR"] == "B2") {
					$m_b2_62 = $m_b2_62+1;
				}else if ($rs["e_CEFR"] == "B1") {
					$m_b1_62 = $m_b1_62+1;
				}else if ($rs["e_CEFR"] == "A2") {
					$m_a2_62 = $m_a2_62+1;
				}else if ($rs["e_CEFR"] == "A1") {
					$m_a1_62 = $m_a1_62+1;
				}else{
					$m_absent62 = $m_absent62+1;
				}
		    }
		}

		$year = $year;

		$e_CEFR = $this->db->query(" SELECT e_CEFR,e_corps
									 FROM  english
								  ");
		$all_num = $e_CEFR->num_rows();

		$all_c1 = 0;
		$all_b2 = 0;
		$all_b1 = 0;
		$all_a2 = 0;
		$all_a1 = 0;
		$all_absent = 0;
		foreach ($e_CEFR->result_array() as $rs) {
			if ($rs["e_CEFR"] == "C1") {
				$all_c1 = $all_c1+1;
			}else if ($rs["e_CEFR"] == "B2") {
				$all_b2 = $all_b2+1;
			}else if ($rs["e_CEFR"] == "B1") {
				$all_b1 = $all_b1+1;
			}else if ($rs["e_CEFR"] == "A2") {
				$all_a2 = $all_a2+1;
			}else if ($rs["e_CEFR"] == "A1") {
				$all_a1 = $all_a1+1;
			}else{
				$all_absent = $all_absent+1;
			}
		}

		$edu_num = 0;
		$edu_c1 = 0;
		$edu_b2 = 0;
		$edu_b1 = 0;
		$edu_a2 = 0;
		$edu_a1 = 0;
		$edu_absent = 0;
		foreach ($e_CEFR->result_array() as $rs) { //74 = pat
			if ($rs["e_corps"] == "1") {
				$edu_num = $edu_num+1;
				if ($rs["e_CEFR"] == "C1") {
					$edu_c1 = $edu_c1+1;
				}else if ($rs["e_CEFR"] == "B2") {
					$edu_b2 = $edu_b2+1;
				}else if ($rs["e_CEFR"] == "B1") {
					$edu_b1 = $edu_b1+1;
				}else if ($rs["e_CEFR"] == "A2") {
					$edu_a2 = $edu_a2+1;
				}else if ($rs["e_CEFR"] == "A1") {
					$edu_a1 = $edu_a1+1;
				}else{
					$edu_absent = $edu_absent+1;
				}
		    }
		}

		$h_num = 0;
		$h_c1 = 0;
		$h_b2 = 0;
		$h_b1 = 0;
		$h_a2 = 0;
		$h_a1 = 0;
		$h_absent = 0;
		foreach ($e_CEFR->result_array() as $rs) { //74 = pat
			if ($rs["e_corps"] == "2") {
				$h_num = $h_num+1;
				if ($rs["e_CEFR"] == "C1") {
					$h_c1 = $h_c1+1;
				}else if ($rs["e_CEFR"] == "B2") {
					$h_b2 = $h_b2+1;
				}else if ($rs["e_CEFR"] == "B1") {
					$h_b1 = $h_b1+1;
				}else if ($rs["e_CEFR"] == "A2") {
					$h_a2 = $h_a2+1;
				}else if ($rs["e_CEFR"] == "A1") {
					$h_a1 = $h_a1+1;
				}else{
					$h_absent = $h_absent+1;
				}
		    }
		}

		$s_num = 0;
		$s_c1 = 0;
		$s_b2 = 0;
		$s_b1 = 0;
		$s_a2 = 0;
		$s_a1 = 0;
		$s_absent = 0;
		foreach ($e_CEFR->result_array() as $rs) { //74 = pat
			if ($rs["e_corps"] == "3") {
				$s_num = $s_num+1;
				if ($rs["e_CEFR"] == "C1") {
					$s_c1 = $s_c1+1;
				}else if ($rs["e_CEFR"] == "B2") {
					$s_b2 = $s_b2+1;
				}else if ($rs["e_CEFR"] == "B1") {
					$s_b1 = $s_b1+1;
				}else if ($rs["e_CEFR"] == "A2") {
					$s_a2 = $s_a2+1;
				}else if ($rs["e_CEFR"] == "A1") {
					$s_a1 = $s_a1+1;
				}else{
					$s_absent = $s_absent+1;
				}
		    }
		}

		$m_num = 0;
		$m_c1 = 0;
		$m_b2 = 0;
		$m_b1 = 0;
		$m_a2 = 0;
		$m_a1 = 0;
		$m_absent = 0;
		foreach ($e_CEFR->result_array() as $rs) { //74 = pat
			if ($rs["e_corps"] == "4") {
				$m_num = $m_num+1;
				if ($rs["e_CEFR"] == "C1") {
					$m_c1 = $m_c1+1;
				}else if ($rs["e_CEFR"] == "B2") {
					$m_b2 = $m_b2+1;
				}else if ($rs["e_CEFR"] == "B1") {
					$m_b1 = $m_b1+1;
				}else if ($rs["e_CEFR"] == "A2") {
					$m_a2 = $m_a2+1;
				}else if ($rs["e_CEFR"] == "A1") {
					$m_a1 = $m_a1+1;
				}else{
					$m_absent = $m_absent+1;
				}
		    }
		}

		$data = array(
					   'year63' => $year63,
					   'year62' => $year62,

					   'm_num' => $m_num,
					   'm_c1' => $m_c1,
					   'm_b2' => $m_b2,
					   'm_b1' => $m_b1,
					   'm_a2' => $m_a2,
					   'm_a1' => $m_a1,
					   'm_absent' => $m_absent,
					   's_num' => $s_num,
					   's_c1' => $s_c1,
					   's_b2' => $s_b2,
					   's_b1' => $s_b1,
					   's_a2' => $s_a2,
					   's_a1' => $s_a1,
					   's_absent' => $s_absent,
					   'h_num' => $h_num,
					   'h_c1' => $h_c1,
					   'h_b2' => $h_b2,
					   'h_b1' => $h_b1,
					   'h_a2' => $h_a2,
					   'h_a1' => $h_a1,
					   'h_absent' => $h_absent,
					   'edu_num' => $edu_num,
					   'edu_c1' => $edu_c1,
					   'edu_b2' => $edu_b2,
					   'edu_b1' => $edu_b1,
					   'edu_a2' => $edu_a2,
					   'edu_a1' => $edu_a1,
					   'edu_absent' => $edu_absent,
					   'all_num' => $all_num,
					   'all_c1' => $all_c1,
					   'all_b2' => $all_b2,
					   'all_b1' => $all_b1,
					   'all_a2' => $all_a2,
					   'all_a1' => $all_a1,
					   'all_absent' => $all_absent,

					   'm_num62' => $m_num62,
					   'm_c1_62' => $m_c1_62,
					   'm_b2_62' => $m_b2_62,
					   'm_b1_62' => $m_b1_62,
					   'm_a2_62' => $m_a2_62,
					   'm_a1_62' => $m_a1_62,
					   'm_absent62' => $m_absent62,
					   's_num62' => $s_num62,
					   's_c1_62' => $s_c1_62,
					   's_b2_62' => $s_b2_62,
					   's_b1_62' => $s_b1_62,
					   's_a2_62' => $s_a2_62,
					   's_a1_62' => $s_a1_62,
					   's_absent62' => $s_absent62,
					   'h_num62' => $h_num62,
					   'h_c1_62' => $h_c1_62,
					   'h_b2_62' => $h_b2_62,
					   'h_b1_62' => $h_b1_62,
					   'h_a2_62' => $h_a2_62,
					   'h_a1_62' => $h_a1_62,
					   'h_absent62' => $h_absent62,
					   'edu_num62' => $edu_num62,
					   'edu_c1_62' => $edu_c1_62,
					   'edu_b2_62' => $edu_b2_62,
					   'edu_b1_62' => $edu_b1_62,
					   'edu_a2_62' => $edu_a2_62,
					   'edu_a1_62' => $edu_a1_62,
					   'edu_absent62' => $edu_absent62,
					   'all_num62' => $all_num62,
					   'all_c1_62' => $all_c1_62,
					   'all_b2_62' => $all_b2_62,
					   'all_b1_62' => $all_b1_62,
					   'all_a2_62' => $all_a2_62,
					   'all_a1_62' => $all_a1_62,
					   'all_absent62' => $all_absent,

					   'm_num63' => $m_num63,
					   'm_c1_63' => $m_c1_63,
					   'm_b2_63' => $m_b2_63,
					   'm_b1_63' => $m_b1_63,
					   'm_a2_63' => $m_a2_63,
					   'm_a1_63' => $m_a1_63,
					   'm_absent63' => $m_absent63,
					   's_num63' => $s_num63,
					   's_c1_63' => $s_c1_63,
					   's_b2_63' => $s_b2_63,
					   's_b1_63' => $s_b1_63,
					   's_a2_63' => $s_a2_63,
					   's_a1_63' => $s_a1_63,
					   's_absent63' => $s_absent63,
					   'h_num63' => $h_num63,
					   'h_c1_63' => $h_c1_63,
					   'h_b2_63' => $h_b2_63,
					   'h_b1_63' => $h_b1_63,
					   'h_a2_63' => $h_a2_63,
					   'h_a1_63' => $h_a1_63,
					   'h_absent63' => $h_absent63,
					   'edu_num63' => $edu_num63,
					   'edu_c1_63' => $edu_c1_63,
					   'edu_b2_63' => $edu_b2_63,
					   'edu_b1_63' => $edu_b1_63,
					   'edu_a2_63' => $edu_a2_63,
					   'edu_a1_63' => $edu_a1_63,
					   'edu_absent63' => $edu_absent63,
					   'all_num63' => $all_num63,
					   'all_c1_63' => $all_c1_63,
					   'all_b2_63' => $all_b2_63,
					   'all_b1_63' => $all_b1_63,
					   'all_a2_63' => $all_a2_63,
					   'all_a1_63' => $all_a1_63,
					   'all_absent63' => $all_absent,
					 );
		return $data;
	}
}