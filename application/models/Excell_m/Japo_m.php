<?php  
class Japo_m extends CI_Model {

	public function otop_search() //ลบ
	{	
		$j_row_budget = 2564;
		//ปัตตานี 
		$pro = 74; 
		 //ยะลา
		// $pro = 75;
		 //นรา 
		// $pro = 76;
		 //รวม
		// $pro = '';

		// $j_row_budget = $this->input->post('s_year');
		// $pro = $this->input->post('s_pro');
		
		// $this->session->set_userdata("japo_search_year",$j_row_budget);
		// $this->session->set_userdata("japo_search_pro",$pro);

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
										  ")->result();
		$data['japo'] = $quer_code;
		foreach ($quer_code as $key => $value) {
			$j_occupation = unserialize($value->j_occupation);
			$data['japo'][$key]->j_occupation = $j_occupation;
			foreach ($data['japo'][$key]->j_occupation as $key_occu => $value_occu) {
				if($value_occu == '8'){
					$data['japo'][$key]->j_occupation[$key_occu] = 'การเลี้ยงไก่เบตง';
				}

				if($value_occu == '9'){
					$data['japo'][$key]->j_occupation[$key_occu] = 'การเลี้ยงผึ้งชันโรง';
				}
				
				if($value_occu == '10'){
					$data['japo'][$key]->j_occupation[$key_occu] = 'การผลิตเห็ดแบบรวมกลุ่ม';
				}
				
				if($value_occu == '29'){
					$data['japo'][$key]->j_occupation[$key_occu] = 'ผักท้องถิ่น';
				}
			}
		}
		return $data;
	}
}