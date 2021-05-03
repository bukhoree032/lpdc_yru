<?php  
class Login_m extends CI_Model {
	
	public function check_login()
	{
	  	$user = $this->input->post('user');
	  	$password = $this->input->post('password');
	  	
		$quer_code = $this->db->query(" SELECT *
										FROM  user
										WHERE u_user = '$user' AND u_password = '$password'
									  ");
		return $quer_code->result();
	}
}