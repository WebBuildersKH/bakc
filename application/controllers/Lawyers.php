<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lawyers extends CI_Controller {
private $permission = array();

public function __construct()
{
	parent::__construct();
	$this->load->helper('url'); // Load URL Helper for base_url() 
	$this->load->helper('html'); // Load HTML Helper for img()
	if(!$this->session->userdata('logged_in'))
	{
		redirect('', 'refresh');
	}
	$this->load->model('Authorisation_model');
	$this->permission = $this->Authorisation_model->get_permIDs_by_user($_SESSION['logged_in']['id']);
	
	if(!$this->Authorisation_model->is_admin($this->permission)){	
		exit('Permission Denied!');
	}

}	

//SAVE
public function save()
{
	$lawyer = array();
	$result = array();
	$result1 = "";
	$result2 = "";
	$result3 = "";
	$result4 = "";
	$return_id = 0;
	$is_profile_post = 0; 

	//Check if received POST from Lawyer's Profile
	if($this->input->post("nameeng") && $this->input->post("namekh") && $this->input->post("dob") && $this->input->post("id"))
	{
		$this->load->model('Lawyers_model');
		$lawyer['lawyer_name_en'] = $this->input->post("nameeng");
		$lawyer['lawyer_name_kh'] = $this->input->post("namekh");
		$lawyer['lawyer_dob'] = $this->input->post("dob");
		$lawyer['modidate'] = date('d-m-Y g:i a');
		$lawyer['lawyer_code'] = $this->input->post("id");
		$temp_result = $this->Lawyers_model->insert($lawyer);
		//if succesfully saved profile in the DB
		if($temp_result["message"]=="success"){
			$return_id = $temp_result["return_id"];
			$is_profile_post = 1;
			$result1 = json_encode($temp_result);
			error_log(date('d-m-Y g:i a')." ".$result1."\r\n", 3, "audit.log");	
		}		
	}else{
		$error["message"] = "Information is required!";
		$result1 = json_encode($error);
	}
	//Check if received POST from Discipline
	if($is_profile_post == 1)
	{
		//Insert Professional Conditions
		//It still inserts data into DB regardless the non-value data
		$this->load->model('Professional_conditions_model');
		$pc = array();

		$pc['lawyer_id'] = $return_id; 
		//2.1
		$pc['date_of_completion'] = $this->input->post('date_of_completion');
		$pc['cert_completion_no'] = $this->input->post('cert_completion_no');	
		$pc['date_of_prob'] = $this->input->post('date_of_prob');
		$pc['is_pursue_study'] = $this->input->post('pursue_study');
		$pc['date_of_fulltime'] = $this->input->post('date_of_fulltime');
		$pc['fulltime_no'] = $this->input->post('fulltime_no');	
		//2.2
		$pc['date_of_righteousness'] = $this->input->post('fairness_date');
		$pc['date_end_of_righteousness'] = $this->input->post('fairness_date_end');
		//	$pc['date_of_without_righteousness'] = $data['fairness_verdict'];
		$pc['cert_of_pro_accr_no'] = $this->input->post('cert_of_pro_accr_no');
		$pc['cert_of_pro_accr_date'] = $this->input->post('cert_of_pro_accr_date');
		$pc['date_of_prob_righteousness'] = $this->input->post('probation_date');
		$pc['no_prob_righteousness'] = $this->input->post('probabtion_verdict');
		$pc['date_of_no_prob_righteousness'] = $this->input->post('date_of_probabtion_verdict');
		$pc['fulltime_approval'] = $this->input->post('fulltime_verdict');
		$pc['date_of_fulltime_approval'] = $this->input->post('fulltime_verdict_date');		
		//2.3
		$pc['firm_name'] = $this->input->post('firm_name');
		$pc['authorisation_number'] = $this->input->post('approval_id');
		$pc['permission_number'] = $this->input->post('approval_number');
		$pc['firm_validity'] = $this->input->post('date_of_validity');
		//2.4
		$pc['out_bar_validity'] = $this->input->post('date_of_out_validity');
		$pc['out_bar_decision'] = $this->input->post('date_of_verdict');
		$pc['out_list_validity'] = $this->input->post('out_list_validity');
		$pc['out_list_reason'] = $this->input->post('out_list_reason');
		$pc['out_bar_no'] = $this->input->post('verdict_no');
		$pc['no_pro_no'] = $this->input->post('no_pro_no');
		$pc['date_of_no_pro'] = $this->input->post('date_of_no_pro');
		//2.5
		$pc['prohibition_statement'] = $this->input->post('final_statement');
		$pc['date_of_prohibition'] = $this->input->post('date_of_final_statement');
		$pc['prohibition_reason'] = $this->input->post('final_statement_reason');

		$pc['modidate'] = date('d-m-Y g:i a');

		error_log(date('d-m-Y g:i a')." ".json_encode($pc)."\r\n", 3, "audit.log");
		$result4 = json_encode($this->Professional_conditions_model->insert($pc));

		if($this->input->post('class_hours')&&$this->input->post('subjects'))
		{
			
			$this->load->model('Continuing_education_model');

			$hour_list = array();
			$i=0;
			$class_hours = rtrim($this->input->post('class_hours'),",");
			$class_hours_array = explode(",",$class_hours);
			error_log(date('d-m-Y g:i a')." SUBJECTS:".json_encode($class_hours_array)."\r\n", 3, "audit.log");

			foreach($class_hours_array as $hour)
			{
				$hour_list[$i] = array();
				$hour_list[$i]['lawyer_id'] = $return_id;	
				$hour_list[$i]['number_of_hours'] = $hour;				
			$i++;
			}

			$subject_list = array();
			$i=0;
			$subjects = rtrim($this->input->post('subjects'));
			$subjects_array = explode(",",$subjects);

			foreach($subjects_array as $subject){
				if($subject == ""){
					$subject_list[$i]['subject'] = $subject;
					$subject_list[$i]['lawyer_id'] = "0";
					$subject_list[$i]['number_of_hours'] = "0";
					$i++;
				}else{
					$subject_list[$i]['subject'] = $subject;
					$subject_list[$i]['lawyer_id'] = $hour_list[$i]['lawyer_id'];
					$subject_list[$i]['number_of_hours'] = $hour_list[$i]['number_of_hours'];
					$i++;
				}
			
			}

			$edu = array();
			foreach($subject_list as $list){
				if($list['lawyer_id']){
					$edu['lawyer_id'] = $list['lawyer_id'];	
					$edu['number_of_hours'] = $list['number_of_hours'];
					$edu['subject'] = $list['subject'];
					$edu['date_of_study'] = date('d-m-Y g:i a');	
					$edu['modidate'] = date('d-m-Y g:i a');
					$result2 = json_encode($this->Continuing_education_model->insert($edu));
					error_log(date('d-m-Y g:i a')." ".json_encode($edu)."\r\n", 3, "audit.log");
				}
			}
			
		}


		if($this->input->post('is_sued'))
		{
			$discipline = array();
			$this->load->model('Discipline_model');
			//$discipline['lawyer_code'] = $data['id'];
			$discipline['lawyer_id'] = $return_id;
			$discipline['complaints_desc'] = $this->input->post('complaint_des');
			$discipline['is_presidential_reconciliation'] = $this->input->post('end_compliant_by_president');
			$discipline['is_inspection'] = $this->input->post('to_be_inspected');
			$discipline['complaints_file'] = "";
			$discipline['cd_id'] = $this->input->post('council_decision')?$this->input->post('council_decision'):0;
			$discipline['modidate'] = date('d-m-Y g:i a');
			error_log(date('d-m-Y g:i a')." ".json_encode($discipline)."\r\n", 3, "audit.log");
			$result3 = json_encode($this->Discipline_model->insert($discipline));
		}
	}

	$result['lawyers'] = $result1;
	$result['education'] = $result2;
	$result['discipline'] = $result3;
	$result['conditions'] = $result4;
	error_log(date('d-m-Y g:i a')." ".json_encode($result)."\r\n", 3, "audit.log");
	echo json_encode($result);
}	
//END SAVE
//UPDATE LAWYER
public function update()
{

	$data = $_POST['data'];
	$lawyer = array();
	$result = array();
	$result1 = "";
	$result2 = "";
	$result3 = "";
	$result4 = "";

	//Check if received POST from Lawyer's Profile
	if($data['name_en']&&$data['name_kh']&&$data['dob']&&$data['lawyer_code'])
	{
		$this->load->model('Lawyers_model');
	//	$lawyer['id'] = $data['lawyer_id'];
		$lawyer['lawyer_code'] = $data['lawyer_code'];
		$lawyer['lawyer_name_en'] = $data['name_en'];
		$lawyer['lawyer_name_kh'] = $data['name_kh'];
		$lawyer['lawyer_dob'] = $data['dob'];
		$lawyer['modidate'] = date('d-m-Y g:i a');

		error_log(date('d-m-Y g:i a').":UPDATE-LAWYER: ".json_encode($lawyer)."\r\n", 3, "audit.log");
		$temp_result = $this->Lawyers_model->update($data['lawyer_id'],$lawyer);
		//if succesfully saved profile in the DB
		$result1 = json_encode($temp_result);
				
	}

	//START Professional Conditions
	if($data['condition_id'])
	{
		$this->load->model('Professional_conditions_model');
		$pc = array();
		//2.1
		$pc['date_of_completion'] = $data['date_of_completion'];
		$pc['cert_completion_no'] = $data['cert_completion_no'];
		$pc['date_of_prob'] = $data['date_of_prob'];
		$pc['is_pursue_study'] = $data['is_pursue_study'];
		$pc['date_of_fulltime'] = $data['date_of_fulltime'];
		$pc['fulltime_no'] = $data['fulltime_no'];
		//2.2
		$pc['cert_of_pro_accr_no'] = $data['cert_of_pro_accr_no'];
		$pc['cert_of_pro_accr_date'] = $data['cert_of_pro_accr_date'];
		$pc['date_of_righteousness'] = $data['date_of_righteousness'];
	//	$pc['date_of_without_righteousness'] = $data['date_of_without_righteousness'];
		$pc['date_of_prob_righteousness'] = $data['date_of_prob_righteousness'];
		$pc['date_of_no_prob_righteousness'] = $data['date_of_no_prob_righteousness'];
		$pc['no_prob_righteousness'] = $data['no_prob_righteousness'];
		$pc['date_end_of_righteousness'] = $data['date_end_of_righteousness'];
		$pc['fulltime_approval'] = $data['fulltime_approval'];
		$pc['date_of_fulltime_approval'] = $data['date_of_fulltime_approval'];
		//2.3
		$pc['firm_name'] = $data['firm_name'];
		$pc['authorisation_number'] = $data['authorisation_number'];
		$pc['permission_number'] = $data['permission_number'];
		$pc['firm_validity'] = $data['firm_validity'];
		//2.4
		$pc['out_bar_validity'] = $data['out_bar_validity'];
		$pc['out_bar_no'] = $data['out_bar_no'];
		$pc['out_bar_decision'] = $data['out_bar_decision'];
		$pc['out_list_validity'] = $data['out_list_validity'];
		$pc['out_list_reason'] = $data['out_list_reason'];

		$pc['no_pro_no'] = $data['no_pro_no']; 
		$pc['date_of_no_pro'] = $data['date_of_no_pro'];
		//2.5
		$pc['prohibition_statement'] = $data['prohibition_statement'];
		$pc['date_of_prohibition'] = $data['date_of_prohibition'];
		$pc['prohibition_reason'] = $data['prohibition_reason'];
		$pc['modidate'] = date('d-m-Y g:i a');

		error_log(date('d-m-Y g:i a').":UPDATE-PC:".json_encode($pc)."\r\n", 3, "audit.log");
		$result4 = json_encode($this->Professional_conditions_model->update($data['condition_id'],$pc));
		
	} //END Professional Conditions
	
	//START Continuing Education
	error_log(date('d-m-Y g:i a').":SUBJECTSC:".json_encode($data['subjects'])."\r\n", 3, "audit.log");
	if($data['edu_ids']&&$data['subjects']&&$data['number_of_hours'])
	{
		$this->load->model('Continuing_education_model');

		$hour_list = array();
		$i=0;
		foreach($data['number_of_hours'] as $hour) //start foreach
		{
			$hour_list[$i] = array();
			$hour_list[$i]['edu_id'] = $data['edu_ids'][$i]; 
			$hour_list[$i]['lawyer_id'] = $data['lawyer_id'];	
			$hour_list[$i]['number_of_hours'] = $hour;
		$i++;
		} //end foreach

		$subject_list = array();
		$i=0;
		foreach($data['subjects'] as $subject){ //start foreach
			if($subject == ""){
				$subject_list[$i]['id'] = $hour_list[$i]['edu_id'];
				$subject_list[$i]['subject'] = $subject;
				$subject_list[$i]['lawyer_id'] = "0";
				$subject_list[$i]['number_of_hours'] = "0";
				$i++;
			}else{
				$subject_list[$i]['id'] = $hour_list[$i]['edu_id'];
				$subject_list[$i]['subject'] = $subject;
				$subject_list[$i]['lawyer_id'] = $hour_list[$i]['lawyer_id'];
				$subject_list[$i]['number_of_hours'] = $hour_list[$i]['number_of_hours'];
				$i++;
			}			
		} //end foreach

		$edu = array();
		foreach($subject_list as $list){ //start foreach
			if($list['lawyer_id']){
				$edu['lawyer_id'] = $list['lawyer_id'];	
				$edu['number_of_hours'] = $list['number_of_hours'];
				$edu['subject'] = $list['subject'];
				$edu['date_of_study'] = date('d-m-Y g:i a');	
				$edu['modidate'] = date('d-m-Y g:i a');
				if($list['id']){
					//update
					error_log(date('d-m-Y g:i a').":UPDATE-EDU:".json_encode($edu)."\r\n", 3, "audit.log");
					$this->Continuing_education_model->update($list['id'],$edu);
					
				}else{
					//Add new
					error_log(date('d-m-Y g:i a').":INSERT-EDU:".json_encode($edu)."\r\n", 3, "audit.log");
					$this->Continuing_education_model->insert($edu);
					
				}
			}
		} //end forearch
			
	} //END Conditional Education

/*
	if($data['is_sued'])
		{
			$discipline = array();
			$this->load->model('Discipline_model');
			//$discipline['lawyer_code'] = $data['id'];
			$discipline['lawyer_id'] = $return_id;
			$discipline['complaints_desc'] = $data['complaint_des'];
			$discipline['is_presidential_reconciliation'] = $data['end_compliant_by_president'];
			$discipline['is_inspection'] = $data['to_be_inspected'];
			$discipline['complaints_path'] = "";
			$discipline['cd_id'] = $data['council_decision']?$data['council_decision']:0;
			$discipline['modidate'] = date('d-m-Y g:i a');
			error_log(date('d-m-Y g:i a')." ".json_encode($discipline)."\r\n", 3, "audit.log");
			$result3 = json_encode($this->Discipline_model->insert($discipline));
		}
	*/

	//$result['lawyers'] = $result1;
	//$result['education'] = $result2;
	//$result['discipline'] = $result3;
	//$result['conditions'] = $result4;
	$result["message"] = "Successfully updated!";
	error_log(date('d-m-Y g:i a').":UPDATE:".json_encode($result)."\r\n", 3, "audit.log");
	echo json_encode($result);
}

//END UPDATE
	public function index()
	{

		$data['page_title'] = $this->lang->line('lawyer_menu').' - '.$this->lang->line('lawyer_menu_add');
		$data['permission'] = $this->permission;
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/new_lawyer_form1');
		$this->load->view('html/admin/templates/footer');
	}
	
	public function view_profiles()
	{

		$this->load->model('Lawyers_model');
		$this->load->model('Council_decision_model');
		$data['page_title'] = $this->lang->line('lawyer_menu').' - '.$this->lang->line('lawyer_menu_profiles');
		$data['permission'] = $this->permission;
		$data['lawyers'] = $this->Lawyers_model->get_data();
		$data['council_decision'] = $this->Council_decision_model->get_data();
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/profiles');
		$this->load->view('html/admin/templates/footer');		
		
	}

	public function view_profile($id)
	{
		$this->load->model('Lawyers_model');
		$this->load->model('Continuing_education_model');
		$this->load->model('Professional_conditions_model');
		$this->load->model('Discipline_model');
		$data['page_title'] = $this->lang->line('lawyer_menu').' - '.$this->lang->line('lawyer_menu_profiles');
		$data['permission'] = $this->permission;
		$data['lawyer'] = $this->Lawyers_model->get_data_by_id($id);
		$data['conditions'] = $this->Professional_conditions_model->get_data_by_id($id);
		$data['education'] = $this->Continuing_education_model->get_data_by_id($id);
		$data['discipline'] = $this->Discipline_model->get_data_by_lawyer_id($id);
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/view_profile');
		$this->load->view('html/admin/templates/footer');		
		
	}

	public function view_edit_profile($id)
	{
		$this->load->model('Lawyers_model');
		$this->load->model('Continuing_education_model');
		$this->load->model('Professional_conditions_model');
		$this->load->model('Discipline_model');
		$this->load->model('Council_decision_model');

		$data['page_title'] = $this->lang->line('lawyer_menu').' - '.$this->lang->line('lawyer_menu_profiles');
		$data['permission'] = $this->permission;
		$data['lawyer'] = $this->Lawyers_model->get_data_by_id($id);
		$data['conditions'] = $this->Professional_conditions_model->get_data_by_id($id);
		$data['education'] = $this->Continuing_education_model->get_data_by_id($id);
		$data['discipline'] = $this->Discipline_model->get_data_by_lawyer_id($id);
		$data['council_decision'] = $this->Council_decision_model->get_data();
		$data['permission'] = $this->permission;
		$data['id'] = $id;
		$this->load->view('html/admin/modal_pages/edit_profile_form_modal',$data);
	//	$this->load->view('html/admin/templates/header', $data);
	//	$this->load->view('html/admin/edit_profile',$data);
	//	$this->load->view('html/admin/templates/footer');
	}

	public function search()
	{
		
		if($_POST['keyword']){
			$keyword = strval($_POST['keyword']);
			$this->load->model('Lawyers_model');
			$result = $this->Lawyers_model->search($keyword);
			error_log(date('d-m-Y g:i a')." ".json_encode($result)."\r\n", 3, "hello.log");
			echo json_encode($result);
		}
	}

	public function load_data_table()
	{
		$this->load->model('Lawyers_model');
		$data['lawyers'] = $this->Lawyers_model->get_data();
		$this->load->view('html/admin/loads/load_lawyer_table',$data);
	} 
}
