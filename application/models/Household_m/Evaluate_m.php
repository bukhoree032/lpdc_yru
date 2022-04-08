<?php  
class Evaluate_m extends CI_Model {

	public function eva_add($h_id)
	{	
		$quer_code = $this->db->query(" SELECT *
										FROM  household
										LEFT JOIN provinces ON provinces.pro_id = household.h_province
										LEFT JOIN activity ON activity.ac_id = household.h_occupation
										WHERE h_id = $h_id
									  ");
		return $quer_code->result();
	}

	public function eva_id($h_id)
	{	
		return $h_id;
	}

	public function eva_insert($h_id)
	{	
		$pass_rand = '';
		if ($_FILES['profile']['name']) {
			// แรนดอม
			$key = "123456789abcdefghjklmnpqrtuvwxyABCDEFGHJKLMNPQRSTUVWXYZ"; 
			srand((double)microtime()*1000000);
			for($i=0; $i<7; $i++) { 
				$pass_rand .= $key[rand()%strlen($key)]; 
			}
			// แรนดอม

			if ($_FILES['profile']['type'] == 'image/jpeg') {
				$type = ".jpg";
			}else if ($_FILES['profile']['type'] == 'image/png'){
				$type = ".PNG";
			}else if ($_FILES['profile']['type'] == 'image/gif'){
				$type = ".GIF";
			}
			$name_pro = $pass_rand.$type;
		// 	//แรนดอม 

	        // $name_pro = "1".$_FILES['profile']['name'];

			$upload_path = APPPATH . '../imag/';
	        // if(!file_exists($upload_path)) mkdir($upload_path);
	        if(!$_FILES) redirect(base_url('upload'));
	        $this->load->library('upload', [
	            'upload_path' => $upload_path,
	            'allowed_types' => 'gif|jpg|png',
	            'file_name' => $name_pro

	        ]);

	        // $name_pro = $pass_rand.".".$_FILES['profile']['name'];
	        $this->upload->do_upload('profile');

			$query_id = $this->db->query("SELECT im_id
										  FROM household_imag 
										  WHERE household_imag.im_hold = '$h_id' AND household_imag.im_status = '1'
										  ORDER BY im_id DESC LIMIT 1");
			$numrow = $query_id->num_rows();
			if ($numrow) {
				foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
					$cal = $rs["im_id"]; //ตรงนี้เราจะได้ค่า CP18100
				}
				$data = array(
							  'im_hold' => $h_id,
						  	  'im_name' => $this->upload->data()['file_name'],
						  	  'im_status' => "1",
							);

				$this->db->where('im_id',$cal);
				$query_check=$this->db->update('household_imag',$data);
			}else{
				$data = array(
							  'im_hold' => $h_id,
						  	  'im_name' => $this->upload->data()['file_name'],
						  	  'im_status' => "1",
							);
				$query_check=$this->db->insert('household_imag',$data);
			}
		}else{
			$name_pro = "";
		}

		if ($_FILES['around']['name']['0']) {
			

			$upload_path = APPPATH . '../imag/';
	        if(!$_FILES) redirect(base_url('upload'));
	        $this->load->library('upload', [
	            'upload_path' => $upload_path,
	            'allowed_types' => 'gif|jpg|png'
	        ]);

	        $uploads = [];
	        $files = $_FILES;
	        $count = count($_FILES['around']['name']);

	        for($i = 0; $i < $count; $i++)
        	{
        		$_FILES['around']['name'] = $files['around']['name'][$i];
	            $_FILES['around']['type'] = $files['around']['type'][$i];
	            $_FILES['around']['tmp_name'] = $files['around']['tmp_name'][$i];
	            $_FILES['around']['size'] = $files['around']['size'][$i];
	            $_FILES['around']['error'] = $files['around']['error'][$i];


	            if($this->upload->do_upload('around')){
	                // ถ้าไม่มีข้อผิดพลาด
	                $uploads[] = [
	                    'error' => false,
	                    'file_name' => $this->upload->data()['file_name'],
	                    'message' => null
	                ];
	                $data = array(
								  'im_hold' => $h_id,
							  	  'im_name' => $this->upload->data()['file_name'],
							  	  'im_status' => "2",
								);
					$query_check=$this->db->insert('household_imag',$data);
	            }else{
	                // ถ้าเกิดข้อผิดพลาด
	                $uploads[] = [
	                    'error' => true,
	                    'file_name' => $_FILES['file']['name'],
	                    'message' => $this->upload->display_errors('', '')
	                ];
	            }
        	}
	    }

		$data = array(
					  'h_around' => $this->input->post('detail'),
					  'h_latitude' => $this->input->post('lat'),
					  'h_longitude' => $this->input->post('long'),
					);

		$this->db->where('h_id',$h_id);
		$query_check1=$this->db->update('household',$data);

		if ($query_check1) {
			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
			return "false_true";
		}else{
		  	return "false_regieter";
		}
	}

	public function eva_update($h_id)
	{
		$gender = $this->input->post('gender');
		if (!$gender) {
			$gender = '0';
		}
		$data = array(
					  'h_status_past' => $gender,
					  'h_occupation' => $this->input->post('occupation'),
					  'h_annotition' => $this->input->post('annotition'),
					);
		$this->db->where('h_id',$h_id);
		$query_check=$this->db->update('household',$data);

		if ($query_check) {
			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
			return $h_id;
		}else{
		  	return "false_regieter";
		}
	}

	public function activity_hold()
	{
		$quer_code = $this->db->query(" SELECT * 
										FROM  activity
										WHERE ac_id_pro = '3'
									  ");
		// return $quer_code->result();
		$activity_hold = $quer_code->result();
		return $activity_hold;
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

	public function detel_imag($imag_id) //ลบ
	{
		$this->db->where('im_id',$imag_id);
        $this->db->delete('household_imag');
	}

	public function detel_imag_pro($imag_id) //ลบ
	{
		$this->db->where('im_id',$imag_id);
        $this->db->delete('household_imag');
	}

	public function eva_insert_year() 
	{
		$date_time = date("Y-m-d");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		// echo $this->input->post('e_y_income');
		$data = array(
				  'e_y_row_budget' => $this->input->post('e_y_row_budget'),
				  'e_y_user_id' => $this->input->post('h_id'),
				  'e_y_product' => $this->input->post('e_y_product'),
				  'e_y_gobbet' => $this->input->post('e_y_gobbet'),
				  'e_y_gobbet_sur' => $this->input->post('e_y_gobbet_sur'),
				  'e_y_gobbet_dead' => $this->input->post('e_y_gobbet_dead'),
				  'e_y_quantity_sold' => $this->input->post('e_y_quantity_sold'),
				  'e_y_income	' => $this->input->post('e_y_income'),
				  'e_y_status_ready' => $this->input->post('e_y_status_ready'),
				  'e_y_ready_note' => $this->input->post('e_y_ready_note'),
				  'e_y_ready_raise' => $this->input->post('e_y_ready_raise'),
				  'e_y_4_1' => $this->input->post('e_y_4_1'),
				  'e_y_4_1_note	' => $this->input->post('e_y_4_1_note'),
				  'e_y_4_2' => $this->input->post('e_y_4_2'),
				  'e_y_4_3' => $this->input->post('e_y_4_3'),
				  'e_y_4_3_note' => $this->input->post('e_y_4_3_note'),
				  'e_y_4_4' => $this->input->post('e_y_4_4'),
				  'e_y_4_4_note' => $this->input->post('e_y_4_4_note'),
				  'e_y_4_5' => $this->input->post('e_y_4_5'),
				  'e_y_4_5_note' => $this->input->post('e_y_4_5_note'),
				  'e_y_4_6' => $this->input->post('e_y_4_6'),
				  'e_y_4_6_note' => $this->input->post('e_y_4_6_note'),
				  'e_y_temperature' => $this->input->post('e_y_temperature'),
				  'e_y_date_tem' => $this->input->post('e_y_date_tem'),
				  'e_y_date' => $date_time,
				);
		$query_check=$this->db->insert('evaluate_year',$data);
	}

	public function eva_update_year($h_id) 
	{
		$data = array(
				  'e_y_row_budget' => $this->input->post('e_y_row_budget'),
				  'e_y_user_id' => $this->input->post('h_id'),
				  'e_y_product' => $this->input->post('e_y_product'),
				  'e_y_gobbet' => $this->input->post('e_y_gobbet'),
				  'e_y_gobbet_sur' => $this->input->post('e_y_gobbet_sur'),
				  'e_y_gobbet_dead' => $this->input->post('e_y_gobbet_dead'),
				  'e_y_quantity_sold' => $this->input->post('e_y_quantity_sold'),
				  'e_y_income' => $this->input->post('e_y_income'),
				  'e_y_status_ready' => $this->input->post('e_y_status_ready'),
				  'e_y_ready_note' => $this->input->post('e_y_ready_note'),
				  'e_y_ready_raise' => $this->input->post('e_y_ready_raise'),
				  'e_y_4_1' => $this->input->post('e_y_4_1'),
				  'e_y_4_1_note	' => $this->input->post('e_y_4_1_note'),
				  'e_y_4_2' => $this->input->post('e_y_4_2'),
				  'e_y_4_3' => $this->input->post('e_y_4_3'),
				  'e_y_4_3_note' => $this->input->post('e_y_4_3_note'),
				  'e_y_4_4' => $this->input->post('e_y_4_4'),
				  'e_y_4_4_note' => $this->input->post('e_y_4_4_note'),
				  'e_y_4_5' => $this->input->post('e_y_4_5'),
				  'e_y_4_5_note' => $this->input->post('e_y_4_5_note'),
				  'e_y_4_6' => $this->input->post('e_y_4_6'),
				  'e_y_4_6_note' => $this->input->post('e_y_4_6_note'),
				  'e_y_temperature' => $this->input->post('e_y_temperature'),
				);

		$this->db->where('e_y_id',$h_id);
		$query_check1=$this->db->update('evaluate_year',$data);

		// if ($this->input->post('e_y_date_tem') == '') {

		// }else{
		// 	$1data = array(
		// 			  'e_y_date_tem' => $this->input->post('e_y_date_tem'),
		// 			);

		// 	$this->db->where('e_y_id',$h_id);
		// 	$query_check1=$this->db->update('evaluate_year',$1data);
		// }
	}
}