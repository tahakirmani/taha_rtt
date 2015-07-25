<?php


public class University extends CI_MODEL
{
	$table= "university";

	public __construct()
	{
		parent::__construct();
	}
	
	public function add_teacher_majors($university_id, $university_name)
	{
		if($this->db->insert($table,$university_name))
		{
			return true;
		}
	}
	
	
	public function update_teacher_majors($university_id,$university_name)
	{
		$this->db->where("university_id",  $university_id);
		if($this->db->update($table,$university_name))
		{
			return true;
		}
	}
	
	
	


	
?>
