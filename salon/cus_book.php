<?php
    $db = new mysqli('localhost', 'root', '', 'salondb');
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="css/style.css" />
    </head>
    <body style="background-image:url(images/2.png)">

    <br>
    <div class="row">
		  <div class="col-md-3"></div>
   	   	  <div class="col-md-5">	
				<div class="row">
   	   	  		<div class="col-md-6">
				<img style="width:100px; height:80px; margin-left:270px;" id="#" src="images/logo.png" class="img-fluid" alt="">
				</div>

				<div class="col-md-6">
			<!-- 	<p style="color:#cc0066; font-size: 22px; margin-right:100px;" class="salon-logo">SALON MANORI</P> -->
				</div>
				</div>
                </div>
                </div>

    <span id='alert_action'></span>
        <div class = "container space" style="margin-left:32px;">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
                    <div class="panel-heading">q
                    	<div class="row">
                        <div class="col-lg-5"></div>
                            <div class="col-lg-5">
                            	<h3 class="panel-title" >Welcome to Salon Manori...!</h3><br>
                           
                                
                            </div> 
                         
                            </div>
                           
                            <div class="row">
                            
                            <div class ="col-lg-2">           
                            <div class="form-group"> 
   	   	      <input type="button" onclick="location.href='cal_index.php?'" name="loginsubmit" class="btn btn-default btn-success" value="Book Appointment">
                </div> 
                </div>
                <div class ="col-lg-2">
                <div class="form-group"> 
   	   	      <input type="button" onclick="location.href='cus_view_appointments.php?'" name="loginsubmit" class="btn btn-default btn-success" value="View Bookings">
                </div> 
                            </div>
                            <div class ="col-lg-2">           
                            <div class="form-group"> 
   	   	      <input type="button" onclick="location.href='cal_index.php?'" name="loginsubmit" class="btn btn-default btn-success" value="Logout">
                </div> 
                </div>
                        </div>
                    </div>
            </div></div>
                    </div>
                </div>
			</div>
		</div>
        </div>
    </body>
</html>

			