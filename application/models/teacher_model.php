<?php 

Class Teacher_model extends CI_MODEL
{
	var $table= "teachers";
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_teacher_data_by_id($teacher_id)
	{
		//$teacher_id= $this->uri->segment(3);
		
		$query = $this->db->query(
					"select * from teachers 
					left join teacher_majors
					on teachers.teacher_id= teacher_majors.teacher_id
					left join teacher_rating 
					on teacher_rating.teacher_id= teachers.teacher_id
					left join teacher_teaching 
					on teachers.teacher_id = teacher_teaching.teacher_id
					left join comments
					on teachers.teacher_id = comments.teacher_id
					where teachers.teacher_id= $teacher_id
					"
		);
		
		return $query->result();		
	}



	public function get_teacher_data_by_name($name)
	{
	
		
		$query = $this->db->query(
					"select * from teachers where first_name like '%$name%'	"
						);
		
		return $query->result();		
	}	
	
	public function add_teacher($data)
	{		
		if($this->db->insert($this->table, $data))
		{
			$insert_id = $this->db->insert_id();
			return $insert_id;
		}
	}	
	
	
	public function approved_teacher($id, $data)
	{
		$teacher_id= $id; 
		
		$this->db->where("teacher_id", $teacher_id);
		$this->db->update($data, $this->table);
	}
	
	public function update_teacher_info($data, $id)
	{
		$teacher_id= $id;
		
		$this->db->update($this->table, $data);		
		if($this->db->where("teacher_id", $teacher_id)){
			return true;
		}
	}
	
	
	public function delete_teacher()
	{
		$teacher_id = $this->uri->segment(3);
		
		$this->db->where(teacher_id, $teacher_id);		
		if($this->db->delete($this->table)){
			return true;
		}
	}
	
}



?>