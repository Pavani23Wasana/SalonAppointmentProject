<?php

//edit_profile.php

//to check whether the user is existing or 
include('database_connection.php');

if(isset($_POST['user_name']))
{
	if($_POST["user_new_password"] != '') /* if user want to change password */
	{
		$query = "
		UPDATE user_details SET 
			user_name = '".$_POST["user_name"]."', 
			user_email = '".$_POST["user_email"]."', 
			user_password = '".password_hash($_POST["user_new_password"], PASSWORD_DEFAULT)."' 
			WHERE user_id = '".$_SESSION["user_id"]."'
		";
	}
	else /* this block quote execute if only user don't want to change password */
	{
		$query = "
		UPDATE user_details SET 
			user_name = '".$_POST["user_name"]."', 
			user_email = '".$_POST["user_email"]."'
			WHERE user_id = '".$_SESSION["user_id"]."'
		";
	}
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	if(isset($result))
	{
		echo '<div class="alert alert-success">Profile Edited</div>';
	}
}

?>