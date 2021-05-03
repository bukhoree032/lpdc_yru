<?php  
class Project_m extends CI_Model {

	public function project()
	{ 
		$quer_code = $this->db->query(" SELECT * FROM  project");
		return $quer_code->result();
	}

    public function pro_insert()
    { 

		$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร

		$data = array(
					  'pro_name' => $this->input->post('pro_name'),
					  'pro_initials' => $this->input->post('pro_initials'),
					  'pro_date' => $date_time,
					);
		$query_check=$this->db->insert('project',$data);


		$query_id = $this->db->query("SELECT pro_id
		 							  FROM project
		 							  ORDER BY pro_id  DESC LIMIT 1");
	 	$numrow = $query_id->num_rows();
	 	foreach ($query_id->result_array() as $rs) {
	 		$cal = $rs["pro_id"];
	 	}

        for($i=0;$i<count($_POST["ac_namefull"]);$i++){
            if ($_POST["ac_namefull"][$i] != ""){
	            $ac_namefull = $_POST["ac_namefull"][$i];
	            $ac_nameshort = $_POST["ac_nameshort"][$i];
	            $link = $_POST["link"][$i];

	        	$data = array(
							  'ac_id_pro' => $cal,
							  'ac_name' => $ac_namefull,
							  'ac_initials' => $ac_nameshort,
							  'ac_link' => $link,
							  'ac_date' => $date_time,
							);
				// $this->db->insert('activity',$data);
				$query_check=$this->db->insert('activity',$data);
        	}
		}
		if ($query_check) {
			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
			return "false_true";
		}else{
		  	return "false_regieter";
		}
    }

    public function activity($pro_id)
	{
		$quer_code = $this->db->query(" SELECT * 
										FROM  activity
										WHERE ac_id_pro = '$pro_id'
									  ");
		// return $quer_code->result();
		$activity = $quer_code->result();

		$quer_pro = $this->db->query(" SELECT * 
										FROM  project
										WHERE pro_id = '$pro_id'
									  ");
		// return $quer_code->result();
		$project = $quer_pro->result();

		$data = array(
					   'activity' => $activity,
					   'project' => $project,
					   // 'dis' => $dis,
					 );
		return $data;
	}

	public function activity_year($pro_id)
	{
		$date_time = date("Y")+"543";

		$quer_code = $this->db->query(" SELECT * 
										FROM  project_year
										WHERE pro_year_year = '$date_time' AND pro_year_pro = '$pro_id'
									  ");
		return $quer_code->result();
	}

	public function activity_insert($pro_id)
	{
		$date_time = date("Y/m/d H:i:s");

		for($i=0;$i<count($_POST["ac_namefull"]);$i++){
            if ($_POST["ac_namefull"][$i] != ""){
		        $at_namefull = $_POST["ac_namefull"][$i];
		        $at_nameshort = $_POST["ac_nameshort"][$i];
		        $likn = $_POST["link"][$i];

		    	$data = array(
							  'ac_id_pro' => $pro_id,
							  'ac_name' => $at_namefull,
							  'ac_initials' => $at_nameshort,
							  'ac_link' => $likn,
							  'ac_date' => $date_time,
							);
				// $this->db->insert('activity',$data);
				$query_check=$this->db->insert('activity',$data);
        	}
        }
		if ($query_check) {
			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
			return "false_true";
		}else{
		  	return "false_regieter";
		}
	}

	public function activity_edit($ac_id)
	{
		$quer_code = $this->db->query(" SELECT * 
										FROM  activity
										WHERE ac_id = '$ac_id'
									  ");
		return $quer_code->result();
	}

	public function activity_update($ac_id)
	{ 
		$date_time = date("Y/m/d H:i:s");

		$data = array(
					  'ac_name' => $this->input->post('ac_name'),
					  'ac_initials' => $this->input->post('ac_initials'),
					  'ac_link' => $this->input->post('ac_link'),
					  'ac_date_update' => $date_time,
					);

		$this->db->where('ac_id',$ac_id);
		$this->db->update('activity',$data);
		$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
	}

	public function year_insert($pro_id)
	{
		$year = $this->input->post('year');

		$query_id = $this->db->query("SELECT *
		 							  FROM project_year
		 							  WHERE pro_year_year = '$year' AND pro_year_pro = '$pro_id'");
	 	$numrow = $query_id->num_rows();

	 	if ($numrow != '') {
 			$this->db->WHERE('pro_year_year',$year);
 			$this->db->WHERE('pro_year_pro',$pro_id);
			$this->db->delete('project_year');
	 	}

		for($i=0;$i<count($_POST["activity_add"]);$i++){
            if ($_POST["activity_add"][$i] != ""){
		        $activity_add = $_POST["activity_add"][$i];

		    	$data = array(
							  'pro_year_year' => $year,
							  'pro_year_pro' => $pro_id,
							  'pro_year_activity' => $activity_add,
							);
				$query_check=$this->db->insert('project_year',$data);
        	}
        }
		if ($query_check) {
			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
			return "false_true";
		}else{
		  	return "false_regieter";
		}
	}


	public function project_update($pro_id)
	{ 
		$date_time = date("Y/m/d H:i:s");

		$data = array(
					  'pro_name' => $this->input->post('pro_name'),
					  'pro_initials' => $this->input->post('pro_initials'),
					  'pro_date_update' => $date_time,
					);

		$this->db->where('pro_id ',$pro_id );
		$this->db->update('project',$data);
		$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
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
}

	// public function manage_provinces()
	// { 
	// 	$provinces = $this->db->query(" SELECT *
	// 									FROM  provinces
	// 									WHERE provinces.pro_id = '74' OR provinces.pro_id = '75' OR provinces.pro_id = '76'
	// 								  ");
	// 	$pro = $provinces->result();

	// 	$amphures = $this->db->query(" SELECT *
	// 									FROM  provinces
	// 									INNER JOIN amphures ON amphures.province_id = provinces.pro_id
	// 									WHERE provinces.pro_id = '74' OR provinces.pro_id = '75' OR provinces.pro_id = '76'
	// 								  ");
	// 	$aum = $amphures->result();

	// 	$districts = $this->db->query(" SELECT *
	// 									FROM  provinces
	// 									INNER JOIN amphures ON amphures.province_id = provinces.pro_id
	// 									INNER JOIN districts ON districts.amphure_id = amphures.aum_id
	// 									WHERE provinces.pro_id = '74' OR provinces.pro_id = '75' OR provinces.pro_id = '76'
	// 								  ");
	// 	$dis = $districts->result();

	// 	$data = array(
	// 				   'pro' => $pro,
	// 				   'aum' => $aum,
	// 				   'dis' => $dis,
	// 				 );
	// 	return $data;
	// }


	// public function manage_detail($h_id)
	// { 
	// 	$quer_code = $this->db->query(" SELECT *
	// 									FROM  household
	// 									LEFT JOIN provinces ON provinces.pro_id = household.h_province
	// 									WHERE household.h_id = '$h_id'
	// 								  ");
	// 	return $quer_code->result();
	// }
	
	// public function manage_insert() 
	// {
	// 	$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
	// 	$h_gender = $this->input->post('h_gender');
	// 	if ($h_gender == 'นาย') {
	// 		$h_gender_gen ='ชาย';
	// 	}else{
	// 		$h_gender_gen ='หญิง';
	// 	}

	// 	$query_id = $this->db->query("SELECT h_id 
	// 								FROM household 
	// 								ORDER BY h_id DESC LIMIT 1");
	// 	$numrow = $query_id->num_rows();
	// 	foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
	// 		$cal = $rs["h_id"]; //ตรงนี้เราจะได้ค่า CP18100
	// 	}

	// 	if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
 //    		$h_id = "1";
	// 	}else{
	// 		$cal++;
	// 		$h_id = $cal;
	// 	}

	// 	$this->db->select('h_id');
	// 	$this->db->where('h_id',$h_id);
	// 	$query_num = $this->db->get('household');
	// 	$num = $query_num->num_rows();
	// 	if($num > 0){
	// 		//รหัสครัวเรือนมซ้ำ
	// 		return "false_h_id";
	// 	}else{
	// 		$data = array(
	// 					  'h_id' => $h_id,
	// 					  // 'h_row_budget' => $this->input->post('h_row_budget'),
	// 					  'h_title' => $this->input->post('h_title'),
	// 					  'h_name' => $this->input->post('h_name'),
	// 					  'h_surname' => $this->input->post('h_surname'),
	// 					  'h_house_number' => $this->input->post('h_house_number'),
	// 					  'h_age' => $this->input->post('h_age'),
	// 					  'h_gender' => $h_gender_gen,
	// 					  'h_education' => $this->input->post('h_education'),
	// 					  'h_alley' => $this->input->post('h_alley'),
	// 					  'h_street' => $this->input->post('h_street'),
	// 					  'h_swine' => $this->input->post('h_swine'),
	// 					  'h_village' => $this->input->post('h_village'),
	// 					  'h_parish	' => $this->input->post('h_parish'),
	// 					  'h_district' => $this->input->post('h_district'),
	// 					  'h_province' => $this->input->post('h_province'),
	// 					  'h_tel' => $this->input->post('h_tel'),
	// 					  'h_revenue' => $this->input->post('h_revenue'),
	// 					  'h_occupation' => $this->input->post('h_occupation'),
	// 					  'h_date' => $date_time,
	// 					);
	// 		// $this->db->insert('halal_member',$data);
	// 		$query_check=$this->db->insert('household',$data);

	// 		if ($query_check) {
	// 			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
	// 			return "false_true";
	// 		}else{
	// 		  	return "false_regieter";
	// 		}
	// 	}
	// }

	// public function manage_update() 
	// {	
	// 	$h_id = $this->input->post('h_id');
	// 	$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
	// 	$h_title = $this->input->post('h_title');
	// 	if ($h_title == 'นาย') {
	// 		$h_gender_gen ='ชาย';
	// 	}else{
	// 		$h_gender_gen ='หญิง';
	// 	}

	// 	$data = array(
	// 				  // 'h_row_budget' => $this->input->post('h_row_budget'),
	// 				  'h_title' => $this->input->post('h_title'),
	// 				  'h_name' => $this->input->post('h_name'),
	// 				  'h_surname' => $this->input->post('h_surname'),
	// 				  'h_house_number' => $this->input->post('h_house_number'),
	// 				  'h_age' => $this->input->post('h_age'),
	// 				  'h_gender' => $h_gender_gen,
	// 				  'h_education' => $this->input->post('h_education'),
	// 				  'h_alley' => $this->input->post('h_alley'),
	// 				  'h_street' => $this->input->post('h_street'),
	// 				  'h_swine' => $this->input->post('h_swine'),
	// 				  'h_village' => $this->input->post('h_village'),
	// 				  'h_parish	' => $this->input->post('h_parish'),
	// 				  'h_district' => $this->input->post('h_district'),
	// 				  'h_province' => $this->input->post('h_province'),
	// 				  'h_tel' => $this->input->post('h_tel'),
	// 				  'h_revenue' => $this->input->post('h_revenue'),
	// 				  'h_occupation' => $this->input->post('h_occupation'),
	// 				  'h_date' => $date_time,
	// 				);
	// 	// $this->db->insert('halal_member',$data);

	// 	$this->db->where('h_id',$h_id);
	// 	$query_check=$this->db->update('household',$data);

	// 	if ($query_check) {
	// 		$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
	// 		return "false_true";
	// 	}else{
	// 	  	return "false_regieter";
	// 	}
	// }

	// public function manage_bin($h_id) //ลบ
	// {
	// 	$data = array(
	// 				  'h_status_bin' => "2",
	// 				);

	// 	$this->db->where('h_id',$h_id);
	// 	$this->db->update('household',$data);
	// }
// }
// }