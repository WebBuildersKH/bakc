<?php

class Users_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	function login($username, $password)
	{
	   $this->db->select('id, user_name, password');
	   $this->db->from('bakc_users');
	   $this->db->where('user_name', $username);
	   $this->db->where('password', md5($password));
	   $this->db->limit(1);
	 
	   $query = $this->db->get();
	 
	   if($query->num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
	     return false;
	   }
	}
	
	public function get_user_by_id($id)
	{
		 $query = $this->db->query("SELECT id, user_name,password,modidate,isActive FROM bakc_users WHERE id=".$id);
		 if ($query->num_rows() > 0)
		 {
			 return $query->result_array();
		 }
	
	}

	public function insert($user)
	{
		$data = array(
		   'user_name' => $user['username'] ,
		   'password' => $user['password'] ,
		   'modidate' => $user['modidate'] ,
		   'isActive' => $user['isActive']
		   
		);
		
		$this->db->insert('bakc_users', $data); 
		return 'true';
	}
	
	public function remove($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('bakc_users'); 
	}
	
	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('bakc_users', $data);	
	}
		
	public function get_rows_result($queryString)
	{
	     $query = $this->db->query($queryString);
		 if ($query->num_rows() > 0)
		 {
			 return $query->result_array();
		 }
	
	}
	
	
	public function get_data()
	{
		 $query = $this->db->query("SELECT u.id,user_name,password,s.staff_id,role,ur.user_role_name,modidate,u.isActive FROM aut_users u,aut_staff s,aut_user_roles ur WHERE u.staff_id  = s.staff_id AND u.role=ur.id");
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }else
		 	{
			 return array(); //return empty array if no record found
			}
	
	}
	
	public function get_user_group()
	{
		 $query = $this->db->get("bakc_users");
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }	
	
	}
	
	
	
}

?>