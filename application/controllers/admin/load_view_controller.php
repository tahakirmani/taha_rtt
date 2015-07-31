<?php
class Load_view_controller extends CI_CONTROLLER
{
	public function __constructor()
	{
		parent::__constructor();
	}
	
	public function add_course()
	{
		$this->load->view('admin/add_course');
	}
	
	public function view_all_course()
	{
		$this->load->view('admin/view_all_courses');
	}
	
	public function update_course()
	{
		$this->load->view('admin/update_course');
	}
	
	public function delete_course()
	{
		$this->load->view('admin/delete_course');
	}
	
}