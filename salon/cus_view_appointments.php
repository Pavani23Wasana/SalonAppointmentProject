<?php
session_start(); 
   
if (!isset($_SESSION['username'])) { 
    $_SESSION['msg'] = "You have to log in first"; 
    header('location: login2.php'); 
} 
?>

<?php
    $db = new mysqli('localhost', 'root', '', 'salondb');
    
?>
<!DOCTYPE html>
<html>
    <head>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="js/jquery.min.js">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
    <title>Homepage</title> 
</head> 
<body style="background-image:url(images/2.png)">
   
    <div class="header"> 
        <div class="row">
		  <div class="col-md-1">
            <img style="width:100px; height:80px; margin-left:30px;" id="#" src="images/logo.png" class="img-fluid" alt=""></div>
            <div class="col-md-1">
            <p style="color:#cc0066; font-size: 22px; margin-top:10px;" class="salon-logo">SALON MANORI</P>
        </div>
        <div class="col-md-8">
         <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
       
            <h3> <br>
                WELCOME  
                <strong> 
                    <?php echo $_SESSION['username']; ?> 
                </strong> 
            !</h3> </div></div>
        </div>  
     

    </head>

    
    <span id='alert_action'></span>
        <div class = "container space" style="margin-left:32px;">

        <br>
                <div class="row">
                    <div class ="col-lg-3">           
                        <div class="form-group"> 
   	   	                    <input type="button" onclick="location.href='cal_index.php?'" name="loginsubmit" class="btn btn-default btn-primary" value="Book Appointment" style=" margin-left:65px;">
                        </div> 
                    </div>
                <div class ="col-lg-2">
                    <div class="form-group"> 
   	   	                    <input type="button" onclick="location.href='cus_view_appointments.php?'" name="loginsubmit" class="btn btn-default btn-primary" value="View Bookings" style=" margin-right:100px;">
                    </div> 
                </div>
               <!--  <div class ="col-lg-2">
                    <div class="form-group"> 
   	   	                    <input type="button" onclick="location.href='cus_view_appointments.php?'" name="loginsubmit" class="btn btn-default btn-primary" value="View notifications" style=" margin-right:100px;">
                    </div> 
                </div> -->
                <div class ="col-lg-2">           
                    <div class="form-group"> 
   	   	                    <input type="button" onclick="location.href='index3.php?logout=1'" name="loginsubmit" class="btn btn-default btn-primary" value="Logout" >
                    </div> 
                </div>
            
            </div>

<br>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title">VIEW BOOKINGS</h3>
                            </div>             
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align='right'>
                                <!-- <button type="button" name="add" id="add_button" class="btn btn-success btn-xs">Add Booking</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row"><div class="col-sm-12 table-responsive">
                            <table id="product_data" class="table table-bordered table-striped">

    
        <div class="form">

        <?php  if (isset($_SESSION['username'])) : ?> 
            <?php $username = $_SESSION['username'];?>
           <div class="content">           
               <?php endif ?>
           </div> 
         
            <table width="100%" border="2" style="border-collapse:collapse;" class="table table-striped">
                <thead class="thead-dark" style="text-align:center;">
                    <tr>

                      
                    
                 
                        <th><strong>DATE</strong></th>
                        <th><strong>TIMESLOT</strong></th>
                        <th><strong>BEAUTICIAN</strong></th>
                        <th><strong>SERVICE</strong></th>
                        <th><strong>STATUS</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $count=1;
                    $sql_query="Select * from bookings where name='$username';";
                    $result = mysqli_query($db,$sql_query);
                    while($row = mysqli_fetch_assoc($result)) { 
                ?>
                    <tr style="text-align:center;">
                       
                       
                    
                        <td><?php echo $row["date"]; ?></td>
                        <td><?php echo $row["timeslot"]; ?></td>
                        <td><?php echo $row["beautician"]; ?></td>
                        <td><?php echo $row["services"]; ?></td>
                        <td><?php echo $row["status"]; ?></td>

                       

                    </tr>
                    <?php $count++; } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>