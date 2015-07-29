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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
    function recaptchaCallback() {
        $('#submitBtn').removeAttr('disabled');
    };
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 
 <?php
	if($this->session->userdata())
	{
		$loggedinUserid= $this->session->userdata('user_id');
	}
 ?>
 
 <?php echo form_open_multipart('form_controller/register_teacher'); ?>
 
 <!-- 
	REMAINING :
	DATE ADDED and ADDED BY
	-->
 
 <form role="form">
 
  <div class="form-group">
    <label for="f_name">First Name:</label>
    <input name="f_name" type="text" class="form-control" id="f_name">
  </div>
  <div class="form-group">
    <label for="l_name">Last Name</label>
    <input name="l_name" type="text" class="form-control" id="l_name">
  </div>

    <div class="form-group">
    <label for="city"> City</label>
    <input name="city" type="text" class="form-control" id="city">
  </div>

      <div class="form-group">
    <label for="information"> Other Information</label>
    <input name="information" type="textfield" class="form-control" id="information">
  </div>
  
    <div class="form-group">
    <label for="city"> Contact Number</label>
    <input name="contact" type="text" class="form-control" id="contact">
  </div>

  
    <div class="radio">
      <label><input type="radio" name="gender" value="male">Male</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" value="female">Female</label>
    </div>  
 
     <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input  name="dob" type="text" class="form-control" id="dob">
  </div>  
  
     <div class="form-group">
    <label for="courses">Major Courses</label>
    <input  name="courses" type="text" class="form-control" id="courses">
  </div>  

 
<hr>
<h2>Experience</h2>
<hr> 

    <div class="form-group">
    <label for="from"> From</label>
    <input name="from" type="text" class="form-control" id="from">
  </div>

  
    <div class="form-group">
    <label for="from"> to</label>
    <input name="to" type="text" class="form-control" id="to">
  </div>

  
  
    <div class="form-group">
    <label for="from"> University</label>
    <input name="university" type="text" class="form-control" id="university">
  </div>

 
 
    <div class="form-group">
    <label for="from">Position</label>
    <input name="position" type="text" class="form-control" id="position">
  </div>

  <div class="form-group">
  <label for="uploadImage">Upload Image</label>
   <input type="file" name="userfile" size="20" />
  </div>
   
 
 
 <input type="text" name= "loggedinUserid" hidden value="<?php echo $loggedinUserid; ?>" />

    <!--  CAPTCHA -->
  <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LdjfQoTAAAAALn22Lz3arCin_8qwNaQ90dmlPtr"></div>
   <!-- CAPTCHA  -->
 
  <button type="submit" id="submitBtn" disabled class="btn btn-default">Submit</button>
</form>
	
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>