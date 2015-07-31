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
		$course_id= $this->uri->segment("course_id");
		
		$this->courses->delete_course($course_id);
	}
	
}