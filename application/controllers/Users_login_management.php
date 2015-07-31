<?php 

class Users_login_management extends CI_CONTROLLER
{
public function __constructor()
	{
		parent::__constructor();	
	}
	
	public function loginUser()
	{	
		$username= 	$this->input->post('username');
		$password= 	$this->input->post('password');
		
		$this->load->model('Users_login_model');
		if($this->Users_login_model->userLogin($username, $password))
		{
			$this->load->view('home_page');
		}
		else
		{
			echo "Fail";
		}
			
	}
}

?>