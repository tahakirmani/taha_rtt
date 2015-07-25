<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php 
  	if($this->session->userdata()){
		$user_id=	$this->session->userdata('user_id');
	}
	
	$teacher_id= $this->uri->segment(3);
  ?>  

  <?php  
  foreach($teacher_profile_data as $teacher_data)
  {
	//$teacher_id =			$teacher_data->teacher_id;
	$teacher_name=			$teacher_data->first_name;
  }  
  ?>
  
 <?php 	echo form_open('data_controller/rate_teacher'); ?>  <!-- teacher_id,  UserId/SessionId -->
	<h3>Rate</h3>
	<form>
	    <input name="rating" type="text" class="form-control" id="rating"/>
		<input name="user_id" hidden type="text" value="<?php echo $user_id; ?>"/>
		<input name="teacher_id" hidden type="text" value="<?php echo $teacher_id; ?>"/>
		<button type="submit" class="btn btn-default">Submit</button>		
	</form>
 <?php echo form_close(); ?>	
	
 <?php 	echo form_open('data_controller/user_comments'); ?>  <!-- teacher_id , SessionId -->	
	<h3>Comment</h3>
	<form>
	<!--	<textarea name="comment" rows="4" cols="50"> </textarea>	  -->
	<?php echo form_textarea('comments', 'Enter Your Comments'); ?>
		<input name="user_id"    hidden type="text" value="<?php echo $user_id; ?>"/>
		<input name="teacher_id" hidden  type="text" value="<?php echo $teacher_id; ?>"/>		
		<button type="submit" class="btn btn-default">Submit</button>	
	</form>	
 <?php echo form_close(); ?>	
	
  </body>
 </html> 