Add Course

<?php //print_r($course_data);?>

<?php echo form_open("admin/form_controller/update_course");  ?>

<?php 
foreach($get_course_data as $course_data)
	{
		$course_name= $course_data->course_name;	
?>

<input type="text" name="course_name" value="<?php echo $course_name; ?>"/>
<input type="submit" value="Update Course"/>

<?php } ?>