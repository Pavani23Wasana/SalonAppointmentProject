<!DOCTYPE html>
<html>
<head>
	    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
        <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
        <link rel="stylesheet" type="text/css" href="css/admin-side-nav.css">
		<script src="js/jquery-1.10.2.min.js"></script>
		<link rel="stylesheet" href="css/bootstrapi.min.css" />
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
		<script src="js/bootstrapi.min.js"></script>
        <title>Salon Manori</title>

	<title></title>
</head>
<body>
<div class="container-fluid">
<aside class="sidebar">
    <div class="user-info" style="background: url(images/user-img-background.jpeg)">
       <div class="logo-section">
          <div class="image">
              <img src="images/user.png" width="78" height="78" alt="User" />
          </div>
          <div class="info-container">
          <span class="label label-pill label-danger count"></span> <?php echo $_SESSION["user_name"]; ?></a>
          <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count"></span> <?php echo $_SESSION["email"]; ?></a>            -->
          </div>
       </div>
    </div>
    <div class="menu">
               <ul class="menu-bar">
            <li><a href="index.php"><i class="fa faa fa-file"></i>Dashboard</a></li>
            <li>

               <a href="#"><i class="fa faa fa-file"></i>Appointments</a>
               <ul class="sub-menu">
                  <li><a href="cal_admin_view_bookings.php"><i class="fa faa fa-circle"></i>View Appointments</a></li>
                  <li><a href="cal_admin.php"><i class="fa faa fa-circle"></i>Manage Appointments</a></li>
               </ul>
            </li>
            <li>
                <a href="#"><i class="fa faa fa-file"></i>Inventory</a>
                <ul class="sub-menu">
                  
                
                   <li><a href="Order.php"><i class="fa faa fa-circle"></i>Payments</a></li>
                </ul>
            </li>  
            
            
    </div>
</div>
</aside>
</body>
</html>