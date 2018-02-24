<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documents extends CI_Controller {

public function __construct()
{
	parent::__construct();
/*	if(!$this->session->userdata('logged_in'))
	{
		redirect('', 'refresh');
	}*/
}	

public function view_doc_status()
{
		$data['page_title'] = $this->lang->line('inspection_menu').' - '.$this->lang->line('processing_doc');
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/document_status');
		$this->load->view('html/admin/templates/footer');	
	
}
	
public function send_to_inspection()
{
	
	
}

public function send_to_admin()
{
	
	
}
	
	
}
