<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {


public function __construct()
{
	parent::__construct();
	$this->load->helper('url'); // Load URL Helper for base_url() 
	$this->load->helper('html'); // Load HTML Helper for img()

   /* 
	if(!$this->session->userdata('logged_in'))
	{
		redirect('', 'refresh');
	}
*/

}	
	
public function index()
{
    $permission['PERMIS_LABEL'] = "Adminstrate";
    $data['permission'] = $permission;
    $this->load->view('html/admin/templates/header',$data);
  //  $this->load->view('html/admin/templates/sidebar');
    $this->load->view('html/admin/templates/menu_footer.php');
    $this->load->view('html/admin/templates/top_navigation.php');
    $this->load->view('html/admin/upload');
    $this->load->view('html/admin/templates/footer');

}

public function upload_files()
{
$path = "images/";
$valid_file_formats = array("jpg", "png", "gif", "bmp","jpeg","pdf");


if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_FILES['photoimg']['name'];
    $size = $_FILES['photoimg']['size'];
    $user_id = 1;
    //print_R($_POST);die;
    if(strlen($name)) {
        list($txt, $ext) = explode(".", $name);
        if(in_array($ext,$valid_file_formats)) 
        {
            if($size<(1024*1024)) 
            {
                
                $image_name = time().'_'.$user_id.".".$ext;
                $tmp = $_FILES['photoimg']['tmp_name'];
                if(move_uploaded_file($tmp, $path.$image_name)){
                    echo json_encode(array('error'=>0, 'msg' => $path.$image_name, 'txt' =>$this->input->post("mytext")));
                }
            }
        }
    }
/////////////
$name = $_FILES['photoimg1']['name'];
$size = $_FILES['photoimg1']['size'];
$user_id = 2;
//print_R($_POST);die;
if(strlen($name)) {
    list($txt, $ext) = explode(".", $name);
    if(in_array($ext,$valid_file_formats)) 
    {
        if($size<(1024*1024)) 
        {
            
            $image_name = time().'_'.$user_id.".".$ext;
            $tmp = $_FILES['photoimg1']['tmp_name'];
            if(move_uploaded_file($tmp, $path.$image_name)){
                echo json_encode(array('error'=>0, 'msg' => $path.$image_name));
            }
        }
    }
}

//////////
$name = $_FILES['photoimg2']['name'];
$size = $_FILES['photoimg2']['size'];
$user_id = 3;
//print_R($_POST);die;
if(strlen($name)) {
    list($txt, $ext) = explode(".", $name);
    if(in_array($ext,$valid_file_formats)) 
    {
        if($size<(1024*1024)) 
        {
            
            $image_name = time().'_'.$user_id.".".$ext;
            $tmp = $_FILES['photoimg2']['tmp_name'];
            if(move_uploaded_file($tmp, $path.$image_name)){
                echo json_encode(array('error'=>0, 'msg' => $path.$image_name));
            }
        }
    }
}

//////////

}
}
/////////
}
