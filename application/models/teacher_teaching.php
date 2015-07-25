<?php


Class Teacher_teaching extends CI_MODEL
{
	var $table= "teacher_teaching";

	public function __construct()
	{
		parent::__construct();
	}
	
	public function add_teacher_courses($data)
	{
		if($this->db->insert($this->table,$data))
		{
			return true;
		}
	}
	
	
	public function update_teacher_courses($teacher_id, $university_id, $data)
	{
		$this->db->where("teacher_id", $teacher_id);
		if($this->db->update($this->table,$data))
		{
			return true;
		}
	}
	
}
	


	
?>
