<?php
    $db = new mysqli('localhost', 'root', '', 'salondb');
    
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            


            if(!isset($_SESSION["type"]))
           

            if($_SESSION['type'] != 'master')
            
            include('header.php');
            
        ?>


<!DOCTYPE html>
<html>
	<head>

		<script src="js/jquery-1.10.2.min.js"></script>
		<link rel="stylesheet" href="css/bootstrapi.min.css" />
		
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
	
			<nav class="navbar navbar-inverse">
				<div class="container">
					<div class="navbar-header">
                    <span class="label label-pill label-danger count"></span> <?php echo $["user_name"]; ?></a>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<div style= "margin-left: 800px;">
					<a href="logout.php" class="btn btn-default" role="button" aria-pressed="true" style= "margin-top: 5px;">Logout</a>
					<a href="profile.php" class="btn btn-default" role="button"  style= "margin-top: 5px; margin-left:15px;">Profile</a>
				</div>
					</ul>

				</div>
			</nav>
			