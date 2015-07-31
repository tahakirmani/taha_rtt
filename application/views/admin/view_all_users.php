<h3>View All Users </h3>
<?php 

//print_r($view_all_courses);

foreach($view_all_users as $users_data)
{
	$users_id= 		$users_data->user_id;
	$users_name= 	$users_data->first_name;
	
	?>
	<?php echo $users_name; ?>
<!-- <a href="<?php echo base_url(); ?>index.php/admin/load_view_controller/update_course/<?php echo $users_id; ?>">Update  </a>
	<a href="<?php echo base_url(); ?>index.php/admin/load_view_controller/delete_course/<?php echo $users_id; ?>">Delete  </a>-->
	<br>
	<?php } ?>