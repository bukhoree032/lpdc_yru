<?php  
class Onet_m extends CI_Model {
	
	public function onet()
	{	
		$check = "0";
		if ($this->session->userdata('onet_search_pro')) {
			$check = "1";
		}else if ($this->session->userdata('onet_search_year')) {
			$check = "1";
		}

		if ($check != "1") {
			$query_id = $this->db->query("SELECT on_row_budget 
										FROM onet
										ORDER BY on_row_budget DESC LIMIT 1");
			$numrow = $query_id->num_rows();

			if ($numrow) {
				foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
					$year = $rs["on_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
				}
			}else{
				$year = "";
			}

			$quer_code = $this->db->query(" SELECT *
											FROM  onet
											LEFT JOIN provinces ON provinces.pro_id = onet.on_province
											WHERE onet.on_row_budget = '$year' ORDER BY on_id DESC
										  ");
			return $quer_code->result();
		}else{
			$on_row_budget = $this->session->userdata('onet_search_year');
			$pro = $this->session->userdata('onet_search_pro');

			if ($on_row_budget == '') {
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
											FROM  onet
											LEFT JOIN provinces ON provinces.pro_id = onet.on_province
											WHERE onet.on_row_budget $year '$on_row_budget' AND  onet.on_province $pro1 '$pro' ORDER BY on_id DESC
										  ");
			return $quer_code->result();
		}
	}

	public function o_id($o_id)
	{	
		return $o_id;
	}

	public function onet_search() //ลบ
	{	
		$on_row_budget = $this->input->post('s_year');
		$pro = $this->input->post('s_pro');

		$this->session->set_userdata("onet_search_year",$on_row_budget);
		$this->session->set_userdata("onet_search_pro",$pro);

		if ($on_row_budget == '') {
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
										FROM  onet
										LEFT JOIN provinces ON provinces.pro_id = onet.on_province
										WHERE onet.on_row_budget $year '$on_row_budget' AND  onet.on_province $pro1 '$pro' ORDER BY on_id DESC
									  ");
		return $quer_code->result();
	}	

	public function onet_year()
	{ 	
		$query_id = $this->db->query("	SELECT on_row_budget 
										FROM onet 
										ORDER BY on_row_budget DESC LIMIT 1");
		$cal = $query_id->result() ;

		$quer_year = $this->db->query(" SELECT DISTINCT `on_row_budget` 
										FROM `onet`
									  ");
		$year = $quer_year->result() ;

		$data = array(
					   'cal' => $cal,
					   'year' => $year,
					 );
		return $data;
	}

	public function on_dashboard()
	{ 	
		$query_id = $this->db->query("SELECT on_row_budget 
									  FROM onet 
								 	  ORDER BY on_row_budget DESC LIMIT 1");
		$numrow = $query_id->num_rows();

		if ($numrow) {
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$year = $rs["on_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
			}
		}else{
			$year = "";
		}

		$quer_code = $this->db->query(" SELECT *
											FROM  onet
											LEFT JOIN provinces ON provinces.pro_id = onet.on_province
											WHERE onet.on_row_budget = '$year'
										  ");
		// return $quer_code->result();
		$all_num63 = $quer_code->num_rows();
		$year63 = $year;

		$pat_num63 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["on_province"] == "74") {
				$pat_num63 = $pat_num63+1;
		    }
		}

		$nara_num63 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["on_province"] == "76") {
				$nara_num63 = $nara_num63+1;
		    }
		}

		$yala_num63 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["on_province"] == "75") {
				$yala_num63 = $yala_num63+1;
		    }
		}

		$quer_code = $this->db->query(" SELECT *
										FROM  onet
										LEFT JOIN provinces ON provinces.pro_id = onet.on_province
										WHERE onet.on_continue != '1'
									  ");

		$all_num = $quer_code->num_rows();

		$pat_num = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["on_province"] == "74") {
				$pat_num = $pat_num+1;
		    }
		}

		$nara_num = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["on_province"] == "76") {
				$nara_num = $nara_num+1;
		    }
		}

