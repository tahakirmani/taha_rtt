<h3>View All Teachers </h3>
<?php 

//print_r($view_all_courses);

foreach($view_all_teachers as $teachers_data)
{
	$teacher_id= 	$teachers_data->teacher_id;
	$teacher_name= 	$teachers_data->first_name;
	
	?>
	<?php echo $teacher_name; ?>
<!-- <a href="<?php echo base_url(); ?>index.php/admin/load_view_controller/update_course/<?php echo $teacher_id; ?>">Update  </a>
	<a href="<?php echo base_url(); ?>index.php/admin/load_view_controller/delete_course/<?php echo $teacher_id; ?>">Delete  </a>-->
	<br>
	<?php } ?>