<?php


public class University_campus extends CI_MODEL
{
	$table= "university_campus";

	public __construct()
	{
		parent::__construct();
	}
	
	public function add_university_campus($data)
	{
		if($this->db->insert($table,$data))
		{
			return true;
		}
	}
	
	
	public function update_university_campus($campus_id, $data)
	{
		$this->db->where("campus_id", $campus_id);
		if($this->db->update($table,$data))
		{
			return true;
		}
		
		
	public function delete_university_campus($campus_id, $data)
	{
		$this->db->where("campus_id", $campus_id);
		if($this->db->delete($table,$data))
		{
			return true;
		}		
		
	}
	
	
	


	
?>
