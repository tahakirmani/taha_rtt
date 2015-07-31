<?php

class Data_controller extends CI_CONTROLLER
{
public function __constructor()
	{
		parent::__constructor();	
	}

	
public function user_profile()
{
	$this->load->model("users");
	$user_id= $this->uri->segment(3);
	
	$data['user_data']=$this->users->get_user_data($user_id);
	$this->load->view("user_profile", $data);
	
}	
	
public function searched_data()
	{
		$teacher_id= 	$this->uri->segment(3);
		
		$this->load->model('teacher_model');
		$this->load->model('comments');
		$this->load->model('comment_likes');
		
		$data= $this->teacher_model->get_teacher_data_by_id($teacher_id);
		$data['teacher_profile_data']= $data; 
		$data['users_comments']= $this->comments->view_all_comments($teacher_id);
		
		
		$this->load->view('teacher_profile', $data );
		
	}
	
	
public function rate_teacher()
	{
		$teacher_id= $this->input->post('teacher_id');
		$user_id= $this->input->post('user_id');
		$user_rating= $this->input->post('rating');
		
		$this->load->model('teacher_rating');		
		$teacher_rating_data =$this->teacher_rating->get_teacher_rating($teacher_id);
		
		if ($teacher_rating_data != NULL){
				$current_rating['rating']= $teacher_rating_data[0]->rating;			
				$total_rating= ($current_rating['rating']+ $user_rating)/2;
		}
		else{
			$total_rating= $user_rating;
		}

		$rating= array(
						"teacher_id"	=> $teacher_id,
						"rating"		=> $total_rating,
						"user_id"		=> $user_id
				);
		
		
		$db_teacher_id= $this->teacher_rating->update_rating($teacher_id,$user_id, $rating);
		print_r($db_teacher_id);
		
	}


public function user_comments()
	{
		$teacher_id= $this->input->post('teacher_id');
		$user_id= $this->input->post('user_id');
		$comments= $this->input->post('comments');

		$data= array(
					'teacher_id' 	=> 	$teacher_id,
					'user_id' 		=>	$user_id,
					'comment'		=>	$comments,
					'Date'			=>	date('Y-m-d')	
		);
		
		$this->load->model('comments');
		$this->comments->add_comments($data);
				
	}	
	
	

	public function user_comment_reply()
	{
		$reply_id = $this->input->post('reply_id');
		$teacher_id= $this->input->post('teacher_id');
		$user_id = $this->input->post('user_id');
		$comments= $this->input->post('comments');
	
		$data= array(
				'reply_id'		=>  $reply_id,
				'teacher_id' 	=> 	$teacher_id,
				'user_id' 		=>	$user_id,
				'comment'		=>	$comments,
				'Date'			=>	date('Y-m-d')
		);
	
		$this->load->model('comments');
		$this->comments->add_comments($data);
	
	}	

public function edit_comments()
{
	echo "T";
}	


public function update_likes()
{
	$comment_id= $this->uri->segment(3);
	
	$this->load->model('comments');
	$this->load->model('comment_likes');
	
	$comments_model_data= $this->comments->get_comments_data($comment_id);

	foreach($comments_model_data as $comments_data)
	{
		$user_id= $comments_data->user_id;
		
		if($this->comment_likes->isLikeExists($comment_id, $user_id)){
			//echo "Already Liked this Comment";
			$this->comment_likes->unset_comment_likes($comment_id, $user_id);
			
		}
		else{
			$this->comment_likes->set_comment_likes($comment_id, $user_id);		
		}
		//$user_id= $comments_data->user_id;		
		//$this->comment_likes->set_comment_likes($comment_id, $user_id);
	}
}

}

?>