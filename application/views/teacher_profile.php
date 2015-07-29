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
		<button type="submit" class="btn btn-default">Submit</button>		
	</form>
 <?php echo form_close(); ?>	
	
 <?php 	echo form_open('data_controller/user_comments'); ?>  <!-- teacher_id , SessionId -->	
	<h3>Comment</h3>
	<form>
	<?php echo form_textarea('comments', 'Enter Your Comments'); ?>
		<input name="user_id"    hidden type="text" value="<?php echo $user_id; ?>"/>
		<input name="teacher_id" hidden  type="text" value="<?php echo $teacher_id; ?>"/>		
		<button type="submit" class="btn btn-default">Submit</button>	
	</form>	
 <?php echo form_close(); ?>	
	
	
<!--  User Comments  -->
 <h2>Users Comments</h2>
 
 <?php 

 
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

		<a href="<?php echo base_url();?>index.php/data_controller/edit_comments/<?php echo $comment_id;  ?>">Edit</a>
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
		
		<a href="<?php echo base_url();?>index.php/data_controller/update_likes/<?php  echo $comment_id;  ?>"><?php echo $likeStatus; ?></a>
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
  </body>
 </html> 