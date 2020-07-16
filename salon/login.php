<?php
//login.php

include('database_connection.php');

if(isset($_SESSION['type']))
{
	header("location:index.php");
}

$message = ''; /* store validation message and display */

// log if only user details are correct
if(isset($_POST["login"]))
{
	$query = "
	SELECT * FROM user_details 
		WHERE user_email = :user_email
	";
	$statement = $connect->prepare($query);
	$statement->execute(
		array(
				'user_email'	=>	$_POST["user_email"]
			)
	);

	// To know the number of rows affected by query execution
	$count = $statement->rowCount();
	if($count > 0)
	{
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			if($row['user_status'] == 'Active')
			{
				if(password_verify($_POST["user_password"], $row["user_password"]))
				{
				
					$_SESSION['type'] = $row['user_type'];
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['user_name'] = $row['user_name'];
					header("location:index.php");  /* to redirect to the page index */
				}
				else
				{
					$message = "<label>Incorrect Email Address or Password</label>";
				}
			}
			else
			{
				$message = "<label>Your account is disabled, Contact Master</label>";
			}
		}
	}
	else
	{
		$message = "<label>Incorrect Email Address or Password</labe>";
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Salon Manori</title>		
		<script src="js/jquery-1.10.2.min.js"></script>
		<link rel="stylesheet" href="css/bootstrapi.min.css" />
		<script src="js/bootstrapi.min.js"></script>
	</head>
	<body>
		<br /><br />
		<div class="container">
			<h2 text-align="center">SALON MANORI</h2>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<form method="post">
						<?php echo $message; ?>
						<div class="form-group">
							<label>User Email</label>
							<input type="text" name="user_email" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="user_password" class="form-control" required />
						</div>
						<div class="form-group">
							<input type="submit" name="login" value="Login" class="btn btn-info" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>