<?php  
class Api_japo_m extends CI_Model {

	public function index($japo_query)
	{	
		if(isset($japo_query[0])){
			foreach ($japo_query as $key => $value) {
				$j_occupation = unserialize($value['j_occupation']);
	
				foreach ($j_occupation as $occu_key => $occu_value) {
					$j_occupation[$occu_key] = $this->db->query(" SELECT ac_id,ac_initials
												FROM  activity
												WHERE ac_id = '$occu_value'
												")->result_array()[0];
				}
				
				$data['japo'][$key] = ['j_id'=>$value['j_id'],
								'j_row_budget'=>$value['j_row_budget'],
								'j_title'=>$value['j_title'],
								'j_name'=>$value['j_name'],
								'j_surname'=>$value['j_surname'],
								'j_age'=>$value['j_age'],
								'j_birthday'=>$value['j_birthday'],
								'j_gender_gen'=>$value['j_gender_gen'],
								'j_tel'=>$value['j_tel'],
								'j_revenue'=>$value['j_revenue'],
								'j_education'=>$value['j_education'],
								'j_house_number'=>$value['j_house_number'],
								'j_parish'=>$value['j_parish'],
								'j_district'=>$value['j_district'],
								'j_province_ID'=>$value['j_province'],
								'j_province'=>$value['name_th'],
								'j_level'=>$value['j_level'],
								'j_occupation'=>$j_occupation,
								'j_latitude'=>$value['j_latitude'],
								'j_longitude'=>$value['j_longitude']
				];
			}
	
			$myJSON = json_encode($data['japo']);
			return $myJSON;
		}else{
			$myJSON = json_encode($japo_query);
			return $myJSON;
		}
	}
}