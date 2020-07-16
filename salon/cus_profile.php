<?php
//profile.php

include('dbconnection.php');

// restritct access without login
if(!isset($_SESSION['type']))
{
	header("location:l.php");
}

$query = "
SELECT * FROM customer_register 
WHERE id = '".$_SESSION["id"]."'
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$name = '';
$email = '';
$id = '';
foreach($result as $row)
{
	$name = $row['username'];
	$email = $row['email'];
}

// include('cus_header.php');

?>
	<div class = "container space" style="margin-left:100px;">
		<div class="panel panel-default">
			<div class="panel-heading">Edit Profile</div>
			<div class="panel-body">
				<form method="post" id="edit_profile_form">
					<span id="message"></span> <!-- to dispaly the success message or the error message -->
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="username" id="username" value="<?php echo $username; ?>" required />
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" id="email" required value="<?php echo $email; ?>" />
					</div>
					<hr />
					<!-- <label>Leave Password blank if you do not want to change</label>
					<div class="form-group">
						<label>New Password</label>
						<input type="password" name="user_new_password" id="user_new_password" class="form-control" />
					</div>
					<div class="form-group">
						<label>Re-enter Password</label>
						<input type="password" name="user_re_enter_password" id="user_re_enter_password" class="form-control" />
						<span id="error_password"></span>	
					</div> -->
					<div class="form-group">
						<input type="submit" name="edit_prfile" id="edit_prfile" value="Edit" class="btn btn-info" />
					</div>
				</form>
			</div>
		</div>

<!-- <script>

$(document).ready(function(){
	$('#edit_profile_form').on('submit', function(event){
		event.preventDefault();
		if($('#user_new_password').val() != '')
		{
			if($('#user_new_password').val() != $('#user_re_enter_password').val())
			{
				$('#error_password').html('<label class="text-danger">Password Not Match</label>');
				return false;
			}
			else
			{
				$('#error_password').html('');
			}
		}
		$('#edit_prfile').attr('disabled', 'disabled');
		var form_data = $(this).serialize();
		$('#user_re_enter_password').attr('required',false);
		$.ajax({
			url:"edit_profile.php",
			method:"POST",
			data:form_data,
			success:function(data)
			{
				$('#edit_prfile').attr('disabled', false);
				$('#user_new_password').val('');
				$('#user_re_enter_password').val('');
				$('#message').html(data);
			}
		})
	});
});
</script>
 -->

			
