<?php


Class Comments extends CI_MODEL
{
	var $table= "comments"; 

	public function __construct()
	{
		parent::__construct();		
	}
	
	public function add_comments($data)
	{
		if($this->db->insert($this->table,$data))
		{
			return true;
		}
	}
	
	
	public function update_comments($user_id, $teacher_id, $data)
	{
		$this->db->where("user_id", $user_id);
		$this->db->where("teacher_id", $teacher_id);
		if($this->db->update($this->table,$data))
		{
			return true;
		}
	}
	
	
	public function delete_comments($user_id, $teacher_id, $data)
	{
		$this->db->where("user_id", $user_id);
		$this->db->where("teacher_id", $teacher_id);
		if($this->db->delete($this->table,$data))
		{
			return true;
		}
		
		
	}
	
}


	
?>
