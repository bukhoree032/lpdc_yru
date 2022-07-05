<?php
class Mushroom_m extends CI_Model {

	public function househole($ac_id)
	{	
		$check = "0";
		if ($this->session->userdata('mushroom_search_pro')) {
			$check = "1";
		}else if ($this->session->userdata('mushroom_search_year')) {
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
											LEFT JOIN mushroom_share ON mushroom_share.m_sh_h_id = household.h_id
											WHERE household.h_row_budget = '$year' AND NOT household.h_status_bin = '2'  AND household.h_status_past = '1' AND household.h_occupation = '$ac_id'  ORDER BY h_id DESC
										  ");
			return $quer_code->result();
		}else{
			$h_row_budget = $this->session->userdata('mushroom_search_year');
			$pro = $this->session->userdata('mushroom_search_pro');

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
											LEFT JOIN mushroom_share ON mushroom_share.m_sh_h_id = household.h_id
											WHERE household.h_row_budget $year '$h_row_budget' AND  household.h_province $pro1 '$pro' AND household.h_status_past = '1' AND  household.h_occupation = '$ac_id' AND NOT household.h_status_bin = '2' ORDER BY h_id DESC
										  ");
			return $quer_code->result();

		}

	}

	public function ac_id($ac_id)
	{	
		return $ac_id;
	}

