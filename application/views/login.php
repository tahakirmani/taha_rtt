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
 
 <?php echo form_open('Users_login_management/loginUser'); ?>
 
 <!-- 
	REMAINING :
	DATE ADDED and ADDED BY
	-->
 
 <form role="form">
 
  <div class="form-group">
    <label for="username">First Name:</label>
    <input name="username" type="text" class="form-control" id="username">
  </div>
  <div class="form-group">
    <label for="password">Last Name</label>
    <input name="password" type="password" class="form-control" id="password">
  </div>
  
   <button type="submit" class="btn btn-default">Submit</button>
  
 </form>