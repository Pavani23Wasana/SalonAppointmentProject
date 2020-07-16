<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/navbarstyle.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #262626; height: 70px;">
  <a class="navbar-brand" href="index.php" style="color:#ff1ac6; font-style: oblique; font-variant: small-caps; font-size: 25px; text-shadow: 1px 1px aliceblue;"><img class="logo" src="images/logo.png" style="width:80px;height: 50px;">SALON MANORI</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><b>
        <a class="nav-link" href="index.php">Home</a></b>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="beauticians.php">Our Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
     <!--  <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="Appointment_service.php">Book an Appointment</a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
        <div class="input-group">
           <input class="form-control input-sm" id="inputsm" type="text" placeholder="search" size="15" arial-label="search"  style="margin-right: 0px;">
             <div class="input-group-append">

      <button class="btn btn-secondary mr-sm-2 btn-search" type="button"><i class="fa fa-search"></i></button>
    </div>
    </div>&#160;

   <!--    <button class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle = "dropdown" aria-haspopup="true" aria-expanded="false">Login</button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="login.php">action</a>
      <a class="dropdown-item" href="login.php">action</a>
      </div>
      </div> -->

        <ul class="navbar-nav ml-auto">
          <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <h5 class="mr-2 d-none d-lg-inline" id="login-user"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Login</h5>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" routerLink="/donor-login">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Donor Login
                </a>
                <a class="dropdown-item" routerLink="/donee-login">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Donee Login
                </a> 
                <a class="dropdown-item" routerLink="/hospital-login">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Hospital Login
                </a>
                <a class="dropdown-item" routerLink="/admin-login">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Admin Login
                </a>                
              </div>
            </li>
        </ul>      
    </form>  
  </div>
</nav>

<script src="js/jquery.js"></script>     
<script src="js/bootstrap.js"></script>
</body>
</html>