		$yala_num = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["on_province"] == "75") {
				$yala_num = $yala_num+1;
		    }
		}

		$data = array(
					   'year63' => $year63,

					   'all_num' => $all_num,
					   'all_num63' => $all_num63,

					   'yala_num' => $yala_num,
					   'yala_num63' => $yala_num63,

					   'nara_num' => $nara_num,
					   'nara_num63' => $nara_num63,

					   'pat_num' => $pat_num,
					   'pat_num63' => $pat_num63,

					 );
		return $data;
	}

	public function on_parish()
	{ 	
		$query_id = $this->db->query("SELECT on_row_budget 
									  FROM onet 
								 	  ORDER BY on_row_budget DESC LIMIT 1");
		$numrow = $query_id->num_rows();

		if ($numrow) {
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$year = $rs["on_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
			}
		}else{
			$year = "";
		}

		$year63 = $year;

		$on_parish = $this->db->query(" SELECT DISTINCT on_parish
										FROM  onet
										WHERE onet.on_row_budget = '$year'
									  ");
		$on_district = $this->db->query(" SELECT DISTINCT on_district
										FROM  onet
										WHERE onet.on_row_budget = '$year'
									  ");
		$all_parish63 = $on_parish->num_rows();
		$all_district63 = $on_district->num_rows();


		$on_parish = $this->db->query(" SELECT DISTINCT on_parish
										FROM  onet
										WHERE onet.on_row_budget = '$year'AND onet.on_province = '74'
									  ");
		$on_district = $this->db->query(" SELECT DISTINCT on_district
										FROM  onet
										WHERE onet.on_row_budget = '$year' AND onet.on_province = '74'
									  ");
		$pat_parish63 = $on_parish->num_rows();
		$pat_district63 = $on_district->num_rows();

		$on_parish = $this->db->query(" SELECT DISTINCT on_parish
										FROM  onet
										WHERE onet.on_row_budget = '$year'AND onet.on_province = '75'
									  ");
		$on_district = $this->db->query(" SELECT DISTINCT on_district
										FROM  onet
										WHERE onet.on_row_budget = '$year' AND onet.on_province = '75'
									  ");
		$yala_parish63 = $on_parish->num_rows();
		$yala_district63 = $on_district->num_rows();

		$on_parish = $this->db->query(" SELECT DISTINCT on_parish
										FROM  onet
										WHERE onet.on_row_budget = '$year'AND onet.on_province = '76'
									  ");
		$on_district = $this->db->query(" SELECT DISTINCT on_district
										FROM  onet
										WHERE onet.on_row_budget = '$year' AND onet.on_province = '76'
									  ");
		$nara_parish63 = $on_parish->num_rows();
		$nara_district63 = $on_district->num_rows();

		$on_parish = $this->db->query(" SELECT DISTINCT on_parish
										FROM  onet
									  ");
		$on_district = $this->db->query(" SELECT DISTINCT on_district
										FROM  onet
									  ");
		$all_parish = $on_parish->num_rows();
		$all_district = $on_district->num_rows();


		$on_parish = $this->db->query(" SELECT DISTINCT on_parish
										FROM  onet
										WHERE onet.on_province = '74'
									  ");
		$on_district = $this->db->query(" SELECT DISTINCT on_district
										FROM  onet
										WHERE  onet.on_province = '74'
									  ");
		$pat_parish = $on_parish->num_rows();
		$pat_district = $on_district->num_rows();

		$on_parish = $this->db->query(" SELECT DISTINCT on_parish
										FROM  onet
										WHERE onet.on_province = '75'
									  ");
		$on_district = $this->db->query(" SELECT DISTINCT on_district
										FROM  onet
										WHERE  onet.on_province = '75'
									  ");
		$yala_parish = $on_parish->num_rows();
		$yala_district = $on_district->num_rows();

		$on_parish = $this->db->query(" SELECT DISTINCT on_parish
										FROM  onet
										WHERE onet.on_province = '76'
									  ");
		$on_district = $this->db->query(" SELECT DISTINCT on_district
										FROM  onet
										WHERE  onet.on_province = '76'
									  ");
		$nara_parish = $on_parish->num_rows();
		$nara_district = $on_district->num_rows();


		$data = array(
					   'year63' => $year63,

					   'all_parish63' => $all_parish63,
					   'all_district63' => $all_district63,
					   'pat_parish63' => $pat_parish63,
					   'pat_district63' => $pat_district63,
					   'yala_parish63' => $yala_parish63,
					   'yala_district63' => $yala_district63,
					   'nara_parish63' => $nara_parish63,
					   'nara_district63' => $nara_district63,

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