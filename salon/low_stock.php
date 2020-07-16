<?php
    $db = new mysqli('localhost', 'root', '', 'salondb');
    
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            include('database_connection.php');


            if(!isset($_SESSION["type"]))
            {
                header('location:login.php');
            }

            if($_SESSION['type'] != 'master')
            {
                header('location:index.php');
            }
            include('header.php');
            include('admin-side-nav.php');
        ?>

    <meta charset="utf-8">
    <title>Update Record</title>

    </head>

    <body>
    <br><br>
    <span id='alert_action'></span>
        <div class = "container space" style="margin-left:320px;">
		<div class="row">
			<div class="col-lg-12">
                
				<div class="panel panel-default">
                <div style="background: #9fff80;">
                    <div class="panel-heading">           
                    	<div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title" >Low Stock Items</h3>
                            </div>             
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align='right'>
                                <!-- <button type="button" name="add" id="add_button" class="btn btn-success btn-xs">Add Booking</button> -->
                            </div>
                        </div>
        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row"><div class="col-sm-12 table-responsive">
                            <table class="table table-bordered table-striped">
    
        <div class="form">

         
           <!--  <table width="100%" border="1" style="border-collapse:collapse;"> -->
                <thead>
                    <tr>

                      
                        <th><strong>ID</strong></th>
                        <th><strong>Product Name</strong></th>
                        <th><strong>Available Quantity</strong></th>
                        <th><strong>Product Base Price</strong></th>
                        <th><strong>Last Recieved Date</strong></th>
                        
                    </tr>

                 
                                    
                </thead>
                <tbody>
                <?php
                    $count=1;
                    $sql_query="Select * from product where product_quantity <= '10';";
                    $result = mysqli_query($db,$sql_query);
                    while($row = mysqli_fetch_assoc($result)) { 
                ?>
                    <tr>
                        <td><?php echo $row["product_id"]; ?></td>
                        <td><?php echo $row["product_name"]; ?></td>
                        <td><?php echo $row["product_quantity"]; ?></td>
                        <td><?php echo $row["product_base_price"]; ?></td>
                        <td><?php echo $row["product_date"]; ?></td>
                      

                    </tr>
                    <?php $count++; } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>