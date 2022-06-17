<?php  
class Api_otop_m extends CI_Model {

	public function index($japo_query)
	{	
		if(isset($japo_query[0])){
			foreach ($japo_query as $key => $value) {
				
				$monthly_income = $value['o_monthly_income'].'-'.$value['o_to_monthly_income'];
				if($value['o_title'] == 'นาย'){
					$gender = 'ชาย';
				}else{
					$gender = 'หญิง';
				}

				$monthly_income = $value['o_monthly_income'].'-'.$value['o_to_monthly_income'];
				$annual_income = $value['o_annual_income'].'-'.$value['o_to_annual_income'];

				$data['otop'][$key] = ['id'=>$value['o_id'],
										'row_budget'=>$value['o_row_budget'],
										'groupname'=>$value['o_group_name'],
										'title'=>$value['o_title'],
										'name'=>$value['o_name'],
										'surname'=>$value['o_surname'],
										'gender'=>$gender,
										'tel'=>$value['o_tel'],
										'house_number'=>$value['o_house_number'],
										'parish'=>$value['o_parish'],
										'district'=>$value['o_district'],
										'province_ID'=>$value['o_province'],
										'province'=>$value['name_th'],
										'operation'=>$value['o_operation'],
										'product'=>$value['o_product'],
										// 'monthly'=>$monthly_income,
										// 'annual'=>$annual_income,
										'latitude'=>$value['o_latitude'],
										'longitude'=>$value['o_longitude'],
										'project'=>'otop'
						];
									}
	
			$myJSON = json_encode($data['otop']);
			return $myJSON;
		}else{
			$myJSON = json_encode($japo_query);
			return $myJSON;
		}
	}
}