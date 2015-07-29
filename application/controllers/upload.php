<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('users_images');
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;	
		
		$max_image_id= $this->users_images->get_image_id();
		print_r($max_image_id);
		
		//$file_without_spaces = preg_replace('/\s+/', '_',$_FILES['userfile']['name']);
		$new_file_name="image_".$max_image_id[0]->image_id;
		
		$data= array(	);
				
		$config['file_name'] =$new_file_name;
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_form', $error);
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			

			//$this->load->view('upload_success', $data);
		}
	}
}
?>