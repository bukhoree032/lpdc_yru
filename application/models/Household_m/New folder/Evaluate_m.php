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

	// public function eva_insert($h_id)
	// {	
	// 	$pass_rand = '';
	// 	if ($_FILES['profile']['name']) {
	// 		// แรนดอม
	// 		$key = "123456789abcdefghjklmnpqrtuvwxyABCDEFGHJKLMNPQRSTUVWXYZ"; 
	// 		srand((double)microtime()*1000000);
	// 		for($i=0; $i<7; $i++) { 
	// 			$pass_rand .= $key[rand()%strlen($key)]; 
	// 		}
	// 		// แรนดอม

	// 		if ($_FILES['profile']['type'] == 'image/jpeg') {
	// 			$type = ".jpg";
	// 		}else if ($_FILES['profile']['type'] == 'image/png'){
	// 			$type = ".PNG";
	// 		}else if ($_FILES['profile']['type'] == 'image/gif'){
	// 			$type = ".GIF";
	// 		}
	// 		$name_pro = $pass_rand.$type;
	// 	// 	//แรนดอม 

	//         // $name_pro = "1".$_FILES['profile']['name'];

	// 		$upload_path = APPPATH . '../imag/';
	//         // if(!file_exists($upload_path)) mkdir($upload_path);
	//         if(!$_FILES) redirect(base_url('upload'));
	//         $this->load->library('upload', [
	//             'upload_path' => $upload_path,
	//             'allowed_types' => 'gif|jpg|png',
	//             'file_name' => $name_pro

	//         ]);

	//         // $name_pro = $pass_rand.".".$_FILES['profile']['name'];
	//         $this->upload->do_upload('profile');

	// 		$query_id = $this->db->query("SELECT im_id
	// 									  FROM household_imag 
	// 									  WHERE household_imag.im_hold = '$h_id' AND household_imag.im_status = '1'
	// 									  ORDER BY im_id DESC LIMIT 1");
	// 		$numrow = $query_id->num_rows();
	// 		if ($numrow) {
	// 			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
	// 				$cal = $rs["im_id"]; //ตรงนี้เราจะได้ค่า CP18100
	// 			}
	// 			$data = array(
	// 						  'im_hold' => $h_id,
	// 					  	  'im_name' => $name_pro,
	// 					  	  'im_status' => "1",
	// 						);

	// 			$this->db->where('im_id',$cal);
	// 			$query_check=$this->db->update('household_imag',$data);
	// 		}else{
	// 			$data = array(
	// 						  'im_hold' => $h_id,
	// 					  	  'im_name' => $name_pro,
	// 					  	  'im_status' => "1",
	// 						);
	// 			$query_check=$this->db->insert('household_imag',$data);
	// 		}
	// 	}else{
	// 		$name_pro = "";
	// 	}

	// 	if ($_FILES['around']['name']['0']) {
	// 		$key = "123456789abcdefghjklmnpqrtuvwxyABCDEFGHJKLMNPQRSTUVWXYZ"; 
	// 		srand((double)microtime()*1000000);
	// 		for($i=0; $i<7; $i++) { 
	// 			$pass_rand .= $key[rand()%strlen($key)]; 
	// 		}
	// 		// แรนดอม

	// 		if ($_FILES['profile']['type'] == 'image/jpeg') {
	// 			$type = ".jpg";
	// 		}else if ($_FILES['profile']['type'] == 'image/png'){
	// 			$type = ".PNG";
	// 		}else if ($_FILES['profile']['type'] == 'image/gif'){
	// 			$type = ".GIF";
	// 		}
	// 		$name_pro1 = $pass_rand.$type;


	// 		$upload_path = APPPATH . '../imag/';
	//         if(!$_FILES) redirect(base_url('upload'));
	//         $this->load->library('upload', [
	//             'upload_path' => $upload_path,
	//             'allowed_types' => 'gif|jpg|png',
	//             'file_name' => $name_pro1
	//         ]);

	//         $uploads = [];
	//         $files = $_FILES;
	//         $count = count($_FILES['around']['name']);

	//         $name_pro = $name_pro1;
	//         for($i = 1; $i <= $count; $i++)
 //        	{
 //        		$_FILES['around']['name'] = $files['around']['name'][$i];
	//             $_FILES['around']['type'] = $files['around']['type'][$i];
	//             $_FILES['around']['tmp_name'] = $files['around']['tmp_name'][$i];
	//             $_FILES['around']['size'] = $files['around']['size'][$i];
	//             $_FILES['around']['error'] = $files['around']['error'][$i];

	            
	//             if($this->upload->do_upload('around')){
	//                 // ถ้าไม่มีข้อผิดพลาด
	//                 $uploads[] = [
	//                     'error' => false,
	//                     'file_name' => $this->upload->data()['file_name'],
	//                     'message' => null
	//                 ];
	//                 $data = array(
	// 							  'im_hold' => $h_id,
	// 						  	  'im_name' => $name_pro,
	// 						  	  'im_status' => "2",
	// 							);
	// 				$query_check=$this->db->insert('household_imag',$data);
	//             }else{
	//                 // ถ้าเกิดข้อผิดพลาด
	//                 $uploads[] = [
	//                     'error' => true,
	//                     'file_name' => $_FILES['around']['name'],
	//                     'message' => $this->upload->display_errors('', '')
	//                 ];
	//             }
	//             $name_pro = $name_pro1.$i;
 //        	}
	//     }

	// 	$data = array(
	// 				  'h_around' => $this->input->post('detail'),
	// 				  'h_latitude' => $this->input->post('lat'),
	// 				  'h_longitude' => $this->input->post('long'),
	// 				);

	// 	$this->db->where('h_id',$h_id);
	// 	$query_check1=$this->db->update('household',$data);

	// 	if ($query_check1) {
	// 		$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
	// 		return "false_true";
	// 	}else{
	// 	  	return "false_regieter";
	// 	}
	// }

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

}