<?php   
include 'admin_service_action.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<?php
           


            if(!isset($_SESSION["type"]))
            {
                header('location:login.php');
            }

            if($_SESSION['type'] != 'master')
            {
                header('location:index.php');
            }
            include('header.php');
            include('admin-side-nav.php');
        ?>

<meta charset="utf-8">
    <title>Update Record</title>

	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Crud</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/fontawesome.css"> -->
    <!-- <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script> -->

   

</head>
<body>

<div class = "container space" style="margin-left:460px;">
    <div class="row justify-content-center">
    <div class="bg-light col-md-8 mt-3 p-4 rounded">
    <h2 class="bg-info p-2 rounded text-center text-light">Details of the Service ID No : <?=$vid; ?></h2>
    <div class="text-center">
    <img src="<?=$vphoto; ?>" width="600" height="600" class="img-thumbnail" style ="margin-bottom:30px; margin-top:30px;">
    </div>
    <h4 class="text-dark">Service Category : <?=$vservice_category; ?> </h3>
    <h4 class="text-dark">Service Name : <?=$vservice_name; ?> </h3>
    <h4 class="text-dark">Service Price      : <?=$vservice_price; ?> </h3>
    <h4 class="text-dark">Service Time range : <?=$vservice_time; ?> </h3>
    <h4 class="text-dark">Service Description : <?=$vdescription; ?> </h3>

    </div>
       </div>
       </div>
       
            </body>
            </html>