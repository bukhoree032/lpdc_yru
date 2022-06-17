<?php  
class Api_onet_m extends CI_Model {

	public function index($japo_query)
	{	
		if(isset($japo_query[0])){
			foreach ($japo_query as $key => $value) {
				// $j_occupation = unserialize($value['j_occupation']);
				$h_occupation = '';
	
				// foreach ($j_occupation as $occu_key => $occu_value) {
				// 	$j_occupation[$occu_key] = $this->db->query(" SELECT ac_id,ac_initials
				// 								FROM  activity
				// 								WHERE ac_id = '$occu_value'
				// 								")->result_array()[0];
				// }
				
				$data['onet'][$key] = ['id'=>$value['on_id'],
								'j_row_budget'=>$value['on_row_budget'],
								'idschool'=>$value['on_id_school'],
								'nameschool'=>$value['on_name_school'],
								'province'=>$value['on_parish'],
								'district'=>$value['on_district'],
								'province'=>$value['on_province'],
								'area'=>$value['on_area'],
								'affiliate'=>$value['on_affiliate'],
								'tel'=>$value['on_tel'],
								'continue'=>$value['on_continue'],
								'latitude'=>$value['on_latitude'],
								'longitude'=>$value['on_longitude'],
								'project'=>'onet'
				];
			}
	
			$myJSON = json_encode($data['onet']);
			return $myJSON;
		}else{
			$myJSON = json_encode($japo_query);
			return $myJSON;
		}
	}
}