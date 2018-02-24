<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inspection extends CI_Controller {

public function __construct()
{
	parent::__construct();
//	$this->load->model('users_model');
	$this->load->helper('url'); // Load URL Helper for base_url() 
	$this->load->helper('html'); // Load HTML Helper for img()
	//$this->load->library("pagination");
/*	if(!$this->session->userdata('logged_in'))
	{
		redirect('', 'refresh');
	}*/
}	

	public function save()
	{
/*		if($this->input->post('staffid') && $this->input->post('username') && $this->input->post('password'))
		{
				$data['staffid'] = $this->input->post('staffid');
				$data['username'] = $this->input->post('username');
				$data['password'] = $this->input->post('password');
				$data['role'] = $this->input->post('role');
				date_default_timezone_set("Pacific/Auckland");
				$data['modidate'] = date('d-m-Y g:i a');
				$data['isActive'] = 1; 
				echo $this->users_model->insert($data);			
		}*/


	}	
	public function index()
	{

		//$data['page_title'] = "Lawyers - Add New Lawyer";
		$data['page_title'] = $this->lang->line('inspection_list');
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/inspection_list');
		$this->load->view('html/admin/templates/footer');
	}
	
	
	
}