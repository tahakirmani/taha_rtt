<?php 

class Form_controller extends CI_CONTROLLER
{
public function __constructor()
	{
		parent::__constructor();	
	}
	
	public function register_user()
	{	
		$first_name= 	$this->input->post('f_name');
		$last_name= 	$this->input->post('l_name');
		$email=			$this->input->post('email');
		$password=		$this->input->post('password');
		$gender=		$this->input->post('gender');
		$dob=			$this->input->post('dob');
		$city=			$this->input->post('city');
		$contact=		$this->input->post('contact');

		$hashPassword = $this->encrypt->encode($password);		
		
		$data= array(
					"first_name" 	=> 	$first_name,
					"last_name" 	=> 	$last_name,
					"email"			=> 	$email,
					"password"		=>	$hashPassword,
					"gender"		=>	$gender,
					"dob"			=> 	$dob,
					"city"			=>	$city,
					"contact_number"=>	$contact
		);
		
		$this->load->model('users');
		$this->users->add_user($data);
			
	}
	

	
	public function register_teacher()
	{
		$first_name= 	$this->input->post('f_name');
		$last_name= 	$this->input->post('l_name');	
		$gender=		$this->input->post('gender');
		$dob=			$this->input->post('dob');
		$city=			$this->input->post('city');
		$contact=		$this->input->post('contact');	
		$information=	$this->input->post('information');
		
		$courses=		$this->input->post('courses');
		
		$from=			$this->input->post('from');
		$to=			$this->input->post('to');		
		$position=		$this->input->post('position');
		$university=	$this->input->post('university');
		
		$loggedinUserid= $this->input->post('loggedinUserid');
		
		
		$data= array(
					"first_name" 	=> 	$first_name,
					"last_name" 	=> 	$last_name,					
					"gender"		=>	$gender,
					"dob"			=> 	$dob,
					"city"			=>	$city,
					"contact_number"=>	$contact,
					"information"	=>	$information,
					"added_by"		=>  $loggedinUserid
		);		
		$this->load->model('teacher_model');
		$teacher_id =	$this->teacher_model->add_teacher($data);	
		
		
		$teacher_majors_data= array(
								"teacher_id" 	=> 	$teacher_id,
								"subject"		=>	$courses
		);		
		$this->load->model('teacher_majors');
		$this->teacher_majors->add_teacher_majors($teacher_majors_data);

		
		$teacher_teaching_data= array(
								"teacher_id"	=>  $teacher_id,
								"university_id"	=>	$university,	
								"from" 			=>	$from,
								"to"			=>	$to,
								"position"		=>	$position								
							);
							
		$this->load->model('teacher_teaching');
		$this->teacher_teaching->add_teacher_courses($teacher_teaching_data);	
	}
	

public function searchTeacher()
{
	$teacher_name= strtolower($this->input->post('search'));
	
	$this->load->model('teacher_model');
	$data= $this->teacher_model->get_teacher_data_by_name($teacher_name);
	
	$data['searchData'] = $data;
	
	$this->load->view('searchResults',$data);
	
}	



	
	
}

?>