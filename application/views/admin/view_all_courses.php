<h3>View All Courses </h3>
<?php 

//print_r($view_all_courses);

foreach($view_all_courses as $courses_data)
{
	$course_id= 	$courses_data->course_id;
	$course_name= 	$courses_data->course_name;
	
	?>
	<?php echo $course_name; ?>
	<a href="<?php echo base_url(); ?>index.php/admin/load_view_controller/update_course/<?php echo $course_id; ?>">Update  </a>
	<a href="<?php echo base_url(); ?>index.php/admin/load_view_controller/delete_course/<?php echo $course_id; ?>">Delete  </a>
	<br>
	<?php } ?>