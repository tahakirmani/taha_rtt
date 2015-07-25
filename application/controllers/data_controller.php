<?php

class Data_controller extends CI_CONTROLLER
{
public function __constructor()
	{
		parent::__constructor();	
	}

public function searched_data()
	{
		$teacher_id= 	$this->uri->segment(3);
		
		$this->load->model('teacher_model');
		$data= $this->teacher_model->get_teacher_data_by_id($teacher_id);
		$data['teacher_profile_data']= $data; 
		
		$this->load->view('teacher_profile', $data );
		
	}
	
	
public function rate_teacher()
	{
		$teacher_id= $this->input->post('teacher_id');
		$user_id= $this->input->post('user_id');
		$rating= $this->input->post('rating');
		
		$this->load->model('teacher_rating');
		$this->teacher_rating->
	}


public function user_comments()
	{
		echo 'T'.$teacher_id= $this->input->post('teacher_id');
		echo 'U '.$user_id= $this->input->post('user_id');
		echo 'CommeT: '.$comments= $this->input->post('comments');

		$data= array(
					'teacher_id' 	=> 	$teacher_id,
					'user_id' 		=>	$user_id,
					'comment'		=>	$comments,
					'Date'			=>	date('Y-m-d')	
		);
		
		$this->load->model('comments');
		$this->comments->add_comments($data);
				
	}		
}

?>