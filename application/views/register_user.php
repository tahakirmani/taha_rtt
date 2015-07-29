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
 
 <?php echo form_open_multipart('form_controller/register_user'); ?>
 
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
    <label for="email">Email</label>
    <input name="email" type="email" class="form-control" id="email">
  </div>
  
  
   <div class="form-group">
    <label for="c_email">Confirm Email</label>
    <input name="c_email" type="email" class="form-control" id="c_email">
  </div>
  
    <div class="form-group">
    <label for="password">Password</label>
    <input name="password"  type="password" class="form-control" id="password">
  </div>
  
   
    <div class="form-group">
    <label for="c_password">Confirm Password</label>
    <input type="password" class="form-control" id="c_password">
  </div>
  
    <div class="form-group">
    <label for="city"> City</label>
    <input name="city" type="text" class="form-control" id="city">
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
  <label for="dob">Upload Image</label>
   <input type="file" name="userfile" size="20" />
  </div>
   
   
  <button type="submit" class="btn btn-default">Submit</button>
</form>
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>