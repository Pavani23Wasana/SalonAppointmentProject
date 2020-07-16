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
                            	<h3 class="panel-title">View Upcoming Appointments</h3>
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

                        <th><strong>Bookinng ID</strong></th>
                        <th><strong>Name</strong></th>
                        <th><strong>Email</strong></th>
                        <th><strong>Date</strong></th>
                        <th><strong>Timeslot</strong></th>
                        <th><strong>Beautician</strong></th>
                        <th><strong>Services</strong></th>
                        <th><strong>Notes</strong></th>
                        <th><strong>Status</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $count=1;
                    $sql_query="Select * from bookings where status='Approved';";
                    $result = mysqli_query($db,$sql_query);
                    while($row = mysqli_fetch_assoc($result)) { 
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["date"]; ?></td>
                        <td><?php echo $row["timeslot"]; ?></td>
                        <td><?php echo $row["beautician"]; ?></td>
                        <td><?php echo $row["services"]; ?></td>
                        <td><?php echo $row["notes"]; ?></td>
                        <td><?php echo $row["status"]; ?></td>

                        <!-- <td>
                        <a href="cal_confirmbooking.php?id=<?php echo $row["id"]; ?>">Confirm booking</a>
                        </td> -->

                    </tr>
                    <?php $count++; } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>