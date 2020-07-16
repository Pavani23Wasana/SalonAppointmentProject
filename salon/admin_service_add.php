<?php   
include 'admin_service_action.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
    <title>Update Record</title>
	<!-- <meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add Staff</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script> -->

    <?php include 'header.php';  ?>
    <?php include 'admin-side-nav.php';  ?>    
    
</head>
<body>
    
    <div class = "container space" style="margin-left:440px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <hr>
    <?php if(isset($_SESSION['response'])){ ?>
            <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
                <?php header("refresh:4, url = admin_service_list.php");?>
                <button type="button" class="close" data-dismiss="alert" >&times;</button>  
                <b><?= $_SESSION['response']; ?></b>          
            </div>
            <?php } unset($_SESSION['response']); ?>
            </div>
            </div>

            <div class="row">
            <div class="col-md-9 mx-auto">
                
            <h3 class="text-center text-info"> Service Details </h3>
            <form action="admin_service_action.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$id; ?>" >
                <div class= "form-group">
                    <input type="text" name="service_category" value="<?=$service_category; ?>" class="form-control" placeholder="Enter Service Category" required>
                </div>
                <div class= "form-group">
                    <input type="text" name="service_name" value="<?=$service_name; ?>" class="form-control" placeholder="Enter Service Name">
                </div>
                <div class= "form-group">
                    <input type="text" name="service_price" value="<?=$service_price; ?>" class="form-control" placeholder="Enter Service price">
                </div>
                <div class= "form-group">
                    <input type="text" name="service_time" value="<?=$service_time; ?>" class="form-control" placeholder="Enter Service time">
                </div>
                <div class= "form-group">
                    <input type="text" name="description" value="<?=$description; ?>" class="form-control" placeholder="Enter SErvice Description">
                </div>
                <!-- <div class= "form-group">
                    <input type="hidden" name="oldimage" value="<?=$photo; ?>" >    
                    <input type="file" name="image" class="custom-file" >
                    <img src="<?= $photo; ?>" width="120" class="img-thumbnail">
                </div>  -->
                <div class= "form-group">
                    <?php if($update==true){ ?>
                        <input type="submit" name="update" class="btn btn-success btn-block" value="Update Record">
                    <?php }  else{ ?>
                        <input type="submit" name="add" class="btn btn-primary btn-block" value="Add Record">
                    <?php } ?>    
                </div>
            </form>
            </div>
         
        </div>
    </div>

</body>

</html>