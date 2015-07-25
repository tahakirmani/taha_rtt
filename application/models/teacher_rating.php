<?php


Class Teacher_rating extends CI_MODEL
{
	var $table= "teacher_rating";

	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_teacher_rating($teacher_id)
	{	
		$this->db->select('*');
		$this->db->from($this->table);		
		$this->db->where('teacher_id', $teacher_id);
		
		$query= $this->db->get();
		return $query->result();
	}
	
	
	public function update_rating($teacher_id, $user_id, $data)
	{
		$query= $this->db->query("select * from $this->table where teacher_id= $teacher_id");
		
		if($query->num_rows() > 0)
		{		
			$this->db->where('teacher_id', $teacher_id);
			$this->db->update($this->table, $data);		
			
		}
		else
		{			
			$this->db->insert($this->table, $data);
		}		
	}
	
}
	
?>
