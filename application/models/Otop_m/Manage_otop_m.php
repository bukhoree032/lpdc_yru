<?php  
class Manage_otop_m extends CI_Model {

	public function manage()
	{	
		$check = "0";
		if ($this->session->userdata('otop_search_pro')) {
			$check = "1";
		}else if ($this->session->userdata('otop_search_year')) {
			$check = "1";
		}

		if ($check != "1") {
			$query_id = $this->db->query("SELECT o_row_budget 
										FROM otop 
										ORDER BY o_row_budget DESC LIMIT 1");
			$numrow = $query_id->num_rows();

			if ($numrow) {
				foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
					$year = $rs["o_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
				}
			}else{
				$year = "";
			}

			$quer_code = $this->db->query(" SELECT *
											FROM  otop
											LEFT JOIN provinces ON provinces.pro_id = otop.o_province
											LEFT JOIN otop_segue ON otop_segue.o_s_otop = otop.o_id
											WHERE otop_segue.o_s_row_budget = '$year' ORDER BY o_id DESC
										  ");
			return $quer_code->result();
		}else{
			$o_row_budget = $this->session->userdata('otop_search_year');
			$pro = $this->session->userdata('otop_search_pro');

			if ($o_row_budget == '') {
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
											FROM  otop
											LEFT JOIN provinces ON provinces.pro_id = otop.o_province
											LEFT JOIN otop_segue ON otop_segue.o_s_otop = otop.o_id
											WHERE otop_segue.o_s_row_budget $year '$o_row_budget' AND  otop.o_province $pro1 '$pro' ORDER BY o_id DESC
										  ");
			return $quer_code->result();
		}
	}

	public function otop_search() //ลบ
	{	
		$o_row_budget = $this->input->post('s_year');
		$pro = $this->input->post('s_pro');
		
		$this->session->set_userdata("otop_search_year",$o_row_budget);
		$this->session->set_userdata("otop_search_pro",$pro);

		if ($o_row_budget == '') {
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
										FROM  otop
										LEFT JOIN provinces ON provinces.pro_id = otop.o_province
										LEFT JOIN otop_segue ON otop_segue.o_s_otop = otop.o_id
										WHERE otop_segue.o_s_row_budget $year '$o_row_budget' AND  otop.o_province $pro1 '$pro' ORDER BY o_id DESC
									  ");
		return $quer_code->result();
	}

	public function o_id($o_id)
	{	
		return $o_id;
	}

	public function manage_year()
	{ 	
		$query_id = $this->db->query("	SELECT o_row_budget 
										FROM otop 
										ORDER BY o_row_budget DESC LIMIT 1");
		$cal = $query_id->result() ;

		$quer_year = $this->db->query(" SELECT DISTINCT `o_row_budget` 
										FROM `otop`
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

	public function otop_trace($o_s_id) //ลบ
	{	
		$quer_code = $this->db->query(" SELECT *
										FROM  otop_segue
										LEFT JOIN otop ON otop_segue.o_s_otop = otop.o_id
										LEFT JOIN provinces ON provinces.pro_id = otop.o_province
										WHERE otop_segue.o_s_id = '$o_s_id'
									  ");
		return $quer_code->result();
	}

	public function otop_t_insert($o_s_id) //ลบ
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		$query_id = $this->db->query("  SELECT * 
										FROM otop_segue 
										WHERE otop_segue.o_s_id = '$o_s_id'
									");
		// $row = 1;
		foreach ($query_id->result_array() as $rs) {
			$o_id = $rs["o_s_otop"];
			$year = $rs["o_s_row_budget"];
			// $row ++;
		}

		$data = array(
					  'o_t_id_otop' => $o_id,
					  'o_t_row_budget' => $this->input->post('o_t_row_budget'),
					  'o_t_local_ingre' => $this->input->post('o_t_local_ingre'),
					  'o_t_market_ingre' => $this->input->post('o_t_market_ingre'),
					  'o_t_price_ingre' => $this->input->post('o_t_price_ingre'),
					  'o_t_price_material' => $this->input->post('o_t_price_material'),
					  'o_t_pay' => $this->input->post('o_t_pay'),
					  'o_t_profit' => $this->input->post('o_t_profit'),
					  'o_t_income' => $this->input->post('o_t_income'),
					  'o_t_retail_price' => $this->input->post('o_t_retail_price'),
					  'o_t_send_price' => $this->input->post('o_t_send_price'),
					  'o_t_tar_group' => $this->input->post('o_t_tar_group'),
					  'o_t_local_market' => $this->input->post('o_t_local_market'),
					  'o_t_external_supply' => $this->input->post('o_t_external_supply'),
					  'o_t_pay_online' => $this->input->post('o_t_pay_online'),
					  'o_t_page_name' => $this->input->post('o_t_page_name'),
					  // 'o_t_operation' => $this->input->post('o_t_operation'),
					  'o_t_agency_sub' => $this->input->post('o_t_agency_sub'),
					  'o_t_agency' => $this->input->post('o_t_agency'),
					  'o_t_problem' => $this->input->post('o_t_problem'),
					  'o_t_need' => $this->input->post('o_t_need'),
					  'o_t_date' => $date_time,
					);
		$this->db->insert('otop_trance',$data);

		$data_segue = array(
					  'o_s_otop' => $o_id,
					  'o_s_row_budget' => $this->input->post('o_t_row_budget'),
					  'o_s_status' => "1",
					  'o_s_date' => $date_time,
					);
		$this->db->insert('otop_segue',$data_segue);

		$query_id = $this->db->query("  SELECT * 
										FROM otop_selec_goal 
										WHERE otop_selec_goal.o_s_g_id_otop = '$o_id' AND otop_selec_goal.o_s_g_row_budget = '$year'
									");
		$row = 0;
		foreach ($query_id->result_array() as $rs) {
			$row ++;
			$o_s_g_id  = $rs["o_s_g_id"];
			$status = $this->input->post($o_s_g_id);

			$rate = "o_s_g_annotition".$o_s_g_id;
			$o_s_g_annotition = $this->input->post($rate) ;

			$data_segue = array(
								  'o_s_g_status' => $status,
								  'o_s_g_annotition' => $o_s_g_annotition,
								);
			$this->db->where('o_s_g_id',$o_s_g_id);
			$this->db->update('otop_selec_goal',$data_segue);
		}
	}

	public function location_insert($o_id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		$data = array(
					  'o_latitude' => $this->input->post('lat'),
					  'o_longitude' => $this->input->post('long'),
					);

		$this->db->where('o_id',$o_id);
		$this->db->update('otop',$data);
	}

	public function otop_detail($o_s_id) //ลบ
	{	
		$query_id = $this->db->query("SELECT *
									  FROM otop_segue
									  WHERE otop_segue.o_s_id = '$o_s_id'
									");
		$numrow = $query_id->num_rows();

		if ($numrow) {
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$year = $rs["o_s_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
				$id_otop = $rs["o_s_otop"]; //ตรงนี้เราจะได้ค่า CP18100
			}
		}else{
			$year = "";
		}
		// echo $year;
		$quer_code = $this->db->query(" SELECT *
										FROM  otop_segue
										LEFT JOIN otop ON otop_segue.o_s_otop = otop.o_id
										LEFT JOIN provinces ON otop.o_province = provinces.pro_id 
										LEFT JOIN otop_trance ON otop_trance.o_t_id_otop = otop.o_id AND otop_trance.o_t_row_budget = '$year'
										WHERE otop_segue.o_s_otop = '$id_otop' AND otop_segue.o_s_row_budget = '$year' AND otop_segue.o_s_status = '0'
									  ");
		return $quer_code->result();


		// $quer_code = $this->db->query(" SELECT *
		// 								FROM  otop
		// 								LEFT JOIN provinces ON provinces.pro_id = otop.o_province
		// 								LEFT JOIN otop_segue ON otop_segue.o_s_otop = otop.o_id
		// 								LEFT JOIN otop_trance ON otop_trance.o_t_id_otop = otop.o_id
		// 								WHERE otop_trance.o_t_row_budget = '$year' AND otop_segue.o_s_otop = '$id_otop' AND otop_segue.o_s_row_budget = '$year'
		// 							  ");
		// return $quer_code->result();
	}

	public function otop_detail_trance($o_s_id) //ลบ
	{	
		// $quer_code = $this->db->query(" SELECT *
		// 								FROM  otop_trance



		// 								LEFT JOIN provinces ON provinces.pro_id = otop.o_province
		// 								LEFT JOIN otop_segue ON otop_segue.o_s_otop = otop.o_id
		// 								LEFT JOIN otop_trance ON otop_trance.o_t_id_otop = otop.o_id
		// 								WHERE otop_segue.o_s_id = '$o_s_id' ORDER BY o_id DESC
		// 							  ");
		// return $quer_code->result();
	}

	public function otop_insert()
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		if ($this->input->post('o_monthly_income' != '')) {
			$o_annual_income = $this->input->post('o_monthly_income')*12;
		}else{
			$o_annual_income = $this->input->post('o_monthly_income');
		}

		if ($this->input->post('o_to_monthly_income') != '') {
			$o_to_annual_income = $this->input->post('o_to_monthly_income')*12;
		}else{
			$o_to_annual_income = $this->input->post('o_to_monthly_income');
		}


		$data = array(
					  'o_row_budget' => $this->input->post('o_row_budget'),
					  'o_group_name' => $this->input->post('group_name'),
					  'o_title' => $this->input->post('title'),
					  'o_name' => $this->input->post('name'),
					  'o_surname' => $this->input->post('surname'),
					  'o_tel' => $this->input->post('tel'),
					  'o_house_number' => $this->input->post('o_house_number'),
					  'o_alley' => $this->input->post('o_alley'),
					  'o_street' => $this->input->post('o_street'),
					  'o_swine' => $this->input->post('o_swine'),
					  'o_village' => $this->input->post('o_village'),
					  'o_parish' => $this->input->post('o_parish'),
					  'o_district' => $this->input->post('o_district'),
					  'o_province' => $this->input->post('o_province'),
					  // 'o_operation' => $this->input->post('o_operation'),
					  'o_monthly_income' => $this->input->post('o_monthly_income'),
					  'o_to_monthly_income' => $this->input->post('o_to_monthly_income'),
					  'o_annual_income' => $o_annual_income,
					  'o_to_annual_income' => $o_to_annual_income,
					  'o_date' => $date_time,
					);
		$this->db->insert('otop',$data);

		$query_id = $this->db->query("SELECT o_id 
									FROM otop 
									ORDER BY o_id DESC LIMIT 1");
		foreach ($query_id->result_array() as $rs) { 
			$o_id = $rs["o_id"];
		}

		$data_segue = array(
					  'o_s_row_budget' => $this->input->post('o_row_budget'),
					  'o_s_otop' => $o_id,
					  'o_s_status' => "0",
					  'o_s_date' => $date_time,
					);

		$this->db->insert('otop_segue',$data_segue);

		if ($this->input->post('goal')) {
			for($i=0;$i<count($_POST["goal"]);$i++){
	            if ($_POST["goal"][$i] != ""){
	                $id_goal = $_POST["goal"][$i];
	 
	        		$data_goal = array(
								  'o_s_g_row_budget' => $this->input->post('o_row_budget'),
								  'o_s_g_id_otop' => $o_id,
								  'o_s_g_id_goal' => $id_goal,
								  'o_s_g_status' => "0",
								);

					$this->db->insert('otop_selec_goal',$data_goal);
					// $this->db->where('p_t_id',$id_delet);
					// $this->db->delete('halal_product_type');
	            }
	        }
	    }

		if ($this->input->post('product')) {
	        for($i=0;$i<count($_POST["product"]);$i++){
	            if ($_POST["product"][$i] != ""){
	                $id_product = $_POST["product"][$i];

	        		$data_product = array(
								  'o_s_p_row_budget' => $this->input->post('o_row_budget'),
								  'o_s_p_id_otop' => $o_id,
								  'o_s_p_id_product' => $id_product,
								);

					$this->db->insert('otop_selec_product',$data_product);
	            }
	        }
	    }
	}

	public function otop_edit($o_id)
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  otop
										LEFT JOIN provinces ON provinces.pro_id = otop.o_province
										WHERE otop.o_id = '$o_id' 
									  ");
		return $quer_code->result();
	}

	public function otop_update($o_id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		$o_annual_income = $this->input->post('o_monthly_income')*12;
		$o_to_annual_income = $this->input->post('o_to_monthly_income')*12;


		$data = array(
					  'o_row_budget' => $this->input->post('o_row_budget'),
					  'o_group_name' => $this->input->post('group_name'),
					  'o_title' => $this->input->post('title'),
					  'o_name' => $this->input->post('name'),
					  'o_surname' => $this->input->post('surname'),
					  'o_tel' => $this->input->post('tel'),
					  'o_house_number' => $this->input->post('o_house_number'),
					  'o_alley' => $this->input->post('o_alley'),
					  'o_street' => $this->input->post('o_street'),
					  'o_swine' => $this->input->post('o_swine'),
					  'o_village' => $this->input->post('o_village'),
					  'o_parish' => $this->input->post('o_parish'),
					  'o_district' => $this->input->post('o_district'),
					  'o_province' => $this->input->post('o_province'),
					  // 'o_operation' => $this->input->post('o_operation'),
					  'o_monthly_income' => $this->input->post('o_monthly_income'),
					  'o_to_monthly_income' => $this->input->post('o_to_monthly_income'),
					  'o_annual_income' => $o_annual_income,
					  'o_to_annual_income' => $o_to_annual_income,
					  'o_date_up' => $date_time,
					);
		$this->db->where('o_id',$o_id);
		$this->db->update('otop',$data);

		if ($this->input->post('goal')) {
			for($i=0;$i<count($_POST["goal"]);$i++){
	            if ($_POST["goal"][$i] != ""){
	                $id_goal = $_POST["goal"][$i];
	 
	        		$data_goal = array(
								  'o_s_g_row_budget' => $this->input->post('o_row_budget'),
								  'o_s_g_id_otop' => $o_id,
								  'o_s_g_id_goal' => $id_goal,
								  'o_s_g_status' => "0",
								);

					$this->db->insert('otop_selec_goal',$data_goal);
					// $this->db->where('p_t_id',$id_delet);
					// $this->db->delete('halal_product_type');
	            }
	        }
	    }


		if ($this->input->post('product')) {
	        for($i=0;$i<count($_POST["product"]);$i++){
	            if ($_POST["product"][$i] != ""){
	                $id_product = $_POST["product"][$i];

	        		$data_product = array(
								  'o_s_p_row_budget' => $this->input->post('o_row_budget'),
								  'o_s_p_id_otop' => $o_id,
								  'o_s_p_id_product' => $id_product,
								);

					$this->db->insert('otop_selec_product',$data_product);
	            }
	        }
	    }
	}

	public function goalANDpro()
	{ 
		$query_goal = $this->db->query(" SELECT *
										FROM  otop_goal
									  ");
		$goal = $query_goal->result();

		$query_pro = $this->db->query(" SELECT *
										FROM  otop_product
									  ");
		$pro = $query_pro->result();

		$data = array(
					   'pro' => $pro,
					   'goal' => $goal,
					 );
		return $data;
	}

	public function selecgoalANDpro($o_s_id)
	{ 	
		$query_id = $this->db->query("  SELECT * 
										FROM otop_segue 
										WHERE otop_segue.o_s_id = '$o_s_id'
									");

		foreach ($query_id->result_array() as $rs) {
			$o_id = $rs["o_s_otop"];
			$year = $rs["o_s_row_budget"];
		}

		$query_goal = $this->db->query(" SELECT *
										FROM  otop_selec_goal
										LEFT JOIN otop_goal ON otop_goal.o_g_id = otop_selec_goal.o_s_g_id_goal
										where otop_selec_goal.o_s_g_id_otop = '$o_id' AND otop_selec_goal.o_s_g_row_budget = '$year'
									  ");
		$s_goal = $query_goal->result();

		$query_pro = $this->db->query(" SELECT *
										FROM  otop_selec_product
										LEFT JOIN otop_product ON otop_product.o_p_id = otop_selec_product.o_s_p_id_product
										where otop_selec_product.o_s_p_id_otop = '$o_id' AND otop_selec_product.o_s_p_row_budget = '$year'
									  ");
		$s_pro = $query_pro->result();

		$data = array(
					   's_pro' => $s_pro,
					   's_goal' => $s_goal,
					 );
		return $data;
	}

	public function off_selecgoalANDpro()
	{ 	

		$query_goal = $this->db->query(" SELECT *
										FROM  otop_selec_goal
										LEFT JOIN otop_goal ON otop_selec_goal.o_s_g_id_goal = otop_goal.o_g_id
									  ");
		$s_goal = $query_goal->result();

		$query_pro = $this->db->query(" SELECT *
										FROM  otop_selec_product
										LEFT JOIN otop_product ON otop_selec_product.o_s_p_id_product = otop_product.o_p_id
									  ");
		$s_pro = $query_pro->result();

		$data = array(
					   's_pro' => $s_pro,
					   's_goal' => $s_goal,
					 );
		return $data;
	}

	public function otop_rate($o_row_budget) //ลบ
	{	

		$quer_code = $this->db->query(" SELECT *
										FROM  otop
										LEFT JOIN provinces ON provinces.pro_id = otop.o_province
										LEFT JOIN otop_segue ON otop_segue.o_s_otop = otop.o_id
										WHERE otop_segue.o_s_row_budget = '$o_row_budget' ORDER BY o_id DESC
									  ");
		return $quer_code->result();
	}

	public function otop_insert_rate($o_s_id)
	{	
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		$data = array(
					  'o_s_row_budget' => $this->input->post('year'),
					  'o_s_status' => "0",
					  'o_s_date_up' => $date_time,
					);
		$this->db->where('o_s_id',$o_s_id);
		$this->db->update('otop_segue',$data);

		$query_id = $this->db->query("SELECT * 
									  FROM otop_segue 
									  WHERE otop_segue.o_s_id = '$o_s_id'
									");
		foreach ($query_id->result_array() as $rs) { 
			$o_id = $rs["o_s_otop"];
		}

		for($i=0;$i<count($_POST["goal"]);$i++){
            if ($_POST["goal"][$i] != ""){
                $id_goal = $_POST["goal"][$i];
 
        		$data_goal = array(
							  'o_s_g_row_budget' => $this->input->post('year'),
							  'o_s_g_id_otop' => $o_id,
							  'o_s_g_id_goal' => $id_goal,
							  'o_s_g_status' => "0",
							);

				$this->db->insert('otop_selec_goal',$data_goal);
            }
        }
        for($i=0;$i<count($_POST["product"]);$i++){
            if ($_POST["product"][$i] != ""){
                $id_product = $_POST["product"][$i];

        		$data_product = array(
							  'o_s_p_row_budget' => $this->input->post('year'),
							  'o_s_p_id_otop' => $o_id,
							  'o_s_p_id_product' => $id_product,
							);

				$this->db->insert('otop_selec_product',$data_product);
            }
        }

        $year = $this->input->post('year');
        $new_year = $year-1;
        return $new_year;
	}

	public function product_insert()
	{ 
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		for($i=0;$i<count($_POST["product_name"]);$i++){
            if ($_POST["product_name"][$i] != ""){
		        $o_p_name = $_POST["product_name"][$i];

		    	$data = array(
							  'o_p_name' => $o_p_name,
							  'o_p_date' => $date_time,
							);
				// $this->db->insert('activity',$data);
				$this->db->insert('otop_product',$data);
        	}
        }
    }

    public function product_update($p_id)
	{ 
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

    	$data = array(
					  'o_p_name' => $this->input->post('product_name'),
					  'o_p_date_up' => $date_time,
					);

		$this->db->where('o_p_id',$p_id);
		$this->db->update('otop_product',$data);
    }

    public function goal_insert()
	{ 
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		for($i=0;$i<count($_POST["goal_name"]);$i++){
            if ($_POST["goal_name"][$i] != ""){
		        $o_g_name = $_POST["goal_name"][$i];

		    	$data = array(
							  'o_g_name' => $o_g_name,
							  'o_g_date' => $date_time,
							);
				// $this->db->insert('activity',$data);
				$this->db->insert('otop_goal',$data);
        	}
        }
    }

    public function goal_update($g_id)
	{ 
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร

    	$data = array(
					  'o_g_name' => $this->input->post('goal_name'),
					  'o_g_date_up' => $date_time,
					);

		$this->db->where('o_g_id',$g_id);
		$this->db->update('otop_goal',$data);
    }

	public function o_manage_dashboard()
	{ 	
		$query_id = $this->db->query("SELECT o_row_budget 
									  FROM otop 
								 	  ORDER BY o_row_budget DESC LIMIT 1");
		$numrow = $query_id->num_rows();

		if ($numrow) {
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$year = $rs["o_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
			}
		}else{
			$year = "";
		}

		$quer_code = $this->db->query(" SELECT *
											FROM  otop
											LEFT JOIN provinces ON provinces.pro_id = otop.o_province
											WHERE otop.o_row_budget = '$year' ORDER BY o_id DESC
										  ");
		// return $quer_code->result();
		$all_num63 = $quer_code->num_rows();
		$year63 = $year;

		$pat_num63 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_province"] == "74") {
				$pat_num63 = $pat_num63+1;
		    }
		}

		$nara_num63 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_province"] == "76") {
				$nara_num63 = $nara_num63+1;
		    }
		}

		$yala_num63 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_province"] == "75") {
				$yala_num63 = $yala_num63+1;
		    }
		}

		if ($year) {
			$year = $year-1;
		}else{
			$year = "";
		}

		$quer_code = $this->db->query(" SELECT *
										FROM  otop
										LEFT JOIN provinces ON provinces.pro_id = otop.o_province
										WHERE otop.o_row_budget = '$year' ORDER BY o_id DESC
									  ");
		$year62 = $year;
		$all_num62 = $quer_code->num_rows();

		$pat_num62 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_province"] == "74") {
				$pat_num62 = $pat_num62+1;
		    }
		}

		$nara_num62 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_province"] == "76") {
				$nara_num62 = $nara_num62+1;
		    }
		}

		$yala_num62 = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_province"] == "75") {
				$yala_num62 = $yala_num62+1;
		    }
		}

		$quer_code = $this->db->query(" SELECT *
										FROM  otop
										LEFT JOIN provinces ON provinces.pro_id = otop.o_province
									  ");

		$all_num = $quer_code->num_rows();

		$pat_num = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_province"] == "74") {
				$pat_num = $pat_num+1;
		    }
		}

		$nara_num = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_province"] == "76") {
				$nara_num = $nara_num+1;
		    }
		}

		$yala_num = 0;
		foreach ($quer_code->result_array() as $rs) { //74 = pat
			if ($rs["o_province"] == "75") {
				$yala_num = $yala_num+1;
		    }
		}



		$data = array(
					   'year63' => $year63,
					   'year62' => $year62,

					   'all_num' => $all_num,
					   'all_num62' => $all_num62,
					   'all_num63' => $all_num63,

					   'yala_num' => $yala_num,
					   'yala_num62' => $yala_num62,
					   'yala_num63' => $yala_num63,

					   'nara_num' => $nara_num,
					   'nara_num62' => $nara_num62,
					   'nara_num63' => $nara_num63,

					   'pat_num' => $pat_num,
					   'pat_num62' => $pat_num62,
					   'pat_num63' => $pat_num63,

					 );
		return $data;
	}

	public function o_manage_parish()
	{ 	
		$query_id = $this->db->query("SELECT o_row_budget 
									  FROM otop 
								 	  ORDER BY o_row_budget DESC LIMIT 1");
		$numrow = $query_id->num_rows();

		if ($numrow) {
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$year = $rs["o_row_budget"]; //ตรงนี้เราจะได้ค่า CP18100
			}
		}else{
			$year = "";
		}

		$year63 = $year;

		$o_parish = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										WHERE otop.o_row_budget = '$year'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										WHERE otop.o_row_budget = '$year'
									  ");
		$all_parish63 = $o_parish->num_rows();
		$all_district63 = $o_district->num_rows();
		$all_moo63 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_swine
												FROM  otop
												WHERE o_parish = '$value[o_parish]' AND o_row_budget = '$year'
			")->num_rows();
			$all_moo63 += $rows_parish;
		}


		$o_parish = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										WHERE otop.o_row_budget = '$year'AND otop.o_province = '74'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										WHERE otop.o_row_budget = '$year' AND otop.o_province = '74'
									  ");
		$pat_parish63 = $o_parish->num_rows();
		$pat_district63 = $o_district->num_rows();
		$pat_moo63 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_swine
												FROM  otop
												WHERE o_parish = '$value[o_parish]' AND o_row_budget = '$year'
			")->num_rows();
			$pat_moo63 += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										WHERE otop.o_row_budget = '$year'AND otop.o_province = '75'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										WHERE otop.o_row_budget = '$year' AND otop.o_province = '75'
									  ");
		$yala_parish63 = $o_parish->num_rows();
		$yala_district63 = $o_district->num_rows();
		$yala_moo63 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_swine
												FROM  otop
												WHERE o_parish = '$value[o_parish]' AND o_row_budget = '$year'
			")->num_rows();
			$yala_moo63 += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										WHERE otop.o_row_budget = '$year'AND otop.o_province = '76'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										WHERE otop.o_row_budget = '$year' AND otop.o_province = '76'
									  ");
		$nara_parish63 = $o_parish->num_rows();
		$nara_district63 = $o_district->num_rows();
		$nara_moo63 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_swine
												FROM  otop
												WHERE o_parish = '$value[o_parish]' AND o_row_budget = '$year'
			")->num_rows();
			$nara_moo63 += $rows_parish;
		}

		if ($year) {
			$year = $year-1;
		}else{
			$year = "";
		}

		$year62 = $year;

		$o_parish = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										WHERE otop.o_row_budget = '$year'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										WHERE otop.o_row_budget = '$year'
									  ");
		$all_parish62 = $o_parish->num_rows();
		$all_district62 = $o_district->num_rows();
		$all_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_swine
												FROM  otop
												WHERE o_parish = '$value[o_parish]' AND o_row_budget = '$year'
			")->num_rows();
			$all_moo62 += $rows_parish;
		}


		$o_parish = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										WHERE otop.o_row_budget = '$year'AND otop.o_province = '74'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										WHERE otop.o_row_budget = '$year' AND otop.o_province = '74'
									  ");
		$pat_parish62 = $o_parish->num_rows();
		$pat_district62 = $o_district->num_rows();
		$pat_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_swine
												FROM  otop
												WHERE o_parish = '$value[o_parish]' AND o_row_budget = '$year'
			")->num_rows();
			$pat_moo62 += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										WHERE otop.o_row_budget = '$year'AND otop.o_province = '75'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										WHERE otop.o_row_budget = '$year' AND otop.o_province = '75'
									  ");
		$yala_parish62 = $o_parish->num_rows();
		$yala_district62 = $o_district->num_rows();
		$yala_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_swine
												FROM  otop
												WHERE o_parish = '$value[o_parish]' AND o_row_budget = '$year'
			")->num_rows();
			$yala_moo62 += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										WHERE otop.o_row_budget = '$year'AND otop.o_province = '76'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										WHERE otop.o_row_budget = '$year' AND otop.o_province = '76'
									  ");
		$nara_parish62 = $o_parish->num_rows();
		$nara_district62 = $o_district->num_rows();
		$nara_moo62 = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_swine
												FROM  otop
												WHERE o_parish = '$value[o_parish]' AND o_row_budget = '$year'
			")->num_rows();
			$nara_moo62 += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
									  ");
		$all_parish = $o_parish->num_rows();
		$all_district = $o_district->num_rows();
		$all_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_swine
												FROM  otop
												WHERE o_parish = '$value[o_parish]'
			")->num_rows();
			$all_moo += $rows_parish;
		}


		$o_parish = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										WHERE otop.o_province = '74'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										WHERE  otop.o_province = '74'
									  ");
		$pat_parish = $o_parish->num_rows();
		$pat_district = $o_district->num_rows();
		$pat_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_swine
												FROM  otop
												WHERE o_parish = '$value[o_parish]'
			")->num_rows();
			$pat_moo += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										WHERE otop.o_province = '75'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										WHERE  otop.o_province = '75'
									  ");
		$yala_parish = $o_parish->num_rows();
		$yala_district = $o_district->num_rows();
		$yala_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_swine
												FROM  otop
												WHERE o_parish = '$value[o_parish]'
			")->num_rows();
			$yala_moo += $rows_parish;
		}

		$o_parish = $this->db->query(" SELECT DISTINCT o_parish
										FROM  otop
										WHERE otop.o_province = '76'
									  ");
		$o_district = $this->db->query(" SELECT DISTINCT o_district
										FROM  otop
										WHERE  otop.o_province = '76'
									  ");
		$nara_parish = $o_parish->num_rows();
		$nara_district = $o_district->num_rows();
		$nara_moo = 0;
		foreach ($o_parish->result_array() as $key => $value) {
			$rows_parish = $this->db->query(" 	SELECT DISTINCT o_swine
												FROM  otop
												WHERE o_parish = '$value[o_parish]'
			")->num_rows();
			$nara_moo += $rows_parish;
		}


		$data = array(
					   'year63' => $year63,
					   'year62' => $year62,

					   'all_parish63' => $all_parish63,
					   'all_district63' => $all_district63,
					   'pat_parish63' => $pat_parish63,
					   'pat_district63' => $pat_district63,
					   'yala_parish63' => $yala_parish63,
					   'yala_district63' => $yala_district63,
					   'nara_parish63' => $nara_parish63,
					   'nara_district63' => $nara_district63,

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

					   'all_moo63' => $all_moo63,
					   'pat_moo63' => $pat_moo63,
					   'yala_moo63' => $yala_moo63,
					   'nara_moo63' => $nara_moo63,
					 );
		return $data;
	}


}