<?php

	Class Users_login_model extends CI_MODEL
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function userLogin($username, $password)
		{		
			$query =$this->db->query(
								"select * from users 
								where username= '$username'	 ");			
								
			if($query->num_rows() !=0 )
			{			
				$result= $query->result();
			
				foreach ($result as $row)
				{
					$username= 	$row->username;
					$user_id=	$row->user_id;
					$dbPassword= $row->password;
					
					$hashPassword= $this->encrypt->decode($dbPassword);
					
					if($hashPassword == $password)
					{					
						$this->setUserSession($user_id, $username);
						return true;
						}
						else{
							return false;
						}
				}
				
			}
			else{
				return false;				
			}

		}
		
		public function setUserSession($user_id, $username)
		{
			$sess_data= array(
								"user_id" 	=> $user_id,
								"username" 	=> $username
				);
				
			$this->session->set_userdata($sess_data);	
		}
		
	}


?>