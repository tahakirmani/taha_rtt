<h2>Delete  Course</h2>
<?php 
	$course_id= $this->uri->segment(4);
?>

Are You sure You want to Delete this Course. 
<a href="<?php echo base_url(); ?>index.php/admin/form_controller/delete_course/<?php echo $course_id;  ?>">Yes</a>
<a href="<?php echo base_url(); ?>index.php/admin/load_view_controller/view_all_courses">No</a>
<br>