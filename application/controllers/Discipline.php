<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discipline extends CI_Controller {
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
	$this->load->model('Discipline_model');
}	

	public function index()
	{
		$this->load->model('Lawyers_model');
		$this->load->model('Council_decision_model');
		$data['page_title'] = $this->lang->line('discipline_menu').' - '.$this->lang->line('discipline_menu');
		$data['permission'] = $this->permission;
		$data['discipline_list'] =  $this->Discipline_model->get_data();
		$data['lawyers'] =  $this->Lawyers_model->get_data();
		$data['council_decision'] = $this->Council_decision_model->get_data();

		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/disciplinary_action');
		$this->load->view('html/admin/templates/footer');
	}
	
	public function search($id)
	{
		$this->load->model('Council_decision_model');
		$data['discipline'] =  $this->Discipline_model->get_data_by_id($id);
		$data['council_decision'] = $this->Council_decision_model->get_data();
		$this->load->view('html/admin/modal_pages/edit_disc_form_modal',$data);
	//	echo json_encode($result);
	}

	public function save()
	{
		$data = $_POST['data'];
		if($data['lawyer_id']){
			$disc = array();
			$disc['lawyer_id'] = $data['lawyer_id'];
			$disc['complaints_desc'] = $data['complaints_desc'];
			$disc['is_presidential_reconciliation'] = $data['is_presidential_reconciliation'];
			$disc['is_inspection'] = $data['is_inspection'];
			$disc['complaints_path'] = " ";			
			$disc['cd_id'] = $data['cd_id'];
			$disc['modidate'] = date('d-m-Y g:i a');
		//	error_log(json_encode($disc),3,"discipline.log");
			$result = $this->Discipline_model->insert($disc);			
			echo json_encode($result);

		}

	}

	public function update()
	{
		$data = $_POST['data'];
		if($data['id']){
			$disc = array();
			$disc['complaints_desc'] = $data['complaints_desc'];
			$disc['is_presidential_reconciliation'] = $data['is_presidential_reconciliation'];
			$disc['is_inspection'] = $data['is_inspection'];
			$disc['cd_id'] = $data['cd_id'];
			$disc['modidate'] = date('d-m-Y g:i a');

			$result = $this->Discipline_model->update($data['id'],$disc);			
			echo json_encode($result);

		}

	}

}
