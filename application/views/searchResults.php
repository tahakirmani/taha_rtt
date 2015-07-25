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
  
 // print_r($searchData);
  
	foreach($searchData as $searchResults)
	{
		$teacher_id=$searchResults->teacher_id;	
		$name= 		$searchResults->first_name;
		$gender=	$searchResults->gender;
		
		echo "<a href='../data_controller/searched_data/$teacher_id'>".$name."</a>"; 
		echo $gender;
		echo "<br><br>";
	
		
	}
  
  ?>
  
  </body>
 </html> 