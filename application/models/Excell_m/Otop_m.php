<?php  
class Otop_m extends CI_Model {

	public function otop_search() //ลบ
	{	
		$o_row_budget = 2564;
		//ปัตตานี 
		// $pro = 74; 
		 //ยะลา
		// $pro = 75;
		 //นรา 
		// $pro = 76;
		 //รวม
		$pro = '';

		// $o_row_budget = $this->input->post('s_year');
		// $pro = $this->input->post('s_pro');

		// $this->session->set_userdata("otop_search_year",$o_row_budget);
		// $this->session->set_userdata("otop_search_pro",$pro);

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

		// $quer_code['otop'] = $this->db->query(" SELECT *
		// 								FROM  otop
		// 								LEFT JOIN provinces ON provinces.pro_id = otop.o_province
		// 								LEFT JOIN otop_segue ON otop_segue.o_s_otop = otop.o_id
		// 								WHERE otop_segue.o_s_row_budget $year '$o_row_budget' AND  otop.o_province $pro1 '$pro' ORDER BY o_id DESC
		// 							  ")->result();
		$quer_code['otop'] = $this->db->query(" SELECT *
										FROM  otop
										LEFT JOIN provinces ON provinces.pro_id = otop.o_province
										LEFT JOIN otop_segue ON otop_segue.o_s_otop = otop.o_id
										WHERE otop_segue.o_s_row_budget $year '$o_row_budget' AND  otop.o_province $pro1 '$pro' ORDER BY o_id DESC
									")->result();
		return $quer_code;
	}
}