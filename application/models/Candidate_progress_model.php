<?php

class Candidate_progress_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	
	public function record_count() {
	
        return $this->db->count_all("candidate_progress");
    }
	
	
	public function fetch_data($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("candidate_progress");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }	

	public function get_data()
	{
		 $query = $this->db->query("SELECT * FROM candidate_progress");
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }
	
	}
	
	public function insert($data)
	{
	//	var_dump( $this->db ); 
	//	return $this->db->queries[0];
		if(!$this->db->insert('candidate_progress', $data))
		{
			$error["message"] = "Error while inserting data";
			$error["return_id"] = "error";
		//	error_log(json_encode($error)."\r\n", 3, "trace.log");	
		return $error;
		}
		$success["message"] = "progress added";	
		return $success; 
	}
	
	public function remove($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('candidate_progress'); 
		return 'true';
	}
	
	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('candidate_progress', $data);	
		return $this->db->queries[0];	
	}
		
	public function get_rows_result($queryString)
	{
	     $query = $this->db->query($queryString);
		 if ($query->num_rows() > 0)
		 {
			 return $query->result_array();
		 }
	
	}
		
	
}

?>