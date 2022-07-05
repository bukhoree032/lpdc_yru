<?php
class Chicken_m extends CI_Model {

	public function househole($ac_id)
	{	
		$check = "0";
		if ($this->session->userdata('chicken_search_pro')) {
			$check = "1";
		}else if ($this->session->userdata('chicken_search_year')) {
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
											LEFT JOIN chicken_share ON chicken_share.c_sh_h_id = household.h_id
											WHERE household.h_row_budget = '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  ORDER BY h_id DESC
										  ");
			return $quer_code->result();
		}else{
			$h_row_budget = $this->session->userdata('chicken_search_year');
			$pro = $this->session->userdata('chicken_search_pro');

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
											LEFT JOIN chicken_share ON chicken_share.c_sh_h_id = household.h_id
											WHERE household.h_row_budget $year '$h_row_budget' AND  household.h_province $pro1 '$pro' AND  household.h_occupation = '$ac_id' AND household.h_status_past = '1' AND NOT household.h_status_bin = '2' ORDER BY h_id DESC
										  ");
			return $quer_code->result();
		}
	}

	public function ac_id($ac_id)
	{	
		return $ac_id;
	}

	public function chicken_search($ac_id) //ลบ
	{	
		$h_row_budget = $this->input->post('s_year');
		$pro = $this->input->post('s_pro');

		$this->session->set_userdata("chicken_search_year",$h_row_budget);
		$this->session->set_userdata("chicken_search_pro",$pro);

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
										LEFT JOIN chicken_share ON chicken_share.c_sh_h_id = household.h_id
										WHERE household.h_row_budget $year '$h_row_budget' AND  household.h_province $pro1 '$pro' AND  household.h_occupation = '$ac_id' AND household.h_status_past = '1' AND NOT household.h_status_bin = '2' ORDER BY h_id DESC
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

		$chicken_share = $this->db->query(" SELECT *
										FROM chicken_share
										WHERE c_sh_h_id = '$h_id' 
									  ");
		// return $quer_code->result();
		$honey = $chicken_share->result();
		
		$chicken_trace = $this->db->query(" SELECT c_tr_row
										FROM chicken_trace 
										ORDER BY c_tr_row DESC LIMIT 1
									  ");
		// return $quer_code->result();
		$trace_row = $chicken_trace->result();

		$chicken_trace = $this->db->query(" SELECT *
										FROM chicken_trace 
										LEFT JOIN chicken_share ON chicken_share.c_sh_id = chicken_trace.c_tr_sh_id
										WHERE chicken_trace.c_tr_h_id = '$h_id' AND chicken_share.c_sh_h_id = '$h_id'
									  ");
		// return $quer_code->result();
		$trace = $chicken_trace->result();

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

		$chicken_share = $this->db->query(" SELECT *
										FROM chicken_share
										WHERE c_sh_h_id = '$h_id' 
									  ");
		// return $quer_code->result();
		$honey = $chicken_share->result();

		$honey_trace = $this->db->query(" SELECT *
										FROM chicken_trace 
										LEFT JOIN chicken_share ON chicken_share.c_sh_id = chicken_trace.c_tr_sh_id
										WHERE chicken_share.c_sh_h_id = '$h_id' AND chicken_trace.c_tr_h_id = '$h_id' AND chicken_trace.c_tr_sh_id = '$deal'
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
									FROM chicken_share 
									WHERE c_sh_h_id = '$h_id'
									ORDER BY c_sh_id DESC LIMIT 1
									");
		$numrow = $query_id->num_rows();
		if ($numrow == "0") {
			$cal = "1";
			$cal1 = "1";
		}else{ 
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$cal = $rs["c_sh_id"]; //ตรงนี้เราจะได้ค่า CP18100
				$cal1 = $rs["c_sh_id"]; //ตรงนี้เราจะได้ค่า CP18100
			}
			$cal ++;
		}
		
		if ($numrow >= "0") {
			$query_trace = $this->db->query("SELECT * 
										FROM chicken_trace
										WHERE c_tr_h_id = '$h_id' AND c_tr_sh_id = '$cal1'
										ORDER BY c_tr_row DESC LIMIT 1
										");
			$numrow_trace = $query_trace->num_rows();
			if ($numrow_trace == "0") {
				$cal_trace = "1";
			}else{ 
				foreach ($query_trace->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
					$cal_trace = $rs["c_tr_row"]; //ตรงนี้เราจะได้ค่า CP18100
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

	public function chicken_insert($h_id)
	{
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		$data = array(
					  'c_sh_h_id' => $h_id,
					  'c_sh_id' => $this->input->post('deal'),
					  'c_sh_gobbet' => $this->input->post('gobbet'),
					  'c_sh_food' => $this->input->post('kk'),
					  'c_sh_stall' => $this->input->post('stall'),
					  'c_sh_annotation' => $this->input->post('annotation'),
					  'c_sh_date' => $date_time,
					);
		$this->db->insert('chicken_share',$data);

		return $data;
	}

	public function chicken_edit($h_id)
	{
		$date_time1 = date("d/m/Y");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		$id = $this->input->post('id_deal');

		$data = array(
					  'c_sh_id' => $this->input->post('deal'),
					  'c_sh_gobbet' => $this->input->post('gobbet'),
					  'c_sh_food' => $this->input->post('kk'),
					  'c_sh_stall' => $this->input->post('stall'),
					  'c_sh_annotation' => $this->input->post('annotation'),
					  'c_sh_date_up' => $date_time1,
					);
		
		$this->db->where('c_id',$id);
		$this->db->update('chicken_share',$data);

		return $data;
	}

	public function honey_edit($id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		$data = array(
					  'h_sh_gobbet' => $this->input->post('gender'),
					  'h_sh_annotation' => $this->input->post('annotation'),
					  'h_sh_date_up' => $date_time,
					);

		$this->db->where('id',$id);
		$this->db->update('honey_share',$data);

	}

	public function chicken_delet($id)
	{
		$this->db->where('c_id',$id);
        $this->db->delete('chicken_share');
	}

	public function chicken_tr_delet($id)
	{
		$this->db->where('c_tr_id',$id);
        $this->db->delete('chicken_trace');
	}

	public function trace_insert($h_id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		$data = array(
					  'c_tr_h_id' => $h_id,
					  'c_tr_sh_id' => $this->input->post('deal'),
					  'c_tr_row' => $this->input->post('trace'),
					  'c_tr_gobbet_male' => $this->input->post('gobbet_male'),
					  'c_tr_gobbet_female' => $this->input->post('gobbet_female'),
					  'c_tr_dead_male' => $this->input->post('dead_male'),
					  'c_tr_dead_female' => $this->input->post('dead_female'),
					  'c_tr_annotation' => $this->input->post('annotation'),
					  'c_tr_date' => $date_time,
					);
		$this->db->insert('chicken_trace',$data);
	}

	public function trace_edit($h_id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		$id = $this->input->post('id');

		$data = array(
					  'c_tr_sh_id' => $this->input->post('deal'),
					  'c_tr_row' => $this->input->post('trace'),
					  'c_tr_gobbet_male' => $this->input->post('gobbet_male'),
					  'c_tr_gobbet_female' => $this->input->post('gobbet_female'),
					  'c_tr_dead_male' => $this->input->post('dead_male'),
					  'c_tr_dead_female' => $this->input->post('dead_female'),
					  'c_tr_annotation' => $this->input->post('annotation'),
					  'c_tr_date_up' => $date_time,
					);

		$this->db->where('c_tr_id',$id);
		$this->db->update('chicken_trace',$data);
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

		$chicken_share = $this->db->query(" SELECT *
										FROM chicken_share
										WHERE c_sh_h_id = '$h_id' AND c_sh_id = '$deal1'
									  ");
		// return $quer_code->result();
		$honey = $chicken_share->result();
		
		$chicken_trace = $this->db->query(" SELECT c_tr_row
										FROM chicken_trace
										ORDER BY c_tr_row DESC LIMIT 1
									  ");
		// return $quer_code->result();
		$trace_row = $chicken_trace->result();

		$chicken_trace = $this->db->query(" SELECT *
										FROM chicken_trace
										WHERE c_tr_id = '$trace1' 
									  ");
		// return $quer_code->result();
		$trace = $chicken_trace->result();

		// $honey_shop = $this->db->query(" SELECT *
		// 								FROM  honey_shop
		// 								WHERE h_shop_h_id = '$h_id' AND h_shop_sh_id = '$deal1' AND h_shop_tr_id = '$trace_s'
		// 								");
		// $shop = $honey_shop->result();


		$data = array(
					   'hold' => $hold,
					   'honey' => $honey,
					   'trace' => $trace,
					   'trace_row' => $trace_row,
					   // 'shop' => $shop,
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
					  'c_s_h_id' => $h_id,
					  'c_s_sh_id' => $this->input->post('sh_row'),
					  'c_s_tr_id' => $this->input->post('tr_row'),
					  'c_s_male' => $this->input->post('male'),
					  'c_s_female' => $this->input->post('female'),
					  'c_s_weight' => $this->input->post('weight'),
					  'c_s_buy' => $this->input->post('price'),
					  'c_s_period' => $this->input->post('period'),
					  // 'c_s_buy' => $this->input->post('price'),
					  'c_s_annotition' => $this->input->post('annotation'),
					  'c_s_male_left' => $this->input->post('male_left'),
					  'c_s_female_left' => $this->input->post('female_left'),
					  'c_s_date' => $date_time,
					);
		$this->db->insert('chicken_shop',$data);
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
					  'c_s_sh_id' => $this->input->post('sh_row'),
					  'c_s_tr_id' => $this->input->post('tr_row'),
					  'c_s_male' => $this->input->post('male'),
					  'c_s_female' => $this->input->post('female'),
					  'c_s_weight' => $this->input->post('weight'),
					  'c_s_buy' => $this->input->post('price'),
					  'c_s_period' => $this->input->post('period'),
					  // 'c_s_buy' => $this->input->post('price'),
					  'c_s_annotition' => $this->input->post('annotation'),
					  'c_s_male_left' => $this->input->post('male_left'),
					  'c_s_female_left' => $this->input->post('female_left'),
					  'c_s_date' => $date_time,
					);
		$this->db->where('c_s_id',$id);
		$this->db->update('chicken_shop',$data);
	}

	public function shop_chicken($h_id)
	{	

		$quer_code = $this->db->query(" SELECT *
										FROM  chicken_shop
										WHERE c_s_h_id = '$h_id' 
									  ");
		return $quer_code->result();
	}

	public function chicken_by_delet($id)
	{
		$this->db->where('c_s_id',$id);
        $this->db->delete('chicken_shop');
	}
}