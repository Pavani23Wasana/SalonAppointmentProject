<?php
  
// Starting the session, to use and 
// store data in session variable 
session_start(); 
   
// If the session variable is empty, this  
// means the user is yet to login 
// User will be sent to 'login.php' page 
// to allow the user to login 
if (!isset($_SESSION['username'])) { 
    $_SESSION['msg'] = "You have to log in first"; 
    header('location: login2.php'); 
} 
   
// Logout button will destroy the session, and 
// will unset the session variables 
// User will be headed to 'login.php' 
// after loggin out 
if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['username']); 
    header("location: index2.php"); 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" />
    <title>Homepage</title> 
</head> 
<body style="background-image:url(images/1.png)">
   
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
        <?php  if (isset($_SESSION['username'])) : ?> 
            <h3> <br>
                WELCOME  
                <strong> 
                    <?php echo $_SESSION['username']; ?> 
                </strong> 
            !</h3> </div></div>
        </div> 
        <div class="content"> 
    
            <!-- Creating notification when the 
                    user logs in -->
            
            <!-- Accessible only to the users that 
                    have logged in already -->
            <?php if (isset($_SESSION['success'])) : ?> 
                <div class="error success" > 
                    <h3> 
                        <?php
                            echo $_SESSION['success'];  
                            unset($_SESSION['success']); 
                        ?> 
                    </h3> 
                </div> 
            <?php endif ?> 
                
            <!--     <div class="row">
                <div class ="col-lg-5"></div> 
                <div class ="col-lg-5">  -->
               <!--  <span class="border border-primary"> -->
          <!--    <div class="row">
                    <div class ="col-lg-4"></div> 
                    <div class="row" style="width:600px; height:200px; border:2px solid blue;"> 
                        <div class="col-lg-5">  -->   
                        <div style="text-align:center; width:100%; float:center; border:solid 2px gray; padding-top:20px;">
                        <span>
                        <div class="form-group"> 
   	   	                    <input type="button" onclick="location.href='cal_index.php?'" name="loginsubmit" class="btn btn-default btn-secondary" value="Book Appointment" style=" margin-left:0px;">
                        
                    </span>
                    
                <span>
                    
   	   	                    <input type="button" onclick="location.href='cus_view_appointments.php?'" name="loginsubmit" class="btn btn-default btn-secondary" value="View Bookings" style=" margin-right:0px;">
                    
                
                    </span>
                    <span>
                    
   	   	                    <input type="button" onclick="location.href='index3.php?logout=1'" name="loginsubmit" class="btn btn-default btn-secondary" value="Logout" >
                    
                    </span>
                </div>
                </div>
                </div>
<br><br><br><br><br>
                <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-5">    
                <div class="row">
                        <img id="#" src="images/acc.png" class="img-fluid" alt="" style="width:550px; height:250px;">
                    </div>
                    </div>
                    <div class="col-md-5"> 
                    <BR> 
                    <H5 style="color:white;">*      EXPERIENCE THE 24/7 ONLINE BOOKING EXPERIENCE</H4>
                    <H5 style="color:white;">* EXPERIENCE & AFFORDABLE PAMPERING </H4>
                    <H5 style="color:white;">* EXPERT SOLUTIONS FOR YOUR BEAUTY PROBLEMS</H4>
                    <H5 style="color:white;">* REFRESH YOURSELF WITH A SKIN TREATMENT</H4>
                    <H5 style="color:white;">* EXPERIENCE THE CUSTOM RECOMMENDATIONS</H4>
                    <H5 style="color:white;">* ENJOY THE BEST SALON EXPERIENCE WITH SALON MANORI</H4>

                
               
               <!--  <a href="index3.php?logout='1'" style="color: red;"> 
                    Click here to Logout 
                </a>  -->
            </p> 
        <?php endif ?> 
    </div> 
    
</body> 
</html> 