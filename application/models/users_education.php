<?php


public class Users extends CI_MODEL
{
	$table= "users_education";

	public __construct()
	{
		parent::__construct();
	}
	
	
	public function get_user($id)
	{
		$query= $this->db->query(
			"select * from users_education where user_id $id" 		
		);
		
		return $query->result();
	}
	
	
	public function add_user_education($data)
	{
		if($this->db->insert($table,$data))
		{
			return true;
		}
	}
	
	
	public function update_user_education($user_id, $data)
	{
		$this->db->where("user_id", $user_id);
		if($this->db->update($table,$data))
		{
			return true;
		}
	}
	
	
	public function delete_user_education($user_id, $data)
	{
		$this->db->where("user_id", $user_id);
		if($this->db->delete($table,$data))
		{
			return true;
		}
		
		
	}


	
?>
