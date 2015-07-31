<h2>Profile </h2>

<?php

	//print_r($user_data);
foreach ($user_data as $user_profile)
{
	//$user_id=			$user_profile->user_id;
	$first_name= 		$user_profile->first_name;
	$last_name=			$user_profile->last_name;	
	$gender=			$user_profile->gender;
	$email=				$user_profile->email;
	$contact_number=	$user_profile->contact_number;

	$user_id= $this->uri->segment(3);
?>

<a href="<?php echo base_url(); ?>index.php/load_view_controller/update_user_profile/<?php echo $user_id; ?>">Update</a>
<br>
<?php echo $first_name; ?>

<?php echo $last_name; ?>
<br>
<?php echo $gender?>
<br>
<?php echo $email; ?>
<br>
<?php echo $contact_number; ?>

<?php } ?>