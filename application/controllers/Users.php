<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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

/*		$data['main_content'] = 'users.php';
		$data['userList'] = $this->users_model->get_data();
		$data['roleList'] = $this->users_roles_model->get_data();
		$data['staffList'] = $this->staff_model->get_data();
		$data['user_menu_class'] = 'class="active"';*/
		//$this->load->view('html/admin/templates/header', $data);
		$data['page_title'] = "User List";
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/users');
		$this->load->view('html/admin/templates/footer');
	}
	
	public function new_user_form()
	{
		$data['page_title'] = "Add New User";
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/new_user_form');
		$this->load->view('html/admin/templates/footer');
	}
	
	public function view_user_roles()
	{
		$data['page_title'] = "User Roles";
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/user_roles');
		$this->load->view('html/admin/templates/footer');
		
		
	}
	
}
