<?php  
class Api_lpdc_m extends CI_Model {

	public function index($japo_query)
	{	
		if(isset($japo_query[0])){
			foreach ($japo_query as $key => $value) {
				// $j_occupation = unserialize($value['j_occupation']);
				$h_occupation = $value['h_occupation'];
	
				// foreach ($j_occupation as $occu_key => $occu_value) {
				// 	$j_occupation[$occu_key] = $this->db->query(" SELECT ac_id,ac_initials
				// 								FROM  activity
				// 								WHERE ac_id = '$occu_value'
				// 								")->result_array()[0];
				// }
				
				$data['lpdc'][$key] = ['id'=>$value['h_id'],
								'j_row_budget'=>$value['h_row_budget'],
								'j_title'=>$value['h_title'],
								'j_name'=>$value['h_name'],
								'j_surname'=>$value['h_surname'],
								'j_age'=>$value['h_age'],
								'j_birthday'=>$value['h_birthday'],
								'j_gender'=>$value['h_gender'],
								'j_tel'=>$value['h_tel'],
								'j_revenue'=>$value['h_revenue'],
								'j_education'=>$value['h_education'],
								'j_house_number'=>$value['h_house_number'],
								'j_parish'=>$value['h_parish'],
								'j_district'=>$value['h_district'],
								'j_province_ID'=>$value['h_province'],
								'j_province'=>$value['name_th'],
								'j_level'=>$value['h_level'],
								'j_occupation'=>$h_occupation,
								'j_latitude'=>$value['h_latitude'],
								'j_longitude'=>$value['h_longitude']
				];
			}
	
			$myJSON = json_encode($data['lpdc']);
			return $myJSON;
		}else{
			$myJSON = json_encode($japo_query);
			return $myJSON;
		}
	}
}