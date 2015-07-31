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
 <?php //print_r($user_data);
	//	print_r($user_image);
?>
 
 <?php 
 foreach($user_data as $user_profile_data )
 {
 	$first_name= 	$user_profile_data->first_name ;
 	$last_name=		$user_profile_data->last_name;
 	$email=			$user_profile_data->email;
 	$confirm_email=	$user_profile_data->email;
 	$city=			$user_profile_data->city;
 	$country=		$user_profile_data->country;
 	$dob=			$user_profile_data->dob;
 	$contact_number=$user_profile_data->contact_number;
 	$gender=		$user_profile_data->gender;
 	$password=		$user_profile_data->password;
 	
 	$hashPassword = $this->encrypt->decode($password);
 	
 	$image_path= $user_image[0]->image_path;
 	
 	$user_id= $this->uri->segment(3);

 ?>
 
 <?php echo form_open_multipart('form_controller/update_user_profile'); ?>
 
 <form role="form">
  <div class="form-group">
    <label for="f_name">First Name:</label>
    <input name="f_name" type="text" class="form-control" id="f_name" value="<?php echo $first_name; ?>">
  </div>
  <div class="form-group">
    <label for="l_name">Last Name</label>
    <input name="l_name" type="text" class="form-control" id="l_name" value="<?php echo $last_name; ?>">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="email" class="form-control" id="email"  value="<?php echo $email; ?>">
  </div>
  
  
   <div class="form-group">
    <label for="c_email">Confirm Email</label>
    <input name="c_email" type="email" class="form-control" id="c_email"  value="<?php echo $email; ?>">
  </div>
  
    <div class="form-group">
    <label for="password">Password</label>
    <input name="password"  type="password" class="form-control" id="password" value="<?php echo $hashPassword; ?>" >
  </div>
  
   
    <div class="form-group">
    <label for="c_password">Confirm Password</label>
    <input type="password" class="form-control" id="c_password" value="<?php echo $hashPassword;?>">
  </div>
  
    <div class="form-group">
    <label for="city"> City</label>
    <input name="city" type="text" class="form-control" id="city"  value="<?php echo $city; ?>">
  </div>

  
    <div class="form-group">
    <label for="city"> Contact Number</label>
    <input name="contact" type="text" class="form-control" id="contact"  value="<?php echo $contact_number; ?>">
  </div>

  
    <div class="radio">
      <label><input type="radio" name="gender" value="male"  <?php if ( $gender=="male") echo "checked";?>>Male</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" value="female" <?php if($gender == "female") echo "checked"; ?>>Female</label>
    </div>  
 
     <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input  name="dob" type="text" class="form-control" id="dob"  value="<?php echo $dob; ?>">
  </div>

 <div class="form-group">
  <label for="uploadImage">Upload Image</label>
   <input type="file" name="userfile" size="20" />
   <img src="<?php echo base_url().$image_path; ?> " width="160" height="100">
  </div>
   
    <input name="user_id" hidden type="text" class="form-control" id="city"  value="<?php echo $user_id; ?>">
   
   <!--  CAPTCHA -->
  <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LdjfQoTAAAAALn22Lz3arCin_8qwNaQ90dmlPtr"></div>
   <!-- CAPTCHA  -->
   <br>
  <button type="submit" id="submitBtn" disabled class="btn btn-default">Submit</button><br>
</form>
	
<?php } ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>