UnApproved Teachers
<?php 
//print_r($unapproved_teachers_list);
foreach($unapproved_teachers_list as $unapproved_teachers_data)
{
	$teacher_id= $unapproved_teachers_data->teacher_id;
	$teacher_first_name= $unapproved_teachers_data->first_name;
	$teacher_last_name= $unapproved_teachers_data->last_name;
		
	$teacher_name= $teacher_first_name.' '.$teacher_last_name;
	
	echo $teacher_name;
?>
	<?php echo form_open('admin/form_controller/approve_teacher'); ?>	
	<input type="text" hidden value="<?php  echo $teacher_id ;?>" name="teacher_id" >
	<select name="status">
		<option value="yes">Approve</option>
		<option value="no">UnApproved</option>
	</select>
	<br>
	<input type="submit" value="Submit"/>
	<?php echo form_close(); ?>
<?php } ?>



