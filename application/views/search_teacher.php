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
  	
  	<script type="text/javascript">

    $(document).ready(function(){
	  	$("#searchData").keyup(function() {
	  	  //alert( "-" );
	  	  
	  	  var teacher_name= $("input#searchData").val();
	  	   
		  	  jQuery.ajax({
			  	type:"GET",
			  	url: "<?php echo base_url(); ?>index.php/form_controller/searchTeacher",
			  	dataType: "json",
			  	data: {"teacher_name":teacher_name},
			  	success: function(data){

				  	var firstObj = data[1];
				  	console.log(firstObj);

				//alert(data.length());
				
			  		//$('#searchResult').load('http://localhost/rate_the_Teacher/index.php/load_view_controller/searchTeacher/');
					//	jQuery.parseJSON(response);

				  	},
				error: function(){
						alert("Fail");
					}
				

		  		  
			  	  });
		  	  
	  	});
    });
	
  	</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <?php echo form_open('form_controller/searchTeacher');  ?>
  
<form role="form">
 
  <div class="form-group">
    <label for="f_name">Search:</label>
    <input name="search" type="text" class="form-control" id="searchData">
  </div>   
	<button type="submit" class="btn btn-default">Submit</button>
  
</form>  

<div id="searchResult">
	
	<?php //echo json_decode($data);?>

</div>
  
  </body>
 </html> 