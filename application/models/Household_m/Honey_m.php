<?php
class Honey_m extends CI_Model {

	public function househole($ac_id)
	{	
		$check = "0";
		if ($this->session->userdata('honey_search_pro')) {
			$check = "1";
		}else if ($this->session->userdata('honey_search_year')) {
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

			$quer_code = $this->db->query(" SELECT *
											FROM  household
											LEFT JOIN provinces ON provinces.pro_id = household.h_province
											LEFT JOIN activity ON activity.ac_id = household.h_occupation
											WHERE household.h_row_budget = '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  ORDER BY h_id DESC
										  ");
			return $quer_code->result();
		}else{
			$h_row_budget = $this->session->userdata('honey_search_year');
			$pro = $this->session->userdata('honey_search_pro');

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

			$quer_code = $this->db->query(" SELECT *
											FROM  household
											LEFT JOIN provinces ON provinces.pro_id = household.h_province
											WHERE household.h_row_budget $year '$h_row_budget' AND  household.h_province $pro1 '$pro' AND  household.h_occupation = '$ac_id'  AND household.h_status_past = '1' AND NOT household.h_status_bin = '2' ORDER BY h_id DESC
										  ");
			return $quer_code->result();
		}
	}

	public function ac_id($ac_id)
	{	
		return $ac_id;
	}

	public function honey_search($ac_id) //ลบ
	{	
		$h_row_budget = $this->input->post('s_year');
		$pro = $this->input->post('s_pro');

		$this->session->set_userdata("honey_search_year",$h_row_budget);
		$this->session->set_userdata("honey_search_pro",$pro);

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

		$quer_code = $this->db->query(" SELECT *
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										WHERE household.h_row_budget $year '$h_row_budget' AND  household.h_province $pro1 '$pro' AND  household.h_occupation = '$ac_id'  AND household.h_status_past = '1' AND NOT household.h_status_bin = '2' ORDER BY h_id DESC
									  ");
		return $quer_code->result();
	}

	public function deal($h_id)
	{	
		$household = $this->db->query(" SELECT *
										FROM household
										WHERE h_id = '$h_id' 
									  ");
		// return $household->result();
		$hold = $household->result();

		$honey_share = $this->db->query(" SELECT *
										FROM honey_share
										WHERE h_sh_h_id = '$h_id' 
									  ");
		// return $quer_code->result();
		$honey = $honey_share->result();
		
		$honey_trace = $this->db->query(" SELECT h_tr_row
										FROM honey_trace 
										ORDER BY h_tr_row DESC LIMIT 1
									  ");
		// return $quer_code->result();
		$trace_row = $honey_trace->result();

		$honey_trace = $this->db->query(" SELECT *
										FROM honey_trace 
										LEFT JOIN honey_share ON honey_share.h_sh_id = honey_trace.h_tr_sh_id
										WHERE honey_trace.h_tr_h_id = '$h_id' AND honey_share.h_sh_h_id = '$h_id'
									  ");
		// return $quer_code->result();
		$trace = $honey_trace->result();

		$data = array(
					   'hold' => $hold,
					   'honey' => $honey,
					   'trace' => $trace,
					   'trace_row' => $trace_row,
					 );
		return $data;
	}

	public function deal_search($h_id)
	{	
		$deal = $this->input->post('deal');

		$household = $this->db->query(" SELECT *
										FROM household
										WHERE h_id = '$h_id' 
									  ");
		// return $household->result();
		$hold = $household->result();

		$honey_share = $this->db->query(" SELECT *
										FROM honey_share
										WHERE h_sh_h_id = '$h_id' 
									  ");
		// return $quer_code->result();
		$honey = $honey_share->result();

		$honey_share = $this->db->query(" SELECT *
										FROM honey_share
										WHERE h_sh_h_id = '$h_id' 
									  ");
		// return $quer_code->result();
		$honey = $honey_share->result();

		$honey_trace = $this->db->query(" SELECT *
										FROM honey_share 
										LEFT JOIN honey_trace ON honey_trace.h_tr_sh_id = honey_share.h_sh_id
										WHERE h_sh_h_id = '$h_id' 
									  ");

		$honey_trace = $this->db->query(" SELECT *
										FROM honey_trace 
										LEFT JOIN honey_share ON honey_share.h_sh_id = honey_trace.h_tr_sh_id
										WHERE honey_share.h_sh_h_id = '$h_id' AND honey_trace.h_tr_h_id = '$h_id' AND honey_trace.h_tr_sh_id = '$deal'
									  ");
		// return $quer_code->result();
		$trace = $honey_trace->result();

		$data = array(
					   'hold' => $hold,
					   'honey' => $honey,
					   'trace' => $trace,
					 );
		return $data;
	}

	public function trace_row($h_id)
	{	
		$query_id = $this->db->query("SELECT * 
									FROM honey_share 
									WHERE h_sh_h_id = '$h_id'
									ORDER BY h_sh_id DESC LIMIT 1
									");
		$numrow = $query_id->num_rows();
		if ($numrow == "0") {
			$cal = "1";
			$cal1 = "1";
		}else{ 
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$cal = $rs["h_sh_id"]; //ตรงนี้เราจะได้ค่า CP18100
				$cal1 = $rs["h_sh_id"]; //ตรงนี้เราจะได้ค่า CP18100
			}
			$cal ++;
		}
		
		if ($numrow >= "0") {
			$query_trace = $this->db->query("SELECT * 
										FROM honey_trace
										WHERE h_tr_h_id = '$h_id' AND h_tr_sh_id = '$cal1'
										ORDER BY h_tr_row DESC LIMIT 1
										");
			$numrow_trace = $query_trace->num_rows();
			if ($numrow_trace == "0") {
				$cal_trace = "1";
			}else{ 
				foreach ($query_trace->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
					$cal_trace = $rs["h_tr_row"]; //ตรงนี้เราจะได้ค่า CP18100
				}
				$cal_trace ++;
			}


			$data = array(
						   'cal' => $cal,
						   'trace' => $cal_trace,
						   // 'trace' => $trace,
						 );
			return $data;
			// return $numrow_trace;
		}else{
			return "false";
		}
	}
	

	public function honey_insert($h_id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		// $query_id = $this->db->query("SELECT *
		// 							  FROM honey_share 
		// 							  WHERE h_sh_h_id = '$h_id' 
		// 							  ORDER BY h_sh_id DESC LIMIT 1");
		// $numrow = $query_id->num_rows();
		
		// if ($numrow == '0') {
		// 	$cal = "1";
		// }else{
		// 	foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
		// 		$h_sh_id = $rs["h_sh_id"]; //ตรงนี้เราจะได้ค่า CP18100
		// 	}
		// 	$h_sh_id ++;
		// 	$cal = $h_sh_id;
		// }

		$data = array(
					  'h_sh_id' => $this->input->post('deal'),
					  'h_sh_h_id' => $h_id,
					  'h_sh_gobbet' => $this->input->post('gender'),
					  'h_sh_empty' => $this->input->post('empty'),
					  'h_sh_annotation' => $this->input->post('annotation'),
					  'h_sh_date' => $date_time,
					);
		$this->db->insert('honey_share',$data);

		return $data;
	}

	public function honey_edit($id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		$data = array(
					  'h_sh_gobbet' => $this->input->post('gender'),
					  'h_sh_empty' => $this->input->post('empty'),
					  'h_sh_annotation' => $this->input->post('annotation'),
					  'h_sh_date_up' => $date_time,
					);

		$this->db->where('id',$id);
		$this->db->update('honey_share',$data);
	}

	public function honey_delet($id)
	{
		$this->db->where('id',$id);
        $this->db->delete('honey_share');
	}

	public function honey_tr_delet($id)
	{
		$this->db->where('h_tr_id',$id);
        $this->db->delete('honey_trace');
	}

	public function honey_by_delet($id)
	{
		$this->db->where('h_shop_id',$id);
        $this->db->delete('honey_shop');
	}

	public function trace_insert($h_id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		$data = array(
					  'h_tr_h_id' => $h_id,
					  'h_tr_sh_id' => $this->input->post('deal'),
					  'h_tr_row' => $this->input->post('trace'),
					  'h_tr_suplus' => $this->input->post('suplus'),
					  'h_tr_up' => $this->input->post('up'),
					  'h_tr_annotition' => $this->input->post('annotation'),
					  'h_tr_date' => $date_time,
					);
		$this->db->insert('honey_trace',$data);
	}

	public function trace_edit($h_id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		$id = $this->input->post('id');

		$data = array(
					  'h_tr_h_id' => $h_id,
					  'h_tr_sh_id' => $this->input->post('deal'),
					  'h_tr_row' => $this->input->post('trace'),
					  'h_tr_suplus' => $this->input->post('suplus'),
					  'h_tr_up' => $this->input->post('up'),
					  'h_tr_annotition' => $this->input->post('annotation'),
					  'h_tr_date' => $date_time,
					);

		$this->db->where('h_tr_id',$id);
		$this->db->update('honey_trace',$data);
	}
	
	public function trace_dtail($h_id)
	{	

		$trace1 = $this->input->post('trace');
		$trace_s = $this->input->post('trace_s');
		$deal1 = $this->input->post('deal');

		$household = $this->db->query(" SELECT *
										FROM household
										WHERE h_id = '$h_id' 
									  ");
		// return $household->result();
		$hold = $household->result();

		$honey_share = $this->db->query(" SELECT *
										FROM honey_share
										WHERE h_sh_h_id = '$h_id' AND h_sh_id = '$deal1'
									  ");
		// return $quer_code->result();
		$honey = $honey_share->result();
		
		$honey_trace = $this->db->query(" SELECT h_tr_row
										FROM honey_trace 
										ORDER BY h_tr_row DESC LIMIT 1
									  ");
		// return $quer_code->result();
		$trace_row = $honey_trace->result();

		$honey_trace = $this->db->query(" SELECT *
										FROM honey_trace
										WHERE h_tr_id = '$trace1' 
									  ");
		// return $quer_code->result();
		$trace = $honey_trace->result();

		$honey_shop = $this->db->query(" SELECT *
										FROM  honey_shop
										WHERE h_shop_h_id = '$h_id' AND h_shop_sh_id = '$deal1' AND h_shop_tr_id = '$trace_s'
										");
		$shop = $honey_shop->result();


		$data = array(
					   'hold' => $hold,
					   'honey' => $honey,
					   'trace' => $trace,
					   'trace_row' => $trace_row,
					   'shop' => $shop,
					 );
		return $data;
	}

	public function shop_insert($h_id)
	{	
		$time = $this->input->post('time');
		if ($time) {
			$date_time = $time;
		}else{
			$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		}

		$data = array(
					  'h_shop_h_id' => $h_id,
					  'h_shop_sh_id' => $this->input->post('sh_row'),
					  'h_shop_tr_id' => $this->input->post('tr_row'),
					  'h_shop_keep' => $this->input->post('keep'),
					  'h_shop_period' => $this->input->post('period'),
					  'h_shop_honey' => $this->input->post('CC'),
					  'h_shop_buy' => $this->input->post('price'),
					  'h_shop_annotition' => $this->input->post('annotation'),
					  'h_shop_date' => $date_time,
					);
		$this->db->insert('honey_shop',$data);
	}
	
	public function shop_edit($h_id)
	{	
		$time = $this->input->post('time');
		if ($time) {
			$date_time = $time;
		}else{
			$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		}

		$data = array(
					  'h_shop_sh_id' => $this->input->post('sh_row'),
					  'h_shop_tr_id' => $this->input->post('tr_row'),
					  'h_shop_keep' => $this->input->post('keep'),
					  'h_shop_period' => $this->input->post('period'),
					  'h_shop_honey' => $this->input->post('CC'),
					  'h_shop_buy' => $this->input->post('price'),
					  'h_shop_annotition' => $this->input->post('annotation'),
					  'h_shop_date_up' => $date_time,
					);
		$this->db->insert('honey_shop',$data);
	}

	public function shop_update($id)
	{	
		$time = $this->input->post('time');
		if ($time) {
			$date_time = $time;
		}else{
			$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		}

		$data = array(
					  'h_shop_sh_id' => $this->input->post('deal'),
					  'h_shop_tr_id' => $this->input->post('trace'),
					  'h_shop_keep' => $this->input->post('keep'),
					  'h_shop_period' => $this->input->post('period'),
					  'h_shop_honey' => $this->input->post('CC'),
					  'h_shop_buy' => $this->input->post('price'),
					  'h_shop_annotition' => $this->input->post('annotation'),
					  'h_shop_date_up' => $date_time,
					);

		$this->db->where('h_shop_id',$id);
		$this->db->update('honey_shop',$data);
		// $this->db->insert('honey_shop',$data);
	}

	public function shop_honey($h_id)
	{	

		$quer_code = $this->db->query(" SELECT *
										FROM  honey_shop
										WHERE h_shop_h_id = '$h_id' 
									  ");
		return $quer_code->result();
	}

	public function hold_dashboard($ac_id)
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

		

		$quer_code = $this->db->query(" SELECT h_title,h_province
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE household.h_row_budget = '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  ORDER BY h_id DESC
									  ");
		// return $quer_code->result();
		$all_num63 = $quer_code->num_rows();
		$year63 = $year;
		$all_men63 = 0;
		$all_women63 = 0;
		foreach ($quer_code->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			if ($rs["h_title"] == "นาย") {
	          $all_men63 = $all_men63+1;
	        }else{
	          $all_women63 = $all_women63+1;
	        }
		}

		$pat_num63 = 0;
		$pat_men63 = 0;
		$pat_women63 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["h_province"] == "74") {
				$pat_num63 = $pat_num63+1;
				if ($rs["h_title"] == "นาย") {
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
			if ($rs["h_province"] == "76") {
				$nara_num63 = $nara_num63+1;
				if ($rs["h_title"] == "นาย") {
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
			if ($rs["h_province"] == "75") {
				$yala_num63 = $yala_num63+1;
				if ($rs["h_title"] == "นาย") {
		          $yala_men63 = $yala_men63+1;
		        }else{
		          $yala_women63 = $yala_women63+1;
		        }
		    }
		}

		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE household.h_row_budget != '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE household.h_row_budget != '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'
									  ");
		$all_parish62 = $o_parish->num_rows();
		$all_district62 = $o_district->num_rows();
		$all_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]' AND h_row_budget != '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'
			")->num_rows();
			$all_moo62 += $rows_parish;
		}


		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE household.h_row_budget != '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  AND household.h_province = '74'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE household.h_row_budget != '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  AND  household.h_province = '74'
									  ");
		$pat_parish62 = $o_parish->num_rows();
		$pat_district62 = $o_district->num_rows();
		$pat_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]' AND h_row_budget != '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'
			")->num_rows();
			$pat_moo62 += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE household.h_row_budget != '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  AND household.h_province = '75'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE household.h_row_budget != '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  AND household.h_province = '75'
									  ");
		$yala_parish62 = $o_parish->num_rows();
		$yala_district62 = $o_district->num_rows();
		$yala_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]' AND h_row_budget != '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'
			")->num_rows();
			$yala_moo62 += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE household.h_row_budget != '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  AND household.h_province = '76'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE household.h_row_budget != '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id' AND household.h_province = '76'
									  ");
		$nara_parish62 = $o_parish->num_rows();
		$nara_district62 = $o_district->num_rows();
		$nara_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]' AND h_row_budget != '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'
			")->num_rows();
			$nara_moo62 += $rows_parish;
		}

		$quer_code = $this->db->query(" SELECT h_title,h_province
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE household.h_row_budget != '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  ORDER BY h_id DESC
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
			if ($rs["h_title"] == "นาย") {
	          $all_men62 = $all_men62+1;
	        }else{
	          $all_women62 = $all_women62+1;
	        }
		}

		$pat_num62 = 0;
		$pat_men62 = 0;
		$pat_women62 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["h_province"] == "74") {
				$pat_num62 = $pat_num62+1;
				if ($rs["h_title"] == "นาย") {
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
			if ($rs["h_province"] == "76") {
				$nara_num62 = $nara_num62+1;
				if ($rs["h_title"] == "นาย") {
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
			if ($rs["h_province"] == "75") {
				$yala_num62 = $yala_num62+1;
				if ($rs["h_title"] == "นาย") {
		          $yala_men62 = $yala_men62+1;
		        }else{
		          $yala_women62 = $yala_women62+1;
		        }
		    }
		}

		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'
									  ");
		$all_parish = $o_parish->num_rows();
		$all_district = $o_district->num_rows();
		$all_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'
			")->num_rows();
			$all_moo += $rows_parish;
		}


		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  AND household.h_province = '74'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  AND  household.h_province = '74'
									  ");
		$pat_parish = $o_parish->num_rows();
		$pat_district = $o_district->num_rows();
		$pat_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'
			")->num_rows();
			$pat_moo += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  AND household.h_province = '75'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  AND household.h_province = '75'
									  ");
		$yala_parish = $o_parish->num_rows();
		$yala_district = $o_district->num_rows();
		$yala_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'
			")->num_rows();
			$yala_moo += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT h_parish
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  AND household.h_province = '76'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT h_district
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id' AND household.h_province = '76'
									  ");
		$nara_parish = $o_parish->num_rows();
		$nara_district = $o_district->num_rows();
		$nara_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT h_swine
												FROM  household
												WHERE h_parish = '$value[h_parish]' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'
			")->num_rows();
			$nara_moo += $rows_parish;
		}

		$quer_code = $this->db->query(" SELECT h_title,h_province
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  ORDER BY h_id DESC
									  ");

		$all_num = $quer_code->num_rows();
		$all_men = 0;
		$all_women = 0;
		foreach ($quer_code->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			if ($rs["h_title"] == "นาย") {
	          $all_men = $all_men+1;
	        }else{
	          $all_women = $all_women+1;
	        }
		}

		$pat_num = 0;
		$pat_men = 0;
		$pat_women = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["h_province"] == "74") {
				$pat_num = $pat_num+1;
				if ($rs["h_title"] == "นาย") {
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
			if ($rs["h_province"] == "76") {
				$nara_num = $nara_num+1;
				if ($rs["h_title"] == "นาย") {
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
			if ($rs["h_province"] == "75") {
				$yala_num = $yala_num+1;
				if ($rs["h_title"] == "นาย") {
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