<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inspection extends CI_Controller {

public function __construct()
{
	parent::__construct();
//	$this->load->model('users_model');
	$this->load->helper('url'); // Load URL Helper for base_url() 
	$this->load->helper('html'); // Load HTML Helper for img()

	if(!$this->session->userdata('logged_in'))
	{
		redirect('', 'refresh');
	}

	$this->load->model('Authorisation_model');
	$this->permission = $this->Authorisation_model->get_permIDs_by_user($_SESSION['logged_in']['id']);
	
	if(!$this->Authorisation_model->is_inspect($this->permission)){	
		exit('Permission Denied!');
	}
}	

	public function save()
	{

		$candidate = array();
		$degree_records = array();
		$is_candidate_post = 0;
		$result1 = '';
		$result2 = '';
		$result3 = '';
		$result4 = '';
		$return_id = 0;

		if($this->input->post("candidate_name_kh"))
		{
			$this->load->model('Candidates_model');
			$candidate["candidate_name_kh"] = $this->input->post("candidate_name_kh");
			$candidate["candidate_name_en"] = $this->input->post("candidate_name_en");
			$candidate["candidate_dob"] = $this->input->post("candidate_dob");	
			$candidate['modidate'] = date('d-m-Y g:i a');
			$temp_result = $this->Candidates_model->insert($candidate);
			$return_id = $temp_result["return_id"];
		//if succesfully saved profile in the DB
			$is_candidate_post = 1;
			$result1 = json_encode($temp_result);
		}

		if($is_candidate_post == 1){

			$this->load->model('Candidate_degree_records_model');
			
			if($this->input->post("is_ba")){
				$ba = array();
				$ba["candidate_id"]	= $return_id;
				$ba["degree_type_id"] = "1";
				$ba["degree_school"] = $this->input->post("ba_institution")?$this->input->post("ba_institution"):"";
				$ba["degree_date"] = $this->input->post("date_of_ba")?$this->input->post("date_of_ba"):"";
				$ba["attachment_path"] = isset($_FILES['ba_file'])?$_FILES['ba_file']['name']:"";

				if($ba["attachment_path"]){
					$ba["attachment_path"]  = $this->upload_file("ba_file","ba_file_candidate_".$ba["candidate_id"]);
				}
				$this->Candidate_degree_records_model->insert($ba);
			}

			if($this->input->post("is_ma")){
				$ma = array();
				$ma["candidate_id"]	= $return_id;
				$ma["degree_type_id"] = "2";
				$ma["degree_school"] = $this->input->post("ma_institution")?$this->input->post("ma_institution"):"";
				$ma["degree_date"] = $this->input->post("date_of_ma")?$this->input->post("date_of_ma"):"";
				$ma["attachment_path"] = isset($_FILES['ma_file'])?$_FILES['ma_file']['name']:"";

				if($ma["attachment_path"]){
					$ma["attachment_path"]  = $this->upload_file("ma_file","ma_file_candidate_".$ma["candidate_id"]);
				}
				$this->Candidate_degree_records_model->insert($ma);
			}
			
			if($this->input->post("is_phd")){
				$phd = array();
				$phd["candidate_id"] = $return_id;
				$phd["degree_type_id"] = "3";
				$phd["degree_school"] = $this->input->post("phd_institution");
				$phd["degree_date"] = $this->input->post("date_of_phd");
				$phd["attachment_path"] = isset($_FILES['phd_file'])?$_FILES['phd_file']['name']:"";

				if($phd["attachment_path"]){
					$phd["attachment_path"]  = $this->upload_file("phd_file","phd_file_candidate_".$phd["candidate_id"]);
				}
				$this->Candidate_degree_records_model->insert($phd);

			}

			if($this->input->post("institution")){ //tab content 3
				$this->load->model('Candidate_experience_criteria_model');
				$exp = array();
				$exp['candidate_id'] = $return_id;
				$exp['institution'] = $this->input->post("institution");
				$exp['exp_detail'] = $this->input->post("exp_detail");
				$exp['modidate'] = date('d-m-Y g:i a');

				$result3 = $this->Candidate_experience_criteria_model->insert($exp);
			}

			if($this->input->post("applying_date")){
				$this->load->model('Candidate_progress_model');
				$progress = array();
				$progress['candidate_id'] = $return_id;
				$progress['applying_date'] = $this->input->post("applying_date");
				$progress['is_inspection_assigned'] = $this->input->post("is_inspection_assigned");
				$progress['composition_name1'] = $this->input->post("composition_name1");
				$progress['composition_name2'] = $this->input->post("composition_name2");
				$progress['composition_name3'] = $this->input->post("composition_name3");
				$progress['date_of_inspection_submission'] = $this->input->post("date_of_inspection_submission");
				$progress['inspection_decision_no'] = $this->input->post("inspection_decision_no");
				$progress['date_of_inspection_decision'] = $this->input->post("date_of_inspection_decision");
				//put report file here
				$progress["inspection_report_file"] = isset($_FILES['inspection_report_file'])?$_FILES['inspection_report_file']['name']:"";				
				$progress['inspection_report_des'] = $this->input->post("inspection_report_des");
				$progress['date_of_interview'] = $this->input->post("date_of_interview");
				$progress['interview_file'] = isset($_FILES['interview_file'])?$_FILES['interview_file']['name']:"";
				$progress['interview_report_des'] = $this->input->post("interview_report_des");
				$progress['date_of_board_meeting'] = $this->input->post("date_of_board_meeting");
				$progress['meeting_outcome_approval'] = $this->input->post("meeting_outcome_approval");
				$progress['meeting_approval_no'] = $this->input->post("meeting_approval_no");
				$progress['date_of_meeting_approval'] = $this->input->post("date_of_meeting_approval");
				$progress['modidate'] = date('d-m-Y g:i a');

				if($progress["inspection_report_file"]){
					$progress["inspection_report_file"]  = $this->upload_file("inspection_report_file","inspection_report_candidate_".$progress['candidate_id']);
				}
				if($progress["interview_file"]){
					$progress["interview_file"]  = $this->upload_file("interview_file","interview_file_candidate_".$progress['candidate_id']);
				}
				error_log(date('d-m-Y g:i a')." ".$progress."\r\n", 3, "candidate.log");	
				$result4 = $this->Candidate_progress_model->insert($progress);	
			}
		}


		$result['candidate'] = $result1; 
		$result['experience'] = $result3; 
		$result['progress'] = $result4; 
		
		echo json_encode($result);
	}	

	public function upload_file($filename,$newname)
	{

				$path = "images/";
				$valid_file_formats = array("jpg", "png", "gif", "bmp","jpeg","pdf");
				$name = $_FILES[$filename]['name'];
				$size = $_FILES[$filename]['size'];
				$user_id = 1;
				//print_R($_POST);die;
				if(strlen($name)) {
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_file_formats)) 
					{
						if($size<(1024*1024)) 
						{						
							//$image_name = time().'_'.$user_id.".".$ext;
							$image_name = $newname.".".$ext;
							$tmp = $_FILES[$filename]['tmp_name'];
							if(move_uploaded_file($tmp, $path.$image_name)){
								return $path.$image_name;
							}
						}
					}
				}
		return false;		
	}

	public function index()
	{

		//$data['page_title'] = "Lawyers - Add New Lawyer";
		$this->load->model('Candidates_model');
		$data['page_title'] = $this->lang->line('inspection_list');
		$data['permission'] = $this->permission;
		$data['candidates'] = $this->Candidates_model->get_data();
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar', $data);
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/inspection_list');
		$this->load->view('html/admin/templates/footer');
	}
	
	public function index1()
	{

		//$data['page_title'] = "Lawyers - Add New Lawyer";
		$data['page_title'] = $this->lang->line('inspection_list');
		$data['permission'] = $this->permission;
		$this->load->view('html/admin/inspection_list',$data);
	}	
	
}
