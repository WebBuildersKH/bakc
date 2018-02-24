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
	
	public function create_user()
	{
		if($this->input->post('username')&&$this->input->post('passwd')&&$this->input->post('staffid'))	
		{	$data = array();      // array to pass back data
			$data['username'] = $this->input->post('username');
			$data['passwd'] = $this->input->post('passwd');
			$data['staffid'] = $this->input->post('staffid');
			$data['name'] = $this->input->post('name');
			$data['gender'] = $this->input->post('gender');
			$data['message'] = "posted successfully!";
			
			echo json_encode($data); //reply back to client
		}
	}
	public function index()
	{

		//$data['page_title'] = "Manage Users - User List";
		$data['page_title'] = $this->lang->line('users_menu').' - '.$this->lang->line('users_menu_list');
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/users');
		$this->load->view('html/admin/templates/footer');
	}
	
	public function new_user_form()
	{
		$data['page_title'] = $this->lang->line('users_menu').' - '.$this->lang->line('users_menu_add');
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/new_user_form');
		$this->load->view('html/admin/templates/footer');
	}
	
	public function view_user_roles()
	{
		$data['page_title'] = $this->lang->line('users_menu').' - '.$this->lang->line('users_auth_list');
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/user_roles');
		$this->load->view('html/admin/templates/footer');
		
		
	}
	
	public function change_passwd_form()
	{
		$data['page_title'] = $this->lang->line('users_menu').' - '.$this->lang->line('change_passwd');
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/change_passwd');
		$this->load->view('html/admin/templates/footer');
				
	}
	
	public function change_passwd()
	{
	if($this->input->post('username')&&$this->input->post('passwd')&&$this->input->post('newpasswd'))	
	{	$data = array();      // array to pass back data
		$data['username'] = $this->input->post('username');
		$data['passwd'] = $this->input->post('passwd');
		$data['newpasswd'] = $this->input->post('newpasswd');
		$data['message'] = "posted successfully!";
		
		echo json_encode($data); //reply back to client
	}
	}
	
	
}
