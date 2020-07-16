<?php
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	// require_once('inc/header.html');
?>

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
      <title>Salon Manori - Navbar</title>

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


                     <?php
					         // To restrict user to access all the parts of the service. If he is a master then he will be able to access the following
					         if($_SESSION['type'] == 'master')
					         {
					         ?>
                        <li>
                           <a href="index.php"><i class="fa faa fa-file"></i>Dashboard</a></li>
                        <li>

                      
                           <a href="indexSale2.php"><i class="fa faa fa-file"></i>Appointments</a>
                              <ul class="sub-menu">
                              <li>
                                 <a href="cal_admin_view_bookings.php"><i class="fa faa fa-circle"></i>View Appointments</a>
                              </li>
                              <li>
                                 <a href="cal_admin.php"><i class="fa faa fa-circle"></i>Manage Appointments</a></li>
                              </ul>
                              </li>

                              <li>
                                 <a href="#"><i class="fa faa fa-file"></i>User Management</a> 
                                 <ul class="sub-menu">
                                    <li>
                                       <a href="user.php"><i class="fa faa fa-circle"></i>Staff Management</a>
                                    </li>
                                    <li>
                                       <a href="admin_user_management.php"><i class="fa faa fa-circle"></i>Customer Management</a>
                                    </li>  
                                 </ul>
                              </li>

                              <li>
                                 <a href="#"><i class="fa faa fa-file"></i>Services</a>
                                 <ul class="sub-menu">
                                    <li>
                                       <a href="admin_service_add.php"><i class="fa faa fa-circle"></i>Add Services</a>
                                    </li>
                                    <li>
                                       <a href="admin_service_list.php"><i class="fa faa fa-circle"></i>Manage Services</a>
                                    </li>  
                                 </ul>
                              </li>

                              <li>
                              <a href="#"><i class="fa faa fa-file"></i>Sales</a>
                              <ul class="sub-menu">
                              <li>
                              <a class="nav-link" id="v-pills-purchase-tab" data-toggle="pill" href="#v-pills-purchase" role="tab" aria-controls="v-pills-purchase" aria-selected="false">Purchase</a>
                              </li>
                              <li>
                              <a class="nav-link" id="v-pills-vendor-tab" data-toggle="pill" href="#v-pills-vendor" role="tab" aria-controls="v-pills-vendor" aria-selected="false">Vendor</a>
                              </li>
                              <li>
                              <a class="nav-link" id="v-pills-sale-tab" data-toggle="pill" href="#v-pills-sale" role="tab" aria-controls="v-pills-sale" aria-selected="false">Sale</a>
			                     <!-- <a class="nav-link" id="v-pills-customer-tab" data-toggle="pill" href="#v-pills-customer" role="tab" aria-controls="v-pills-customer" aria-selected="false">Customer</a> -->
			                     <!--   <a class="nav-link" id="v-pills-search-tab" data-toggle="pill" href="#v-pills-search" role="tab" aria-controls="v-pills-search" aria-selected="false">Search</a> -->
                              </li>
                              <li>
                              <a class="nav-link" id="v-pills-reports-tab" data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports" aria-selected="false">Reports</a>
                           </li>
                           </ul>
                        </li>
                              <li>
                                 <a href="#"><i class="fa faa fa-file"></i>Suppliers</a>
                                 <ul class="sub-menu">
                                    <li>
                                       <a href="supplier.php"><i class="fa faa fa-circle"></i>Manage Suppliers</a>
                                    </li>  
                                 </ul>
                              </li>
            
                              <li>
                                 <a href="#"><i class="fa faa fa-file"></i>Inventory</a>
                                 <ul class="sub-menu">
                                    <li>
                                       <a href="product.php"><i class="fa faa fa-circle"></i>Product</a>
                                    </li>
                                    <li>
                                       <a href="category.php"><i class="fa faa fa-circle"></i>Category</a>
                                    </li>
                                    <li>
                                       <a href="brand.php"><i class="fa faa fa-circle"></i>Brand</a>
                                    </li>
                                    <li>
                                       <a href="low_stock.php"><i class="fa faa fa-circle"></i>Low Stock Items</a>
                                    </li>

                   <!-- Visible to the other users -->
                             
                           <li>
                              <a href="Order.php"><i class="fa faa fa-circle"></i>Payments</a></li>
                           </ul>
                           </li>  
                           <?php
                           }
                           ?>    


                     <?php
					         // To restrict user to access all the parts of the service. If he is a master then he will be able to access the following
					         if($_SESSION['type'] == 'user')
					         {
                        ?>
                        
                        <li>
                           <a href="index.php"><i class="fa faa fa-file"></i>Dashboard</a></li>
                        <li>

                        <li>
                                 <a href="#"><i class="fa faa fa-file"></i>Inventory</a>
                                 <ul class="sub-menu">
                                    <li>

                                    
                              <a href="Order.php"><i class="fa faa fa-circle"></i>Payments</a></li>
                           </ul>
                           </li>  
                           <?php
                           }
                           ?>   

                        
                        <?php
					         // To restrict user to access all the parts of the service. If he is a master then he will be able to access the following
					         if($_SESSION['type'] == 'supplier')
					         {
                        ?>
                        
                        <!-- <li>
                           <a href="index.php"><i class="fa faa fa-file"></i>Dashboard</a></li>
                        <li> -->
                        <li>
                                 <a href="#"><i class="fa faa fa-file"></i>Suppliers</a>
                                 <ul class="sub-menu">
                                    <li>
                                       <a href="supplier.php"><i class="fa faa fa-circle"></i>Manage Suppliers</a>
                                    </li>  
                                 </ul>
                              </li>
                           <?php
                           }
                           ?>   


            <!-- <li><a href="#"><i class="fa faa fa-link"></i>Billing</a></li> -->
        </ul>
    </div>
</div>
</aside>
</body>
</html>