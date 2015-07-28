<?php


Class Comments extends CI_MODEL
{
	var $table= "comments"; 

	public function __construct()
	{
		parent::__construct();		
	}
	
	public function view_all_comments($teacher_id)
	{
		$query= $this->db->query("select * from comments 
							inner join teachers
							on teachers.teacher_id = comments.teacher_id
							inner join users
							on users.user_id= comments.user_id				
							where
							comments.teacher_id= $teacher_id
							and reply_id= 0	
				");
		return $query->result();
	}
	
	public function add_comments($data)
	{
		if($this->db->insert($this->table,$data))
		{
			return true;
		}
	}
	
	
	public function update_comments($comment_id, $data)
	{
		//$this->db->where("user_id", $user_id);
		//$this->db->where("teacher_id", $teacher_id);
		$this->db->where("comment_id", $comment_id);
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
	
	
	public function get_comments_reply($comment_id)
	{
		$query= $this->db->query("select * from comments 
							inner join teachers
							on teachers.teacher_id = comments.teacher_id
							inner join users
							on users.user_id= comments.user_id				
							where reply_id=$comment_id ");
		return $query->result();
	}
	
	
	public function get_comment_likes($comment_id)
	{
		$query= $this->db->query("select total_likes  from comments where comment_id= $comment_id ");
		return $query->result();
	}
	
	public function set_comment_likes($comment_id)
	{
		
		$query= $this->db->query("select total_likes  from comments where comment_id= $comment_id ");
		$query_run=	$query->result();
		
		foreach($query_run as $query_data)
		{
			$data['likes']= $query_data->total_likes;
			$total_likes= $data['likes']+1;

			$data= array(
					"total_likes" => $total_likes
			);
		}
		
		$this->db->where('comment_id', $comment_id);
		$this->db->update('comments', $data);
	}
	
}


	
?>
