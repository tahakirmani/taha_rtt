<?php
class Form_controller extends CI_CONTROLLER
{
	public function __constructor()
	{
		parent::__constructor();
	}
	
	public function add_course()
	{		
		$this->load->model("courses");
		$course_name= $this->input->post("course_name");		
		$data= array(
				"course_name" => $course_name
		);
		$this->courses->add_course($data);
	}
	
	
	public function update_course()
	{
		$this->load->model('courses');
		
		$course_id= 	$this->input->post("course_id");
		$course_name=	$this->input->post("course_name") ;
		
		$data= array(
				"course_name" => $course_name				
		);
		
		$this->courses->update_course($course_id, $data);
	
	}
	
	public function delete_course()
	{
		$this->load->model("courses");
		$course_id= $this->uri->segment("4");
		
		$this->courses->delete_course($course_id);
	}
	
	//Approve Teacher
	
	public function approve_teacher()
	{
		$this->load->model('teacher_model');
		
		$teacher_id=	$this->input->post('teacher_id');
		$status= 		$this->input->post('status');
		
		$data= array(
				"teacher_id"	 	=> 	$teacher_id,
				"approved"			=>	$status,
				"date_approved"		=>	date("Y/m/d h:i:sa")
		);
		
		$this->teacher_model->approved_teacher($teacher_id, $data);
	}
	
}