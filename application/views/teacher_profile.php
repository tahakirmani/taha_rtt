<!DOCTYPE html>
<html lang="en">
  <head>
  
  <?php include 'rating_head.php'; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
    <!-- Comment AJAX Call -->
    <script type="text/javascript">
    $(document).ready(function(){

    	$(".submit").click(function(event) {

    		event.preventDefault();

    		var teacherId= $("input#teacher_id").val();
    		var userId= $("input#user_id").val();
    		var commentText =$("textarea#commentId").val() ; 

    		jQuery.ajax({
    	    		type: "POST",
    	    		url: "<?php echo base_url(); ?>index.php/data_controller/user_comments",
					dataType: "json", 
					data: {teacher_id:teacherId, user_id: userId, comments: commentText },
        	    	success: function(){
							$("#successComment").text("Comment Successfully Submitted.");
							$('#commentsArea').load('http://localhost/rate_the_Teacher/index.php/data_controller/searched_data/'+teacherId);
	
	            	    	},
	    			error: function()	{
		    			alert("Fail");
		    			}
    				});
    		
        	});



    	//Rating AJAX
    	/*

    	$(".rate_submit_btn").click(function(event) {

    		event.preventDefault();

    		var teacherId= $("input#teacher_id").val();
    		var userId= $("input#user_id").val();
    		var user_rating =$("input#rating").val() ; 

    		jQuery.ajax({
    	    		type: "POST",
    	    		url: "<?php echo base_url(); ?>index.php/data_controller/rate_teacher",
					dataType: "json", 
					data: {teacher_id:teacherId, user_id: userId, rating: user_rating },
        	    	success: function(){
							//$("#successComment").text("Comment Successfully Submitted.");
							$('#commentsArea').load('http://localhost/rate_the_Teacher/index.php/data_controller/searched_data/'+teacherId);
	
	            	    	},
	    			error: function()	{
		    			alert("Fail");
		    			}
    		});
    		
        	});

    	*/
/*
		$(".likeComment").click(function(event){
			event.preventDefault();
			var comment_id= $("input#comment_id").val();
			var teacherId= $("input#teacher_id").val();

			jQuery.ajax({

					type:"POST",
					url:"<?php echo base_url(); ?>index.php/data_controller/update_likes/"+comment_id,
					dataType: "json",
					data:{comment_id: comment_id},
        	    	success: function(){
						//$("#successComment").text("Comment Successfully Submitted.");
						$('#commentsArea').load('http://localhost/rate_the_Teacher/index.php/data_controller/searched_data/'+teacherId);

            	    	},
    				error: function()	{
	    				alert("Fail");
	    				}

				});

			});
    	*/
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
  <?php 
  	if($this->session->userdata()){
		$user_id=	$this->session->userdata('user_id');
	}
	
	$teacher_id= $this->uri->segment(3);
  ?>  

  <?php  
  
  //print_r($teacher_profile_data);
  
  foreach($teacher_profile_data as $teacher_data)
  {
	//$teacher_id =			$teacher_data->teacher_id;
	$first_name=			$teacher_data->first_name;
	$last_name=				$teacher_data->last_name;
	$country=				$teacher_data->country;
	$contact_number=		$teacher_data->contact_number;
	
	

  }  
  
  echo $first_name;
  echo " ";
  echo $last_name; 
  ?>
  
 <?php 	echo form_open('data_controller/rate_teacher'); ?>  <!-- teacher_id,  UserId/SessionId -->
	<h3>Rate</h3>
	<form>
	    <input name="rating" type="text" class="form-control" id="rating"/>
		<input name="user_id" hidden type="text" value="<?php echo $user_id; ?>"/>
		<input name="teacher_id" hidden type="text" value="<?php echo $teacher_id; ?>"/>
		<button type="submit" class="btn btn-default rate_submit_btn">Submit</button>		
	</form>
 <?php echo form_close(); ?>	
	
 <?php 	echo form_open('data_controller/user_comments'); ?>  <!-- teacher_id , SessionId -->	
	<h3>Comment</h3>
	<form>
	<?php 
	$data= array(
			"name"	=> "comments",
			"value" =>	"Enter Your Comments",
			"id"	=>	"commentId"			
	);
	//echo form_textarea('comments', 'Enter Your Comments');
		echo form_textarea($data); ?>
		<input name="user_id"  id="user_id"  hidden type="text" value="<?php echo $user_id; ?>"/>
		<input name="teacher_id" id="teacher_id" hidden  type="text" value="<?php echo $teacher_id; ?>"/>		
		<button type="submit" class="btn btn-default submit">Submit</button>	
	</form>	
 <?php echo form_close(); ?>
 <div id="successComment"> </div>	
	
	
	<!--- Rating API<div class="star-ratings">
									<div class="stars stars-example-fontawesome">

									<select id="example-fontawesome" name="rating">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>

									<span class="title">Font Awesome</span>

								</div>
						</div>
	
	<!-- Rating API -->
	 -->
	
<!--  User Comments  -->
<div id ="commentsArea">
 <h2>Users Comments</h2>
 
 <?php 

 
 //
 
 //
 
 	foreach($users_comments as $comments)
 	{
 		$comment_id= 	$comments->comment_id;	
 		$comment= 		$comments->comment;
 		$comment_by=	$comments->first_name;
 		$comment_date=	$comments->date;
 		$city=			$comments->city;
 		
 		$trim_date_pos= strpos($comment_date, ':');
 		$trim_date= substr($comment_date, 0, $trim_date_pos-2 );
 		
 		echo $comment; 
 		echo "<br>";
 		echo "<h4>".$comment_by."    ";
 		echo $trim_date."</h4>";
 		//echo "<br>";
?>
<!--  <h3>Replies</h3>  -->
		
		<?php		
		 
			$this->load->model('comments');
		//	$this->load->model('comment_likes');
			
			$comments_reply= $this->comments->get_comments_reply($comment_id);			
			//$comments_like= $this->comment_likes->get_comment_likes($comment_id);
			$comments_like= $this->comment_likes->count_likes($comment_id);

			if($comments_like != null)
			{
				echo "<strong>Likes:</strong>	".$comments_like[0]->total_likes;
			}
			else
			{
				echo "<strong>Likes:</strong>0	";
			}
			?>
			
			<h3>Replies</h3>
			
			<?php 
			foreach($comments_reply as $comments_reply_data)
			{
				$reply_comment_id= 		$comments_reply_data->comment_id;
				$reply_comment= 		$comments_reply_data->comment;
				$reply_comment_by=		$comments_reply_data->first_name;
				$reply_comment_date=	$comments_reply_data->date;
				$reply_city=			$comments_reply_data->city;
					
				$trim_date_pos= strpos($reply_comment_date, ':');
				$trim_date= substr($reply_comment_date, 0, $trim_date_pos-2 );
				
				
				echo "<br>";
				echo $reply_comment."  -  " .$reply_comment_by;
				echo "<br>";
				
			}
			
			?>

<!--  REPLIES END  -->

		<a href="<?php echo base_url();?>index.php/data_controller/edit_comments/<?php echo $comment_id;  ?>" >Edit</a>
		<a href="#">Reply</a>
		
		<?php
		$likeStatus; 
		if($this->comment_likes->isLikeExists($comment_id, $user_id)){
			$likeStatus= "Unlike";
		}
		else{
			$likeStatus= "Like";
				}
		
		?>
		
		<a href="<?php echo base_url();?>index.php/data_controller/update_likes/<?php  echo $comment_id;  ?>" class="likeComment"><?php echo $likeStatus; ?></a>
		<input type="text" name="comment_id" id="comment_id" hidden value="<?php echo $comment_id?>" >
		<br>
		 <!--  REPLY -->
		 		
		 <?php 	echo form_open('data_controller/user_comment_reply'); ?>  <!-- teacher_id , SessionId -->	
			
			<form>
			<?php echo form_textarea('comments', 'Enter Your Reply'); ?>
				<input name="reply_id" hidden  type="text" value="<?php echo $comment_id; ?>"/>
				<input name="user_id"    hidden type="text" value="<?php echo $user_id; ?>"/>
				<input name="teacher_id" hidden  type="text" value="<?php echo $teacher_id; ?>"/>		
				<button type="submit" class="btn btn-default">Submit</button>	
			</form>	
 		<?php echo form_close(); ?>
		<hr><hr><hr><hr>	<hr><hr><hr><hr>	<hr><hr><hr><hr>
		<br><br>
<?php 
 	}
 
 ?>
 </div>
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/jquery.barrating.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/examples.js"></script>
 <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  </body>
 </html> 