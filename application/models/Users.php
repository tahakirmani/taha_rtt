<?php


class Users extends CI_MODEL
{
	var $table= "users"; 
	public function __construct()
	{
		parent::__construct();				
	}
	
	
	public function get_user_data($id)
	{
		$query= $this->db->query(
			"select * from users 
			inner join users_education
			on users.user_id= users_education.user_id
			inner join university 
			on user_education.university_id= university.university_id
			inner join university_campus
			on university.university_id= university_campus.university_id
			where users.user_id= $id" 		
		);
		
		return $query->result();
	}
	
	
	public function add_user($data)
	{
		if($this->db->insert($this->table,$data))
		{
			return $this->db->insert_id();
		}
		else
		{
	//		echo $this->db->_error_message();
		}
	}
	
	
	public function update_user($user_id, $data)
	{
		$this->db->where("user_id", $user_id);
		if($this->db->update($table,$data))
		{
			return true;
		}
	}
	
	
	public function delete_user($user_id, $data)
	{
		$this->db->where("user_id", $user_id);
		if($this->db->delete($table,$data))
		{
			return true;
		}
		
		
	}

}
	
?>
