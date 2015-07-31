<?php


class User_rating extends CI_MODEL
{	
	var $table= "users_rating";
	
	public function __construct()
	{
		parent::__construct();
		
	}
	
	
	public function get_user_ratings($id)
	{
		$query= $this->db->get($this->table);
		return $query->result();
	}
	
	
	public function add_rating($data)
	{
		if($this->db->insert($this->table,$data))
		{
			return true;
		}
	}
	
	
	public function update_user_rating($user_id, $points)
	{
		$this->db->where("user_id", $user_id);
		if($this->db->update($this->table,$points))
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
