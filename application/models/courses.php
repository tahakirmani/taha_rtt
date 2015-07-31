<?php

Class Courses extends CI_MODEL
{
	var $table= "courses";

	public function __construct()
	{
		parent::__construct();
	}
	
	
	public function view_all_courses()
	{
		$query= $this->db->query("select * from courses");
		return $query->result();
	}
	
	public function get_course_by_id($course_id)
	{
		$query= $this->db->query("select * from courses where course_id =$course_id");
		return $query->result();
	}
	
	public function add_course($data)
	{
		if($this->db->insert("courses", $data))
		{
			return true;
		}
	}
	
	public function update_course($course_id, $data)
	{
		$this->db->where("course_id", $course_id);
		if($this->db->update("courses"))
		{
			return true;
		}
	}
	
	public function delete_course($course_id)
	{
		$this->db->where("course_id", $course_id);
		if($this->db->delete("courses"))
		{
			return true;
		}
	}
}