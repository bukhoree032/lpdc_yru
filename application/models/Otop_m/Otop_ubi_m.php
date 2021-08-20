<?php  
class Otop_ubi_m extends CI_Model {
	// evaluate_year
	public function ubi()
	{	
		$check = "0";
		if ($this->session->userdata('ubi_search_pro')) {
			$check = "1";
		}else if ($this->session->userdata('ubi_search_year')) {
			$check = "1";
		}

		if ($check != "1") {
			$query_id = $this->db->query("SELECT o_ubi_row_budget 
										FROM otop_ubi
										ORDER BY o_ubi_row_budget DESC LIMIT 1");
			$numrow = $query_id->num_rows();

			if ($numrow) {
				foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
					$year = $rs["o_ubi_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
				}
			}else{
				$year = "";
			}

			$quer_code = $this->db->query(" SELECT *
											FROM  otop_ubi
											LEFT JOIN provinces ON provinces.pro_id = otop_ubi.o_ubi_province
											LEFT JOIN otop_ubi_activity ON otop_ubi_activity.o_ubi_ac_id = otop_ubi.o_ubi_occupation
											LEFT JOIN otop_ubi_year ON otop_ubi_year.e_y_user_id = otop_ubi.o_ubi_id
											WHERE otop_ubi.o_ubi_row_budget = '$year' ORDER BY o_ubi_id DESC
											-- LEFT JOIN activity ON activity.ac_id = otop.o_occupation
											-- WHERE otop.o_row_budget = '$year' AND NOT otop.o_status_bin = '2' ORDER BY h_id DESC
										  ");
			return $quer_code->result();
		}else{
			$o_ubi_row_budget = $this->session->userdata('ubi_search_year');
			$pro = $this->session->userdata('ubi_search_pro');

			if ($o_ubi_row_budget == '') {
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
											FROM  otop_ubi
											LEFT JOIN provinces ON provinces.pro_id = otop_ubi.o_ubi_province
											LEFT JOIN otop_ubi_activity ON otop_ubi_activity.o_ubi_ac_id = otop_ubi.o_ubi_occupation
											LEFT JOIN otop_ubi_year ON otop_ubi_year.e_y_user_id = otop_ubi.o_ubi_id
											WHERE otop_ubi.o_ubi_row_budget $year '$o_ubi_row_budget' AND  otop_ubi.o_ubi_province $pro1 '$pro' ORDER BY o_ubi_id DESC
										  ");
			return $quer_code->result();
		}
	}

	public function detail_ubi($h_id)
	{	
		$quer_code = $this->db->query(" SELECT *
										FROM  otop_ubi
										LEFT JOIN provinces ON provinces.pro_id = otop_ubi.o_ubi_province
										LEFT JOIN otop_ubi_activity ON otop_ubi_activity.o_ubi_ac_id = otop_ubi.o_ubi_occupation
										WHERE otop_ubi.o_ubi_id = '$h_id'
									  ");
		return $quer_code->result();
	}

	public function ubi_detail_year($h_id)
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  otop_ubi_year
										LEFT JOIN activity ON activity.ac_id = otop_ubi_year.e_y_ready_raise
										WHERE otop_ubi_year.e_y_user_id = '$h_id'
									  ");
		return $quer_code->result();
	}

	public function o_id($o_id)
	{	
		return $o_id;
	}

	public function ubi_search() //ลบ
	{	
		$o_ubi_row_budget = $this->input->post('s_year');
		$pro = $this->input->post('s_pro');

		$this->session->set_userdata("ubi_search_year",$o_ubi_row_budget);
		$this->session->set_userdata("ubi_search_pro",$pro);

		if ($o_ubi_row_budget == '') {
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
										FROM  otop_ubi
										LEFT JOIN provinces ON provinces.pro_id = otop_ubi.o_ubi_province
										LEFT JOIN otop_ubi_activity ON otop_ubi_activity.o_ubi_ac_id = otop_ubi.o_ubi_occupation
										LEFT JOIN otop_ubi_year ON otop_ubi_year.e_y_user_id = otop_ubi.o_ubi_id
										WHERE otop_ubi.o_ubi_row_budget $year '$o_ubi_row_budget' AND  otop_ubi.o_ubi_province $pro1 '$pro' ORDER BY o_ubi_id DESC
									  ");
		return $quer_code->result();
	}

	public function otop_year()
	{ 	
		$query_id = $this->db->query("	SELECT o_ubi_row_budget 
										FROM otop_ubi 
										ORDER BY o_ubi_row_budget DESC LIMIT 1");
		$cal = $query_id->result() ;

		$quer_year = $this->db->query(" SELECT DISTINCT `o_ubi_row_budget` 
										FROM `otop_ubi`
									  ");
		$year = $quer_year->result() ;

		$data = array(
					   'cal' => $cal,
					   'year' => $year,
					   // 'acti' => $acti,
					 );
		return $data;
	}

	public function manage_year()
	{ 	
		$quer_acti = $this->db->query(" SELECT *
										FROM otop_ubi_activity
									  ");
		$acti = $quer_acti->result();

		$data = array(
					   'acti' => $acti,
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
		$annotation = $this->input->post('annotation');
		if ($annotation == '') {
			$data = array(
					  	  'o_ubi_sh_id' => $this->input->post('deal'),
						  'o_ubi_sh_gobbet' => $this->input->post('gender'),
						  'o_ubi_sh_annotation' => $this->input->post('annotation'),
						  'o_ubi_sh_date_up' => $date_time,
						);

			$this->db->where('o_sh_id',$o_id);
			$this->db->update('otop_ubi_share',$data);
		}else{
			$data = array(
					  	  'o_ubi_sh_id' => $this->input->post('deal'),
						  'o_ubi_sh_gobbet' => $this->input->post('gender'),
						  'o_ubi_sh_annotation' => $this->input->post('annotation'),
						  'o_ubi_sh_date_up' => $date_time,
						);

			$this->db->where('o_sh_id',$o_id);
			$this->db->update('otop_ubi_share',$data);
		}
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
		
		// return $this->input->post('deal');
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
					  'o_ubi_tr_keep' => $this->input->post('keep'),
					  'o_ubi_tr_buy' => $this->input->post('price'),
					  'o_ubi_tr_weight' => $this->input->post('CC'),
					  'o_ubi_tr_period' => $this->input->post('period'),
					  'o_ubi_tr_annotition' => $this->input->post('annotation'),
					  'o_ubi_tr_date_up' => $date_time,
					);
		
		$this->db->where('o_ubi_tr_id ',$id);
		$this->db->update('otop_ubi_trance',$data);
	}

	public function trace_edit_mushroom($o_id)
	{	
		$date_time = date("Y-m-d");
		$id = $this->input->post('id');

		$data = array(
					  'o_ubi_tr_h_id' => $o_id,
					  'o_ubi_tr_sh_id' => $this->input->post('deal'),
					  'o_ubi_tr_row' => $this->input->post('trace'),
					  'o_ubi_tr_suplus' => $this->input->post('gobbet'),
					  'o_ubi_tr_waste' => $this->input->post('waste'),
					  // 'o_ubi_tr_keep' => $this->input->post('keep'),
					  'o_ubi_tr_buy' => $this->input->post('price'),
					  'o_ubi_tr_weight' => $this->input->post('CC'),
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

	public function otop_insert_year() 
	{
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		// echo $this->input->post('e_y_income');
		$data = array(
				  'e_y_row_budget' => $this->input->post('e_y_row_budget'),
				  'e_y_user_id' => $this->input->post('h_id'),
				  'e_y_product' => $this->input->post('e_y_product'),
				  'e_y_gobbet' => $this->input->post('e_y_gobbet'),
				  'e_y_gobbet_sur' => $this->input->post('e_y_gobbet_sur'),
				  'e_y_gobbet_dead' => $this->input->post('e_y_gobbet_dead'),
				  'e_y_eat' => $this->input->post('e_y_eat'),
				  'e_y_quantity_sold' => $this->input->post('e_y_quantity_sold'),
				  'e_y_detail' => $this->input->post('e_y_detail'),
				  'e_y_income	' => $this->input->post('e_y_income'),
				  'e_y_status_ready' => $this->input->post('e_y_status_ready'),
				  'e_y_ready_note' => $this->input->post('e_y_ready_note'),
				  'e_y_ready_raise' => $this->input->post('e_y_ready_raise'),
				  'e_y_4_1' => $this->input->post('e_y_4_1'),
				  'e_y_4_1_note	' => $this->input->post('e_y_4_1_note'),
				  'e_y_4_2' => $this->input->post('e_y_4_2'),
				  'e_y_4_3' => $this->input->post('e_y_4_3'),
				  'e_y_4_3_note' => $this->input->post('e_y_4_3_note'),
				  'e_y_4_4' => $this->input->post('e_y_4_4'),
				  'e_y_4_4_note' => $this->input->post('e_y_4_4_note'),
				  'e_y_4_5' => $this->input->post('e_y_4_5'),
				  'e_y_4_5_note' => $this->input->post('e_y_4_5_note'),
				  'e_y_4_6' => $this->input->post('e_y_4_6'),
				  'e_y_4_6_note' => $this->input->post('e_y_4_6_note'),
				  'e_y_temperature' => $this->input->post('e_y_temperature'),
				  'e_y_date_tem' => $this->input->post('e_y_date_tem'),
				  'e_y_date' => $date_time,
				);
		$query_check=$this->db->insert('otop_ubi_year',$data);
	}

	public function otop_update_year($h_id) 
	{
		$data = array(
				  'e_y_row_budget' => $this->input->post('e_y_row_budget'),
				  'e_y_user_id' => $this->input->post('h_id'),
				  'e_y_product' => $this->input->post('e_y_product'),
				  'e_y_gobbet' => $this->input->post('e_y_gobbet'),
				  'e_y_gobbet_sur' => $this->input->post('e_y_gobbet_sur'),
				  'e_y_gobbet_dead' => $this->input->post('e_y_gobbet_dead'),
				  'e_y_eat' => $this->input->post('e_y_eat'),
				  'e_y_quantity_sold' => $this->input->post('e_y_quantity_sold'),
				  'e_y_detail' => $this->input->post('e_y_detail'),
				  'e_y_income' => $this->input->post('e_y_income'),
				  'e_y_status_ready' => $this->input->post('e_y_status_ready'),
				  'e_y_ready_note' => $this->input->post('e_y_ready_note'),
				  'e_y_ready_raise' => $this->input->post('e_y_ready_raise'),
				  'e_y_4_1' => $this->input->post('e_y_4_1'),
				  'e_y_4_1_note	' => $this->input->post('e_y_4_1_note'),
				  'e_y_4_2' => $this->input->post('e_y_4_2'),
				  'e_y_4_3' => $this->input->post('e_y_4_3'),
				  'e_y_4_3_note' => $this->input->post('e_y_4_3_note'),
				  'e_y_4_4' => $this->input->post('e_y_4_4'),
				  'e_y_4_4_note' => $this->input->post('e_y_4_4_note'),
				  'e_y_4_5' => $this->input->post('e_y_4_5'),
				  'e_y_4_5_note' => $this->input->post('e_y_4_5_note'),
				  'e_y_4_6' => $this->input->post('e_y_4_6'),
				  'e_y_4_6_note' => $this->input->post('e_y_4_6_note'),
				  'e_y_temperature' => $this->input->post('e_y_temperature'),
				);

		$this->db->where('e_y_id',$h_id);
		$query_check1=$this->db->update('otop_ubi_year',$data);
	}

	public function otop_ubi_update() 
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
					  'o_ubi_title' => $this->input->post('h_title'),
					  'o_ubi_name' => $this->input->post('h_name'),
					  'o_ubi_surname' => $this->input->post('h_surname'),
					  'o_ubi_house_number' => $this->input->post('h_house_number'),
					  'o_ubi_age' => $this->input->post('h_age'),
					  'o_ubi_hold_members' => $this->input->post('o_ubi_hold_members'),
					  'o_ubi_work_hold_members' => $this->input->post('o_ubi_work_hold_members'),
					  'o_ubi_gender' => $h_gender_gen,
					  'o_ubi_business_name' => $this->input->post('o_ubi_business_name'),
					  'o_ubi_alley' => $this->input->post('h_alley'),
					  'o_ubi_street' => $this->input->post('h_street'),
					  'o_ubi_swine' => $this->input->post('h_swine'),
					  'o_ubi_village' => $this->input->post('h_village'),
					  'o_ubi_parish	' => $this->input->post('h_parish'),
					  'o_ubi_district' => $this->input->post('h_district'),
					  'o_ubi_province' => $this->input->post('h_province'),
					  'o_ubi_tel' => $this->input->post('h_tel'),
					  'o_ubi_revenue' => $this->input->post('h_revenue'),
					  'o_ubi_occupation' => $this->input->post('h_occupation'),
					  'o_ubi_date_up' => $date_time,
					);
		// $this->db->insert('halal_member',$data);

		$this->db->where('o_ubi_id',$h_id);
		$query_check=$this->db->update('otop_ubi',$data);

		if ($query_check) {
			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
			return "false_true";
		}else{
		  	return "false_regieter";
		}
	}

	public function location_insert($o_id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		$data = array(
					  'o_ubi_latitude' => $this->input->post('lat'),
					  'o_ubi_longitude' => $this->input->post('long'),
					);

		$this->db->where('o_ubi_id',$o_id);
		$this->db->update('otop_ubi',$data);
	}

	public function o_ubi_dashboard()
	{ 	
		$query_id = $this->db->query("SELECT o_ubi_row_budget 
									FROM otop_ubi
									ORDER BY o_ubi_row_budget DESC LIMIT 1");
		$numrow = $query_id->num_rows();

		if ($numrow) {
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$year = $rs["o_ubi_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
			}
		}else{
			$year = "";
		}

		$o_parish = $this->db->query(" SELECT DISTINCT o_ubi_parish
										FROM  otop_ubi
										WHERE otop_ubi.o_ubi_row_budget != '$year'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_ubi_district
										FROM  otop_ubi
										WHERE otop_ubi.o_ubi_row_budget != '$year'
									  ");
		$all_parish62 = $o_parish->num_rows();
		$all_district62 = $o_district->num_rows();
		$all_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_ubi_swine
												FROM  otop_ubi
												WHERE o_ubi_parish = '$value[o_ubi_parish]' AND o_ubi_row_budget != '$year'
			")->num_rows();
			$all_moo62 += $rows_parish;
		}


		$o_parish = $this->db->query(" SELECT DISTINCT o_ubi_parish
										FROM  otop_ubi
										WHERE otop_ubi.o_ubi_row_budget != '$year'AND otop_ubi.o_ubi_province = '74'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_ubi_district
										FROM  otop_ubi
										WHERE otop_ubi.o_ubi_row_budget != '$year'AND otop_ubi.o_ubi_province = '74'
									  ");
		$pat_parish62 = $o_parish->num_rows();
		$pat_district62 = $o_district->num_rows();
		$pat_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_ubi_swine
												FROM  otop_ubi
												WHERE o_ubi_parish = '$value[o_ubi_parish]' AND o_ubi_row_budget != '$year'
			")->num_rows();
			$pat_moo62 += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT o_ubi_parish
										FROM  otop_ubi
										WHERE otop_ubi.o_ubi_row_budget != '$year'AND otop_ubi.o_ubi_province = '75'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_ubi_district
										FROM  otop_ubi
										WHERE otop_ubi.o_ubi_row_budget != '$year'AND otop_ubi.o_ubi_province = '75'
									  ");
		$yala_parish62 = $o_parish->num_rows();
		$yala_district62 = $o_district->num_rows();
		$yala_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_ubi_swine
												FROM  otop_ubi
												WHERE o_ubi_parish = '$value[o_ubi_parish]' AND o_ubi_row_budget != '$year'
			")->num_rows();
			$yala_moo62 += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT o_ubi_parish
										FROM  otop_ubi
										WHERE otop_ubi.o_ubi_row_budget != '$year'AND otop_ubi.o_ubi_province = '76'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_ubi_district
										FROM  otop_ubi
										WHERE otop_ubi.o_ubi_row_budget != '$year'AND otop_ubi.o_ubi_province = '76'
									  ");
		$nara_parish62 = $o_parish->num_rows();
		$nara_district62 = $o_district->num_rows();
		$nara_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_ubi_swine
												FROM  otop_ubi
												WHERE o_ubi_parish = '$value[o_ubi_parish]' AND o_ubi_row_budget != '$year'
			")->num_rows();
			$nara_moo62 += $rows_parish;
		}


		$o_parish = $this->db->query(" SELECT DISTINCT o_ubi_parish
										FROM  otop_ubi
									  ");

		$o_district = $this->db->query(" SELECT DISTINCT o_ubi_district
										FROM  otop_ubi
									  ");
		$all_parish = $o_parish->num_rows();
		$all_district = $o_district->num_rows();
		$all_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_ubi_swine
												FROM  otop_ubi
												WHERE o_ubi_parish = '$value[o_ubi_parish]'
			")->num_rows();
			$all_moo += $rows_parish;
		}


		$o_parish = $this->db->query(" SELECT DISTINCT o_ubi_parish
										FROM  otop_ubi
										WHERE otop_ubi.o_ubi_province = '74'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_ubi_district
										FROM  otop_ubi
										WHERE otop_ubi.o_ubi_province = '74'
									  ");
		$pat_parish = $o_parish->num_rows();
		$pat_district = $o_district->num_rows();
		$pat_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_ubi_swine
												FROM  otop_ubi
												WHERE o_ubi_parish = '$value[o_ubi_parish]'
			")->num_rows();
			$pat_moo += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT o_ubi_parish
										FROM  otop_ubi
										WHERE otop_ubi.o_ubi_province = '75'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_ubi_district
										FROM  otop_ubi
										WHERE otop_ubi.o_ubi_province = '75'
									  ");
		$yala_parish = $o_parish->num_rows();
		$yala_district = $o_district->num_rows();
		$yala_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_ubi_swine
												FROM  otop_ubi
												WHERE o_ubi_parish = '$value[o_ubi_parish]'
			")->num_rows();
			$yala_moo += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT o_ubi_parish
										FROM  otop_ubi
										WHERE otop_ubi.o_ubi_province = '76'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_ubi_district
										FROM  otop_ubi
										WHERE otop_ubi.o_ubi_province = '76'
									  ");
		$nara_parish = $o_parish->num_rows();
		$nara_district = $o_district->num_rows();
		$nara_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_ubi_swine
												FROM  otop_ubi
												WHERE o_ubi_parish = '$value[o_ubi_parish]'
			")->num_rows();
			$nara_moo += $rows_parish;
		}


		$quer_code = $this->db->query(" SELECT *
										FROM  otop_ubi
										LEFT JOIN provinces ON provinces.pro_id = otop_ubi.o_ubi_province
										LEFT JOIN otop_ubi_activity ON otop_ubi_activity.o_ubi_ac_id = otop_ubi.o_ubi_occupation
										WHERE otop_ubi.o_ubi_row_budget = '$year' ORDER BY o_ubi_id DESC
									  ");
		$all_num63 = $quer_code->num_rows();
		$year63 = $year;
		$all_men63 = 0;
		$all_women63 = 0;
		foreach ($quer_code->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			if ($rs["o_ubi_title"] == "นาย") {
	          $all_men63 = $all_men63+1;
	        }else{
	          $all_women63 = $all_women63+1;
	        }
		}

		$pat_num63 = 0;
		$pat_men63 = 0;
		$pat_women63 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_ubi_province"] == "74") {
				$pat_num63 = $pat_num63+1;
				if ($rs["o_ubi_title"] == "นาย") {
		          $pat_men63 = $pat_men63+1;
		        }else{
		          $pat_women63 = $pat_women63+1;
		        }
		    }
		}

		$nara_num63 = 0;
		$nara_men63 = 0;
		$nara_women63 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_ubi_province"] == "76") {
				$nara_num63 = $nara_num63+1;
				if ($rs["o_ubi_title"] == "นาย") {
		          $nara_men63 = $nara_men63+1;
		        }else{
		          $nara_women63 = $nara_women63+1;
		        }
		    }
		}

		$yala_num63 = 0;
		$yala_men63 = 0;
		$yala_women63 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_ubi_province"] == "75") {
				$yala_num63 = $yala_num63+1;
				if ($rs["o_ubi_title"] == "นาย") {
		          $yala_men63 = $yala_men63+1;
		        }else{
		          $yala_women63 = $yala_women63+1;
		        }
		    }
		}

		

		$quer_code = $this->db->query(" SELECT *
										FROM  otop_ubi
										LEFT JOIN provinces ON provinces.pro_id = otop_ubi.o_ubi_province
										LEFT JOIN otop_ubi_activity ON otop_ubi_activity.o_ubi_ac_id = otop_ubi.o_ubi_occupation
										WHERE otop_ubi.o_ubi_row_budget != '$year' ORDER BY o_ubi_id DESC
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
		foreach ($quer_code->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			if ($rs["o_ubi_title"] == "นาย") {
	          $all_men62 = $all_men62+1;
	        }else{
	          $all_women62 = $all_women62+1;
	        }
		}

		$pat_num62 = 0;
		$pat_men62 = 0;
		$pat_women62 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_ubi_province"] == "74") {
				$pat_num62 = $pat_num62+1;
				if ($rs["o_ubi_title"] == "นาย") {
		          $pat_men62 = $pat_men62+1;
		        }else{
		          $pat_women62 = $pat_women62+1;
		        }
		    }
		}

		$nara_num62 = 0;
		$nara_men62 = 0;
		$nara_women62 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_ubi_province"] == "76") {
				$nara_num62 = $nara_num62+1;
				if ($rs["o_ubi_title"] == "นาย") {
		          $nara_men62 = $nara_men62+1;
		        }else{
		          $nara_women62 = $nara_women62+1;
		        }
		    }
		}

		$yala_num62 = 0;
		$yala_men62 = 0;
		$yala_women62 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_ubi_province"] == "75") {
				$yala_num62 = $yala_num62+1;
				if ($rs["o_ubi_title"] == "นาย") {
		          $yala_men62 = $yala_men62+1;
		        }else{
		          $yala_women62 = $yala_women62+1;
		        }
		    }
		}

