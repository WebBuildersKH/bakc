<?php

class Degree_types_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	
	public function record_count() {
	
        return $this->db->count_all("degree_types");
    }
	
	
	public function get_candidate_by_id($id)
	{
		 $query = $this->db->query("SELECT * FROM degree_types WHERE id=".$id);
		 if ($query->num_rows() > 0)
		 {
			 return $query->result_array();
		 }
	
	}
	
	public function fetch_data($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("degree_types");
 
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
		 $query = $this->db->query("SELECT * FROM degree_types");
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }
	
	}
	
	public function insert($data)
	{

		$this->db->insert('degree_types', $data);
	//	var_dump( $this->db ); 
	//	return $this->db->queries[0];
		return 'true';
	}
	
	public function remove($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('degree_types'); 
		return 'true';
	}
	
	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('degree_types', $data);	
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