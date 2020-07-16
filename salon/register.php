<?php include('server.php') ?> 
<!DOCTYPE html> 
<html> 
<head> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>Register</title>
</head> 
  
<body> 

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <p style="color:#cc0066" class="salon-logo">SALON MANORI</P>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <h4 style="font-size: 25px; text-align:right;">Sign Up!</h4>
                    </div>
                </div>
                <p style="font-size: 14px;">Note: If you have been to this location before, Use the same first name, last name and email you provided</p>
            <div class="row">
            <?php include('errors.php'); ?>
                <div class="col-md-6">      
            <form method="post" action="register.php"> 
   
                <?php include('errors.php'); ?>

				<label style="font-size: 17px"class="label control-label">Name</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-user" style="font-size: 17px"></i></span>
                <input style="font-size: 17px" type="text" class="form-control" name="name"  placeholder="Name" required>
              <p class="nameErr"></p>
              </div>

                <label style="font-size: 17px"class="label control-label">Username</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-user" style="font-size: 17px"></i></span>
                <input style="font-size: 17px" type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Username" required>
              <p class="nameErr"></p>
              </div>

			  <label style="font-size: 17px" class="label control-label">Enter Password</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-lock" style="font-size: 17px"></i></span>
                <input style="font-size: 17px" type="Password" class="form-control" name="password_1" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                <p class="passErr"></p>
                </div>

			<div class="input-group">
              <label style="font-size: 17px;" class="label control-label">Gender</label>
              <input style="font-size: 15px;" type="radio" name="gender" id="male" class="radio" value="male">&nbsp<label id="rd"><small>Male</small></label>
              <input style="font-size: 15px; color:white;" type="radio" name="gender" id="female" class="radio" value="female">&nbsp<label id="rd"><small>Female</small></label></div>
              </div>

               

			 <div class="col-md-6">

			  

			  <label style="font-size: 17px"class="label control-label">Mobile No</label>
   	   	 	    <div class="input-group">
   	   	 	    <span class="input-group-addon"><i class="fas fa-phone" style="font-size: 17px"></i></span>
					   <input style="font-size: 17px" type="tel" class="form-control"  name="mobileNo" placeholder="Mobile No" pattern="^\d{10}$" required>
					</div>
              
			  <label style="font-size: 17px"class="label control-label">E-mail</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-envelope" style="font-size: 17px"></i></span>
                       <input style="font-size: 17px" type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="E-mail" pattern="/^[a-zA-z0-9.!#$%&`*+/=?^_'{|}~-]+@[a-zA-z0-9-]+()?:\.[a-zA-z0-9-]+)*$/" required>
              </div>  

			  <label style="font-size: 17px" class="label control-label">Confirm Password</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-lock" style="font-size: 17px"></i></span>
                <input style="font-size: 17px" type="Password" class="form-control" name="password_2" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                <p class="passErr"></p>
                </div>

				<input  type="checkbox" required><small>&nbsp I agree with Terms and conditions</small><br>
				</div>

                  <div class="form-group"> 
              <input type="submit" name="reg_user" class="btn btn-default btn-primary" value="Sign me up and Log me in">
                </div>

    </form> 
</body> 
</html> 