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
        <span id='alert_action'></span>
            <div class = "container space" style="margin-left:320px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    <div style="background: #9fff80;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                                    <h3 class="panel-title">User Management</h3>
                                </div>             
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align='right'>
                                    <!-- <button type="button" name="add" id="add_button" class="btn btn-success btn-xs">Add Customers</button> -->
                                </div>
                            </div>
        </div>
                        </div>
                        <div class="panel-body">
                            <div class="row"><div class="col-sm-12 table-responsive">

                                <table class="table table-bordered table-striped">
                                    <div class="form">         
                                        <thead>
                                            <tr>
                                                <th><strong>Customer ID</strong></th>
                                                <th><strong>Name</strong></th>
                                                <th><strong>Mobile No</strong></th>
                                                <th><strong>Email</strong></th>
                                                <th><strong>Gender</strong></th>
                                                <th><strong>Action</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $count=1;
                                                $sql_query="Select * from customer_register";
                                                $result = mysqli_query($db,$sql_query);
                                                while($row = mysqli_fetch_assoc($result)) { 
                                            ?>
                                            <tr>
                                                <td><?php echo $row["id"]; ?></td>
                                                <td><?php echo $row["name"]; ?></td>
                                                <td><?php echo $row["mobileNo"]; ?></td>
                                                <td><?php echo $row["email"]; ?></td>
                                                <td><?php echo $row["gender"]; ?></td>

                                                <td>
                                                    <a href="admin_user_management_action.php?delete=<?= $row['id']; ?>" class="btn btn-danger btn-xs onclick="return confirm('Do you want to delete this record?');">Delete</a>
                                                </td>

                                            </tr>
                                            <?php $count++; } ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
        </div>
    </body>
</html>