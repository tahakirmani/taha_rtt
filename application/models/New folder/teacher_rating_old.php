<?php

	$table = "teacher_rating";
	
	$teacher_id= "";
	$user_id="";
	$rating= "";
	
	public function()
	{
		$teacher_id= $this->db->post($teacher_id);
	
		$this->db->select('*');
		$this->db->from($table);		
		$this->db->where('teacher_id', $teacher_id);
	}
	
	
	public function update_rating()
	{
		$teacher_id = $this->uri->segment(3);
		$user_id= $this->uri->segment(4);
		
		$rating = $this->db->post("rating");
		
		$data= array(
			"rating"	=>  "rating+= $rating "
			"user_id"	=> 	$user_id	
		);
		
		$this->db->where("teacher_id", $teacher_id);
		$this->db->update($table);
		
	}


?>
