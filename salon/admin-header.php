<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="css/admin-header.css">

	<title></title>
</head>
<body>

<nav class="navbar navbara navbar-dark navbar-expand-lg">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo.png" width="50" height="30" class="d-inline-block align-top" alt="">
      Salon Manori
    </a>
    <button class="navbar-toggler navbar-togglera" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <form class="form-inline my-2 my-lg-0">
          <i class="fa fa-bell not-icon"></i>
          <i class="fa fa-envelope not-icon"></i>
          <div class="input-group">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
               <button class="btn btn-secondary btn-search btn-searcha" type="button"><i class="fa fa-search fa-searcha"></i></button>
            </div>
          </div>&#160;
          <ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count"></span> <?php echo $_SESSION["user_name"]; ?></a>
							<ul class="dropdown-menu">
								<li><a href="profile.php">Profile</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
					</ul>
        </form>
    </ul>
  </div>
</nav>


<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>