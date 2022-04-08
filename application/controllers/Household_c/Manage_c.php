<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_c extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Household_m/Manage_m');
    	$this->load->model('Household_m/Evaluate_m');
    	$this->load->model('Dashboard_m/Dashboard_m');
 
    	$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'househole_manag');
		
    }

	public function modal_success()
	{
    	$this->session->set_flashdata('manage_success','บันทึกการเปลียนแปลงสำเร็จ');
	}

	public function index()
	{
		// $househole['househole']=$this->Manage_m->manage();
		$manage = $this->Manage_m->manage();
		$househole['househole']=$manage['household'];
		$househole['excell']=$manage['h_excell'];
		$manage_dashboard['manage_dashboard']=$this->Manage_m->manage_dashboard();
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$manage_provinces['manage_provinces']=$this->Manage_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$activity_hold['activity_hold']=$this->Evaluate_m->activity_hold();


		$this->load->view('page',$activity_hold);
		$this->load->view('page',$manage_dashboard);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_provinces);
		$this->load->view('page',$manage_year);
		$this->load->view('popup/success');
		$this->load->view('household/manage/household_data',$househole);
		// echo json_encode($manage_dashboard['manage_dashboard']);
	}

	public function househole_search()
	{
		// $househole['househole']=$this->Manage_m->househole_search();
		$manage = $this->Manage_m->househole_search();
		$househole['househole']=$manage['household'];
		$househole['excell']=$manage['h_excell'];
		$manage_dashboard['manage_dashboard']=$this->Manage_m->manage_dashboard();
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$manage_provinces['manage_provinces']=$this->Manage_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$activity_hold['activity_hold']=$this->Evaluate_m->activity_hold();

		$this->load->view('page',$activity_hold);
		$this->load->view('page',$manage_dashboard);
		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('page',$manage_provinces);
		$this->load->view('page',$manage_year);
		$this->load->view('household/manage/household_data',$househole);
	}

	public function househole($h_id)
	{
		$househole['househole']=$this->Manage_m->manage_detail($h_id);
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_detail_imag);
		$this->load->view('household/manage/household_detail',$househole);
	}

	public function eva_add($h_id)
	{
		$this->session->set_flashdata('exit','manage');

		$eva_add['eva_add']=$this->Evaluate_m->eva_add($h_id);
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$provinces['provinces']=$this->Manage_m->manage_provinces();
		$househole['househole']=$this->Manage_m->manage_detail($h_id);
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);
	    // echo json_encode($househole['househole']);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		

		$this->load->view('page',$manage_detail_imag);
		$this->load->view('page',$manage_year);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$eva_add);
		$this->load->view('page',$provinces);
		$this->load->view('household/manage/household_edit',$househole);
	}

	public function eva_insert()
	{
		$h_id = $this->input->post('h_id');

		$eva_insert['eva_insert']=$this->Evaluate_m->eva_insert($h_id);

		// echo json_encode($eva_insert['eva_insert']);
		$this->modal_success();

		// $this->load->view('head',$eva_insert);
		$this->load->view('household/manage/url_manage');
	}

	public function eva_update()
	{
		$h_id = $this->input->post('h_id');

		$eva_update['eva_update']=$this->Evaluate_m->eva_update($h_id);

		$this->modal_success();

		$this->load->view('head');
		$this->load->view('household/manage/url_manage',$h_id);
	}
	
	public function househole_edit($h_id)
	{
		// $this->session->set_flashdata('exit','manage');

		$eva_add['eva_add']=$this->Evaluate_m->eva_add($h_id);
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$provinces['provinces']=$this->Manage_m->manage_provinces();
		$househole['househole']=$this->Manage_m->manage_detail($h_id);
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);
	    // echo json_encode($househole['househole']);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		

		$this->load->view('page',$manage_detail_imag);
		$this->load->view('page',$manage_year);
		$this->load->view('page',$activity_nav);
		$this->load->view('head',$eva_add);
		$this->load->view('page',$provinces);
		$this->load->view('popup/success');
		$this->load->view('popup/aaa');
		$this->load->view('household/manage/household_edit',$househole);
	}

	public function househole_update()
	{
		$h_id = $this->input->post('h_id');
		$househole_up['househole_up']=$this->Manage_m->manage_update();
		$househole['househole']=$this->Manage_m->manage_detail($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);

		$this->modal_success();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_detail_imag);
		$this->load->view('popup/success');
		$this->load->view('household/manage/household_detail',$househole);
	}

	public function househole_add()
	{
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$provinces['provinces']=$this->Manage_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_year);
		$this->load->view('household/manage/household_add',$provinces);
	}

	public function househole_insert()
	{
		$this->modal_success();

		$househole['househole']=$this->Manage_m->manage_insert();
	}

	public function househole_bin($h_id)
	{
		$this->Manage_m->manage_bin($h_id);
		// $househole['househole']=$this->Manage_m->manage();
		$manage = $this->Manage_m->manage();
		$househole['househole']=$manage['household'];
		$househole['excell']=$manage['h_excell'];
		$manage_dashboard['manage_dashboard']=$this->Manage_m->manage_dashboard();
		$manage_year['manage_year']=$this->Manage_m->manage_year();
		$manage_provinces['manage_provinces']=$this->Manage_m->manage_provinces();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();
		$activity_hold['activity_hold']=$this->Evaluate_m->activity_hold();

		$this->modal_success();

		$this->load->view('page',$manage_dashboard);
		$this->load->view('page',$activity_hold);
		$this->load->view('page',$manage_provinces);
		$this->load->view('page',$manage_year);
		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		// $this->load->view('popup/success');
		$this->load->view('household/manage/url_manage');	
		// $this->load->view('household/manage/household_data',$househole);

	}

	public function househole_data_bin()
	{

		// $this->Manage_m->manage_bin($h_id);
		$househole_data_bin['househole_data_bin']=$this->Manage_m->househole_data_bin();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		$this->load->view('popup/success');
		$this->load->view('household/manage/household_bin',$househole_data_bin);
	}

	public function househole_bin_detail($h_id)
	{	
		$this->session->set_flashdata('exit','manage');

		$househole['househole']=$this->Manage_m->manage_detail($h_id);
		$manage_detail_imag['manage_detail_imag']=$this->Manage_m->manage_detail_imag($h_id);
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->load->view('page',$activity_nav);
		$this->load->view('head',$manage_detail_imag);
		$this->load->view('household/manage/household_detail',$househole);
	}

	public function househole_not_bin($h_id)
	{	

		$this->Manage_m->househole_not_bin($h_id);
		$househole_data_bin['househole_data_bin']=$this->Manage_m->househole_data_bin();
		$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

		$this->modal_success();

		$this->load->view('page',$activity_nav);
		$this->load->view('head');
		// $this->load->view('popup/success');
		// $this->load->view('household/manage/household_bin',$househole_data_bin);
		$this->load->view('household/manage/url_manage_bin');
	}

	public function dashbordMoo()
	{
		$data['budget'] = '';
		$data['tobudget'] = '';
		$data['province'] = '';
		$data['acti'] = '3';
		$data['manage_dashboard']=$this->Dashboard_m->manage_hol($data['budget'],$data['tobudget'],$data['province'],$data['acti']); //ปี/ถึงปี/จังหวัด/โครงการ
		$data['manage_year']=$this->Manage_m->manage_year();
		$data['manage_provinces']=$this->Manage_m->manage_provinces();
		$data['activity_nav']=$this->Manage_m->activity_nav();
		$data['activity_hold']=$this->Evaluate_m->activity_hold();


		$this->load->view('page',$data);
		$this->load->view('head');
		$this->load->view('dashboard/dashbordMoo');
	}

	public function househole_excell()
	{
        if ($_FILES['excell']) {
			$path = APPPATH . 'ecxell/';
            if(!file_exists($path)) mkdir($path);
            require_once APPPATH . "/third_party/PHPExcel.php";
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'xlsx|xls|csv';
            $config['remove_spaces'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            if (!$this->upload->do_upload('excell')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
            }

			if(empty($error)){
                if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }

                $inputFileName = $path . $import_xls_file;
                $csv= file_get_contents($inputFileName);
                $array = array_map("str_getcsv", explode("\n", $csv));
				foreach ($array as $key => $value) {
                    if(isset($value[1])){
                        if($value[1] != ''){
                            if($key != 0){
                                if($value['14'] == 'นราธิวาส'){
                                    $province = '76';
                                }else if($value['14'] == 'ยะลา'){
                                    $province = '75';
                                }else if($value['14'] == 'ปัตตานี'){
                                    $province = '74';
                                }else{
                                    $province = '999';
                                }


                                if($value['2'] == ''){
                                    $title_name = $value['3'];
                                    $name = explode(" ",$title_name);
                                    $rows_name = 0;
                                    foreach ($name as $key_name => $value_name) {
                                        if($value_name != ''){
                                            $name_surname[$rows_name] = $value_name;
                                            $rows_name ++;
                                        }
                                    }
                                    $j = 9;
                                    $i = 18;
                                    // list($name1,$surname)=explode(" ",$title_name);
                                    $p1 = substr($name_surname[0],0,$j);
                                    $p2 = substr($name_surname[0],0,$i);

                                    //แยกคำนำหน้าออกจากชื่อ
                                    if ($p1=="นาย"){
                                        $j = 9;
                                    }else if ($p2 == "นางสาว"){
                                        $j = 18;
                                    }else if ($p1 == "นาง"){
                                        $j = 9;
                                    }

                                    //แย่ชื่อออกจากคำนำหน้า
                                    if ($p1=="นาย"){
                                        $i = 9;
                                    }else if ($p2 == "นางสาว"){
                                        $i = 18;
                                    }else if ($p1 == "นาง"){
                                        $i = 9;
                                    }
                                
                                    $title = substr($name_surname[0],0,$j);
                                    $name_surname[0] = substr($name_surname[0],$i);
                                    // echo$title."<br>";
                                    // echo$name_surname[0]."<br>";
                                    // echo$name_surname[1]."<br>";

                                }else{
                                    $title = $value['2'];

                                    $h_name = $value['3'];
                                    $name = explode(" ",$h_name);
                                    $rows_name = 0;
                                    foreach ($name as $key_name => $value_name) {
                                        if($value_name != ''){
                                            $name_surname[$rows_name] = $value_name;
                                            $rows_name ++;
                                        }
                                    }
                                }

                                if($title == 'นาย'){
                                    $gender = 'ชาย';
                                }else{
                                    $gender = 'หญิง';
                                }

                                
                                $household[$key]['h_row_budget'] = $value['1'];
                                $household[$key]['h_title'] = $title;
                                $household[$key]['h_name'] = $name_surname[0];
                                $household[$key]['h_surname'] = $name_surname[1];
                                $household[$key]['h_house_number'] = $value['4'];
                                $household[$key]['h_age'] = $value['5'];
                                $household[$key]['h_gender'] = $gender;
                                $household[$key]['h_education'] = $value['7'];
                                $household[$key]['h_alley'] = $value['8'];
                                $household[$key]['h_street'] = $value['9'];
                                $household[$key]['h_swine'] = $value['10'];
                                $household[$key]['h_village'] = $value['11'];
                                $household[$key]['h_parish'] = $value['12'];
                                $household[$key]['h_district'] = $value['13'];
                                $household[$key]['h_province'] = $province;
                                $household[$key]['h_latitude'] = $value['15'];
                                $household[$key]['h_longitude'] = $value['16'];
                                $household[$key]['h_tel'] = $value['17'];
                                $household[$key]['h_revenue'] = $value['18'];
                                $household[$key]['h_occupation'] = $value['19'];
                                $household[$key]['h_status'] = '1';
                                $household[$key]['h_status_past'] = '1';
                                $household[$key]['h_annotition'] = '';
                                $household[$key]['h_around'] = '';
                                $household[$key]['h_status_bin'] = '1';  
                            }
                        }
                    }
                }
				$data['household'] = $household;

				$activity_nav['activity_nav']=$this->Manage_m->activity_nav();

				$this->load->view('head',$activity_nav);
				$this->load->view('popup/success');
				$this->load->view('household/manage/excell_check',$data);
            }else{
				echo'บันทึกข้อมูลไม่เสำเส็จ';
            }
		}else{
			echo'บันทึกข้อมูลไม่เสำเส็จ';
		}
        // $this->load->view('import');
	}

	public function import_check()
	{
		// echo json_encode($manage_dashboard['manage_dashboard']);
	}
}
