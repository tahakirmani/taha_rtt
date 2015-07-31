
 <?php
	if($this->session->userdata())
	{
		$loggedinUserid= $this->session->userdata('user_id');
	}
 ?>

<a href="<?php echo base_url(); ?>index.php/data_controller/user_profile/<?php echo $loggedinUserid; ?>">Profile</a>