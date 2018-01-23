<?php

class Lawyers_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	
	public function record_count() {
	
        return $this->db->count_all("lawyers");
    }
	
	
	public function get_lawyer_by_id($id)
	{
		 $query = $this->db->query("SELECT * FROM lawyers WHERE id=".$id);
		 if ($query->num_rows() > 0)
		 {
			 return $query->result_array();
		 }
	
	}
	
	public function fetch_data($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("lawyers");
 
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
		 $query = $this->db->query("SELECT * FROM lawyers");
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }
	
	}
	
	public function insert($lawyer)
	{
		$data = array(
		   'lawyer_id ' => $lawyer['lawyer_id'] ,
		   'lawyer_name' => $lawyer['lawyer_name'] ,
		   'lawyer_gender' => $lawyer['lawyer_gender'] ,
		   'lawyer_start_date ' => $lawyer['lawyer_start_date'] ,
		   'modidate' => $lawyer['modidate'] ,
		   'isActive' => $lawyer['isActive']
		   
		);
		
		$this->db->insert('lawyers', $data);
	//	var_dump( $this->db ); 
	//	return $this->db->queries[0];
		return 'true';
	}
	
	public function remove($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('lawyers'); 
		return 'true';
	}
	
	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('lawyers', $data);	
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