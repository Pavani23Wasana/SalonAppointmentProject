<?php
include 'admin_service_action.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php


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
   <!--  <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Details</title> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrapi.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrapi.min.css"> -->
   <!--  <link rel="stylesheet" type="text/css" href="css/x.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script> -->

   

</head>
<body>

<div class = "container space" style="margin-left:310px;">
    <div class="row">
            <hr>
                <?php if(isset($_SESSION['response'])){ ?>
                    <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
                        <?php ("refresh:4, url = admin_service_list.php");?>
                            <button type="button" class="close" data-dismiss="alert" >&times;</button>  
                                <b><?= $_SESSION['response']; ?></b>          
                    </div>
                                <?php } unset($_SESSION['response']); ?>
        
    </div>

    <div class="row" >
        <!-- <div class="col-md-2 mx-auto">
        </div> -->
            <div style="background: #e6e6ff; margin-bottom:22px;">
                <!-- <div class="row" > -->
                <div class="col-md-9">
                    <h2 class="text-center text-info" style="background: #9fff80; margin-bottom:22px; margin-top: 12px;" > Service Management</h2>
                </div>
                        <!-- <div class="col-md-2 mx-auto">
                        </div> -->
                    <div class="col-md-3">
                        <div class= "form-group">
                            <a href="admin_service_add.php">
                                <input type="submit" name="add" class="btn btn-primary btn-block" style="margin-top: 12px; margin-bottom: 12px;" value="Add Service"></a>   
                        </div>
                    </div> 
            </div>
    </div>
        </div>
    
    <div class="row" style="margin-left:100px;"> 
    <div class="col-md-2 mx-auto"></div>

   <div class="col-md-9 mx-auto">

                <!-- To pass the data to the displaying table -->
                <?php
                $query="SELECT * FROM service";
                $stmt=$conn->prepare($query);
                $stmt->execute();
                $result=$stmt->get_result();
                ?>

            
             <table class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>ID</th>
                    <th>Service_Category</th>
                    <th>Service Name</th>
                    <th>Price (Rs.)</th>
                    <th>Time (hrs)</th>
                    <th>Description</th>
                    <th>Action</th>
                
                </tr>
                </thead>
                <tbody>

                <!-- To pass the data to the displaying table -->
                    <?php while($row=$result->fetch_assoc()){ ?>
                <tr>
                <td><?= $row['id']; ?></td>
                    <!-- <td><img src="<?= $row['photo']; ?>" alt="" width="25"></td> -->
                    <td><?= $row['service_category']; ?></td>
                    <td><?= $row['service_name']; ?></td>
                    <td><?= $row['service_price']; ?></td>
                    <td><?= $row['service_time']; ?></td>
                    <td><?= $row['description']; ?></td>
                    <td>

                    <a href="admin_service_details.php?details=<?= $row['id']; ?>" class="btn btn-primary btn-xs onclick">Details</a> |
                    <a href="admin_service_action.php?delete=<?= $row['id']; ?>" class="btn btn-danger btn-xs onclick" onclick="return confirm('Do you want to delete this record?');">Delete</a> |
                    <a href="admin_service_add.php?edit=<?= $row['id']; ?>" class="btn btn-success btn-xs onclick">Edit</a>
                    </td>
                </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
       </div>
    </div>
</body>
</html>

