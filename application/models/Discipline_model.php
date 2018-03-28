<?php

class Discipline_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function insert($disc)
	{
		$data = array(
		 //  'complaints_code' => $compliant['complaints_code'] ,
           'lawyer_id' => $disc['lawyer_id'] ,
           'complaints_desc' => $disc['complaints_desc'] ,
           'is_presidential_reconciliation' => $disc['is_presidential_reconciliation'] ,
		   'is_inspection' => $disc['is_inspection'] ,
		   'complaints_path' => $disc['complaints_path'] ,
           'cd_id' => $disc['cd_id'] ,
           'modidate' => $disc['modidate']	   
		);
	//	error_log(json_encode($disc),3,"discipline.log");
		if(!$this->db->insert('discipline', $data))
		{
			$error["message"] = "Error occurs while inserting data!";
		return $error;
		}
	$success["message"] = "Complaint has been saved!";	
	return $success; 	
		
	}
	
	public function remove($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('discipline'); 
	}
	
	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('discipline', $data);	
		$success["message"] = "Disciplinary action updated!";
		return $success;
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
		$query = $this->db->query("SELECT d.id,d.lawyer_id,l.lawyer_code,l.lawyer_name_kh,
		l.lawyer_name_en,d.complaints_path,d.modidate,d.complaints_desc,d.is_presidential_reconciliation,
		d.is_inspection,d.cd_id FROM discipline d,lawyers l WHERE d.lawyer_id=l.id");
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }else
		 	{
			 return array(); //return empty array if no record found
			}	
	}

	public function get_data_by_lawyer_id($id)
	{
		 $query = $this->db->query("SELECT * FROM discipline WHERE lawyer_id=".$id);
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }else
		 	{
			 return array(); //return empty array if no record found
			}	
	}

	public function get_data_by_id($id)
	{
		 $query = $this->db->query("SELECT d.id,d.lawyer_id,l.lawyer_code,l.lawyer_name_kh,
		 l.lawyer_name_en,d.complaints_desc,d.is_presidential_reconciliation,
		 d.is_inspection,d.cd_id FROM discipline d,lawyers l WHERE d.lawyer_id=l.id AND d.id=".$id);
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }else
		 	{
			 return array(); //return empty array if no record found
			}	
	}


}

?>