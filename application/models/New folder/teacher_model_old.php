<?php 

public class teacher_model extends CI_MODEL
{
	$table= "teachers";
	
	 $teacher_id= "";	 
	 $added_by= "";
	 $first_name="";
	 $last_name= "";
	 $country="";
 	 $city= "";
	 $gender=""
	 $information="";
	 $contact_number=""
	 $dob="";
	 $approved="";
	 $approved_by;
	 $date_approved="";
	 $date_added= "";
	 
	public __construct()
	{
		parent::__construct();
	}
	
	
	public function add_teacher()
	{
		$this->input->post('added_by');
		$this->input->post('first_name');
		$this->input->post('last_name');
		$this->input->post('country');
		$this->input->post('city');
		$this->input->post('gender');
		$this->input->post('information');
		$this->input->post('contact_number');
		$this->input->post('dob');
		$added_by= $this->session->userdata('user_id');
		$date_added= "";
		
		
		$data= array(
			
			"added_by" 		=> 	$added_by,
			"first_name"	=>	$first_name,
			"last_name"		=>	$last_name,
			"country"		=>	$country,
			"city"			=>	$city,
			"gender"		=>	$gender,
			"information"	=>	$information,
			"contact_number"=>	$contact_number,
			"dob"			=> 	$dob,
			"date_added"	=>	$date_added						
		
		);		
		$this->db->insert($table, $data);			
		);
	
	}
	
	
	
	public function approved_teacher()
	{
		$teacher_id=	this->uri->segment(3);
		$approved= "Yes";
		$approved_by= "Admin";
		$date_approved= "";
		
		$date= array(		
			"approved" 			=> $approved,
			"approved_by" 		=> $approved_by,
			"date_approved" 	=> $date_approved		
		);
		
		$this->db->where("teacher_id", $teacher_id)
		$this->db->update($data, $table);
	}
	
	
	
	public function get_teacher_data()
	{
		$teacher_id= $this->uri->segment(3);
		
		$query = $this->db->query(
					"select * from teachers 
					inner join teacher_majors
					on teachers.teacher_id= teacher_majors.teacher_id
					inner join teacher_rating 
					on teacher_rating.teacher_id= teachers.teacher_id
					inner join teacher_teaching 
					on teachers.teacher_id = teacher_teaching.teacher_id
					inner join comments
					on teachers.teacher_id = comments.teacher_id
					"
		);
		
		return $query->result();		
	}
	
	
	
	public function update_teacher_info()
	{
		$teacher_id= $this->uri->segment(3);
	
		$this->input->post('added_by');
		$this->input->post('first_name');
		$this->input->post('last_name');
		$this->input->post('country');
		$this->input->post('city');
		$this->input->post('gender');
		$this->input->post('information');
		$this->input->post('contact_number');
		$this->input->post('dob');
		$added_by= $this->session->userdata('user_id');
		$date_added= "";
		
		$data= array(
			
			"added_by" 		=> 	$added_by,
			"first_name"	=>	$first_name,
			"last_name"		=>	$last_name,
			"country"		=>	$country,
			"city"			=>	$city,
			"gender"		=>	$gender,
			"information"	=>	$information,
			"contact_number"=>	$contact_number,
			"dob"			=> 	$dob,
			"date_added"	=>	$date_added						
		
		);		
		
		$this->db->update($table, $data);
		
		if($this-db->where(teacher_id, $teacher_id))
		{
			return true
		}
		else
		{
			return false;
		}
	}
	
	
	public function delete_teacher()
	{
		$teacher_id = $this->uri->segment(3);
		
		$this->db->where(teacher_id, $teacher_id);
		
		if($this->db->delete($table)){
			return true;
		}
		else{
			return false;
		}
	}
	
}



?>