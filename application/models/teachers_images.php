<?php

Class Teachers_images extends CI_MODEL
{
	var $table= "teachers_images";
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function add_image($data)
	{
		if($this->db->insert($this->table, $data))
		{
			$insert_id = $this->db->insert_id();
			return $insert_id;
		}
	}
	
	
	public function update_image($user_id)
	{
		
	}
	
	public function delete_image()
	{
		
	}
	
	public function get_image_id()
	{
		$query= $this->db->query("select max(image_id) as image_id from teachers_images");
		return $query->result();
	}
	
	
}