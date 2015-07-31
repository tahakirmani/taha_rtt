<?php
class Load_view_controller extends CI_CONTROLLER
{
	public function __constructor()
	{
		parent::__constructor();
	}
	
	//Courses
	
	public function add_course()
	{
		$this->load->view('admin/add_course');
	}
	
	public function view_all_courses()
	{
		$this->load->model('courses');
		$data['view_all_courses']= $this->courses->view_all_courses();
		
		$this->load->view('admin/view_all_courses', $data);
	}
	
	public function update_course()
	{
		$course_id= $this->uri->segment('4');
		
		$this->load->model('courses');
		$data['get_course_data']= $this->courses->get_course_by_id($course_id);
		$this->load->view('admin/update_course', $data);
	}
	
	public function delete_course()
	{
		$this->load->view('admin/delete_course');
	}
	
	
	//UnApproved Teachers 
	
	public function unapproved_teachers_list()
	{
		$this->load->model('teacher_model');
		$data['unapproved_teachers_list'] = $this->teacher_model->get_unapproved_teachers_list();
		$this->load->view('admin/unapproved_teachers_list',$data);
	}
	
	
	//View All Users
	
	public function view_all_users()
	{
		$this->load->model('users');
		$data['view_all_users']= $this->users->get_all_users();	
		$this->load->view('admin/view_all_users', $data);
	}
	
	

	//View All Users
	
	public function view_all_teachers()
	{
		$this->load->model('teacher_model');
		$data['view_all_teachers']= $this->teacher_model->get_all_teachers();
		$this->load->view('admin/view_all_teachers', $data);
	}
	
		
	
	
	
}