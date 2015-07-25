<?php


Class Teacher_majors extends CI_MODEL
{
	var $table= "teacher_majors";

	public function __construct()
	{
		parent::__construct();
	}
	
	public function add_teacher_majors($data)
	{
		if($this->db->insert($this->table,$data))
		{
			return true;
		}
	}
	
	
	public function update_teacher_majors($teacher_id,$subject)
	{
		$this->db->where("teacher_id", $teacher_id);
		if($this->db->update($this->table,$subject))
		{
			return true;
		}
	}
}
	
?>
