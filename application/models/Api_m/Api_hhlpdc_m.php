<?php  
class Api_hhlpdc_m extends CI_Model {

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
								'row_budget'=>$value['h_row_budget'],
								'title'=>$value['h_title'],
								'name'=>$value['h_name'],
								'surname'=>$value['h_surname'],
								'age'=>$value['h_age'],
								'birthday'=>$value['h_birthday'],
								'gender'=>$value['h_gender'],
								'tel'=>$value['h_tel'],
								'revenue'=>$value['h_revenue'],
								'education'=>$value['h_education'],
								'house_number'=>$value['h_house_number'],
								'parish'=>$value['h_parish'],
								'district'=>$value['h_district'],
								'province_ID'=>$value['h_province'],
								'province'=>$value['name_th'],
								'level'=>$value['h_level'],
								'occupation'=>$h_occupation,
								'latitude'=>$value['h_latitude'],
								'longitude'=>$value['h_longitude'],
								'project'=>'lpdc'
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