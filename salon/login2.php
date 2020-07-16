<?php include('server.php') ?> 
<!DOCTYPE html> 
<html> 
<head> 
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">  
    <title>Login Page</title>
</head> 
<body style="background-image:url(images/lg3.jpg)">

    <div class="container">
    <form method="post" action="login2.php"> 
       <div class="row">
          <div class="col-md-3"></div>
            <div class="col-md-5">    
                <div class="row">
                    <div class="col-md-6">
                        <img id="#" src="images/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <p style="color:#cc0066; font-size: 22px;" class="salon-logo">SALON MANORI</P>
                    </div>
                </div>
        <h4 class="text-center">Login here</h4>

              <?php include('errors.php'); ?>

        <label style="font-size: 18px"class="label control-label">Username or E-mail</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-user" style="font-size: 21px"></i></span>
                   <input style="font-size: 18px" type="text" class="form-control" name="username" placeholder="username or E-mail" required>
                   <p class="nameErr"></p>
            </div>
			<label style="font-size: 18px" class="label control-label">Password</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-lock" style="font-size: 21px"></i></span>
                   <input style="font-size: 18px" type="Password" class="form-control" name="password" id="password" placeholder="Password"  required>
            </div>

        <input  type="checkbox" onclick="pswrdvisible()"><small>&nbsp Show Password</small><br>

         <div class="form-group"> 
            <input type="submit" name="login_user" class="btn btn-default btn-sm btn-primary" value="LOGIN">
        </div> 

        <p id="submission" style="font-size: 16px" class="text-center">Don't have an account yet? <a href="register.php">SIGN UP</a></p>

    </form> 
    <div class="col-md-3"></div>

    <script src="js/bootstrap.js"></script>    
    <script src="js/loginjs.js"></script> 

</body>  
</html> 