<?php 

class Form_controller extends CI_CONTROLLER
{
public function __constructor()
	{
		parent::__constructor();	
		$this->load->library('upload', $config);
		$user_id;
		//$this->load->model('users_images');
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
		$this->user_id= $this->users->add_user($data);
		$this->do_upload();
			
	}
	
	function do_upload()
	{
		$this->load->model('users_images');
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
	
		$max_image_id= $this->users_images->get_image_id();		
	
		$file_without_spaces = preg_replace('/\s+/', '_',$_FILES['userfile']['name']);
		$new_file_name="image_".$max_image_id[0]->image_id."_".$this->user_id;		
		$config['file_name'] =$new_file_name;

		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_form', $error);
		}
		else{
			
			$data = array('upload_data' => $this->upload->data());
			
			//
			$file_path_pos= strpos($config['upload_path'], "/");
			$file_path_str= substr($config['upload_path'], $file_path_pos);
			$image_path= $file_path_str.$new_file_name.'.'. $data['upload_data']['image_type'];
			
			
			$data= array(
			
					"user_id" 		=> $this->user_id,
					"image_path"	=> $image_path,
					"active"		=> "Yes"
			
			);
			$this->users_images->add_image($data);			
			//			
		
		}
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