	public function mushroom_search($ac_id) //ลบ
	{	
		$h_row_budget = $this->input->post('s_year');
		$pro = $this->input->post('s_pro');
		
		$this->session->set_userdata("mushroom_search_year",$h_row_budget);
		$this->session->set_userdata("mushroom_search_pro",$pro);

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
										LEFT JOIN mushroom_share ON mushroom_share.m_sh_h_id = household.h_id
										WHERE household.h_row_budget $year '$h_row_budget' AND  household.h_province $pro1 '$pro' AND household.h_status_past = '1' AND  household.h_occupation = '$ac_id' AND NOT household.h_status_bin = '2' ORDER BY h_id DESC
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

		$mushroom_share = $this->db->query(" SELECT *
										FROM mushroom_share
										WHERE m_sh_h_id = '$h_id' 
									  ");
		// return $quer_code->result();
		$honey = $mushroom_share->result();
		
		$mushroom_trace = $this->db->query(" SELECT m_tr_row
										FROM mushroom_trace 
										ORDER BY m_tr_row DESC LIMIT 1
									  ");
		// return $quer_code->result();
		$trace_row = $mushroom_trace->result();

		$mushroom_trace1 = $this->db->query(" SELECT *
										FROM mushroom_trace 
										LEFT JOIN mushroom_share ON mushroom_trace.m_tr_sh_id = mushroom_share.m_sh_id
										WHERE mushroom_trace.m_tr_h_id = '$h_id' OR mushroom_share.m_sh_h_id = '$h_id'
									  ");
		// return $quer_code->result();
		$trace = $mushroom_trace1->result();

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

		$mushroom_share = $this->db->query(" SELECT *
										FROM mushroom_share
										WHERE m_sh_h_id = '$h_id' 
									  ");
		// return $quer_code->result();
		$honey = $mushroom_share->result();

		$mushroom_share = $this->db->query(" SELECT *
										FROM mushroom_share
										WHERE m_sh_h_id = '$h_id' 
									  ");
		// return $quer_code->result();
		$honey = $mushroom_share->result();

		$mushroom_trace = $this->db->query(" SELECT *
										FROM mushroom_share 
										LEFT JOIN mushroom_trace ON mushroom_trace.m_tr_sh_id = mushroom_share.m_sh_id
										WHERE m_sh_h_id = '$h_id' 
									  ");

		$mushroom_trace = $this->db->query(" SELECT *
										FROM mushroom_trace 
										LEFT JOIN mushroom_share ON mushroom_share.m_sh_id = mushroom_trace.m_tr_sh_id
										WHERE mushroom_share.m_sh_h_id = '$h_id' AND mushroom_trace.m_tr_h_id = '$h_id' AND mushroom_trace.m_tr_sh_id = '$deal'
									  ");
		// return $quer_code->result();
		$trace = $mushroom_trace->result();

		$data = array(
					   'hold' => $hold,
					   'honey' => $honey,
					   'trace' => $trace,
					 );
		return $data;
	}

	public function mushroom_delet($id)
	{
		$this->db->where('id',$id);
        $this->db->delete('mushroom_share');
	}

	public function mushroom_tr_delet($id)
	{
		$this->db->where('m_tr_id',$id);
        $this->db->delete('mushroom_trace');
	}
	
	public function trace_row($h_id)
	{	
		$query_id = $this->db->query("SELECT * 
									FROM mushroom_share 
									WHERE m_sh_h_id = '$h_id'
									ORDER BY m_sh_id DESC LIMIT 1
									");
		$numrow = $query_id->num_rows();
		if ($numrow == "0") {
			$cal = "1";
			$cal1 = "1";
		}else{ 
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$cal = $rs["m_sh_id"]; //ตรงนี้เราจะได้ค่า CP18100
				$cal1 = $rs["m_sh_id"]; //ตรงนี้เราจะได้ค่า CP18100
			}
			$cal ++;
		}
		
		if ($numrow >= "0") {
			$query_trace = $this->db->query("SELECT * 
										FROM mushroom_trace
										WHERE m_tr_h_id = '$h_id' AND m_tr_sh_id = '$cal1'
										ORDER BY m_tr_row DESC LIMIT 1
										");
			$numrow_trace = $query_trace->num_rows();
			if ($numrow_trace == "0") {
				$cal_trace = "1";
			}else{ 
				foreach ($query_trace->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
					$cal_trace = $rs["m_tr_row"]; //ตรงนี้เราจะได้ค่า CP18100
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
	

	public function mushroom_insert($h_id)
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
					  'm_sh_id' => $this->input->post('deal'),
					  'm_sh_h_id' => $h_id,
					  'm_sh_gobbet' => $this->input->post('gobbet'),
					  'm_sh_annotation' => $this->input->post('annotation'),
					  'm_sh_date' => $date_time,
					);
		$this->db->insert('mushroom_share',$data);

		return $data;
	}

	public function mushroom_edit($id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		$data = array(
					  'm_sh_id' => $this->input->post('deal'),
					  'm_sh_gobbet' => $this->input->post('gobbet'),
					  'm_sh_annotation' => $this->input->post('annotation'),
					  'm_sh_date_up' => $date_time,
					);

		$this->db->where('id',$id);
		$this->db->update('mushroom_share',$data);

	}

	public function trace_insert($h_id)
	{	
		$date_time = date("d/m/Y");

		$data = array(
					  'm_tr_h_id' => $h_id,
					  'm_tr_sh_id' => $this->input->post('deal'),
					  'm_tr_row' => $this->input->post('trace'),
					  'm_tr_suplus' => $this->input->post('gobbet'),
					  'm_tr_waste' => $this->input->post('waste'),
					  'm_tr_buy' => $this->input->post('buy'),
					  'm_tr_weight' => $this->input->post('weight'),
					  'm_tr_period' => $this->input->post('period'),
					  'm_tr_annotition' => $this->input->post('annotation'),
					  'm_tr_date' => $date_time,
					);
		$this->db->insert('mushroom_trace',$data);
	}

	public function trace_edit($h_id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		$id = $this->input->post('id');

		$data = array(
					  'm_tr_h_id' => $h_id,
					  'm_tr_sh_id' => $this->input->post('deal'),
					  'm_tr_row' => $this->input->post('trace'),
					  'm_tr_suplus' => $this->input->post('gobbet'),
					  'm_tr_waste' => $this->input->post('waste'),
					  'm_tr_buy' => $this->input->post('buy'),
					  'm_tr_weight' => $this->input->post('weight'),
					  'm_tr_period' => $this->input->post('period'),
					  'm_tr_annotition' => $this->input->post('annotation'),
					  'm_tr_date' => $date_time,
					);
		
		$this->db->where('m_tr_id ',$id);
		$this->db->update('mushroom_trace',$data);
	}

	public function shop_mushroom($h_id)
	{	

		$quer_code = $this->db->query(" SELECT *
										FROM  mushroom_trace
										WHERE m_tr_h_id = '$h_id' 
									  ");
		return $quer_code->result();
	}
	
	// public function shop_insert($h_id)
	// {	
	// 	$time = $this->input->post('time');
	// 	if ($time) {
	// 		$date_time = $time;
	// 	}else{
	// 		$date_time = date("Y/m/d");
	// 	}

	// 	$data = array(
	// 				  'h_shop_h_id' => $h_id,
	// 				  'h_shop_tr_id' => $this->input->post('tr_row'),
	// 				  'h_shop_keep' => $this->input->post('keep'),
	// 				  'h_shop_period' => $this->input->post('period'),
	// 				  'h_shop_honey' => $this->input->post('CC'),
	// 				  'h_shop_buy' => $this->input->post('price'),
	// 				  'h_shop_annotition' => $this->input->post('annotation'),
	// 				  'h_shop_date' => $date_time,
	// 				);
	// 	$this->db->insert('honey_shop',$data);
	// }
}