		$quer_code = $this->db->query(" SELECT *
										FROM  otop_ubi
										LEFT JOIN provinces ON provinces.pro_id = otop_ubi.o_ubi_province
										LEFT JOIN otop_ubi_activity ON otop_ubi_activity.o_ubi_ac_id = otop_ubi.o_ubi_occupation
									  ");

		$all_num = $quer_code->num_rows();
		$all_men = 0;
		$all_women = 0;
		foreach ($quer_code->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			if ($rs["o_ubi_title"] == "นาย") {
	          $all_men = $all_men+1;
	        }else{
	          $all_women = $all_women+1;
	        }
		}

		$pat_num = 0;
		$pat_men = 0;
		$pat_women = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_ubi_province"] == "74") {
				$pat_num = $pat_num+1;
				if ($rs["o_ubi_title"] == "นาย") {
		          $pat_men = $pat_men+1;
		        }else{
		          $pat_women = $pat_women+1;
		        }
		    }
		}

		$nara_num = 0;
		$nara_men = 0;
		$nara_women = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_ubi_province"] == "76") {
				$nara_num = $nara_num+1;
				if ($rs["o_ubi_title"] == "นาย") {
		          $nara_men = $nara_men+1;
		        }else{
		          $nara_women = $nara_women+1;
		        }
		    }
		}

		$yala_num = 0;
		$yala_men = 0;
		$yala_women = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_ubi_province"] == "75") {
				$yala_num = $yala_num+1;
				if ($rs["o_ubi_title"] == "นาย") {
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