<?php 

class Load_view_controller extends CI_CONTROLLER
{
public function __constructor()
	{
		parent::__constructor();	
	}
	
	public function index()
	{
		$this->load->view('home');	
	}
	
	public function register_user()
	{			
		$this->load->view('register_user');	
	}	
	
	public function register_teacher()
	{
		$this->load->view('register_teacher');
	}
	
	public function login()
	{
		$this->load->view('login');
	}


	public function searchTeacher()
	{
		$this->load->view('search_teacher');
	}	
}

?>