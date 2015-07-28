<?php


Class Comment_likes extends CI_MODEL
{
	var $table= "comment_likes"; 

	public function __construct()
	{
		parent::__construct();		
	}	

	public function get_comment_likes($comment_id)
	{
		$query= $this->db->query("select *  from comment_likes where comment_id= $comment_id ");		
		if($query->num_rows() >0){
			return $query->result();
		}
		else{
			return null;	
			//return $query->result();
		}
		

	}
	
	public function update_comment_likes($comment_id)
	{
	
		$query= $this->db->query("select total_likes  from comment_likes where comment_id= $comment_id ");
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
	
	
	
	
	public function set_comment_likes($comment_id, $user_id )
	{		
		$query= $this->db->query("select total_likes  from comment_likes where comment_id= $comment_id ");
		
		if($query->num_rows() > 0)
		{
			foreach($query_run as $query_data)
			{
				$data['likes']= $query_data->total_likes;
				$total_likes= $data['likes']+1;
			
				$data= array(
						"total_likes" => $total_likes
				);
			}
			$this->db->where('comment_id', $comment_id);
			$this->db->update('comment_likes', $data);
			}			
			
			else
			{
				$total_likes=1;
										
					$data= array(
							"total_likes" 	=> $total_likes,
							"comment_id"	=> $comment_id,
							"user_id"		=> $user_id
					);
					
					$this->db->insert('comment_likes', $data);
			}
		}
		
}


	
?>
