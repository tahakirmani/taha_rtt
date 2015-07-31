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
	
	public function update_user_profile()
	{
		$user_id= $this->uri->segment(3);
		
		$this->load->model('users');
		$this->load->model('users_images');
		$data['user_data']= 	$this->users->get_user_data($user_id);
		$data['user_image']=	$this->users_images->get_user_image($user_id);
		
		$this->load->view('update_user_profile', $data);	
		
	}
}

?>