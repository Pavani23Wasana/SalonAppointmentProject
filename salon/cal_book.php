<?php
// Starting the session, to use and 
// store data in session variable 
session_start(); 

// If the session variable is empty, this  
// means the user is yet to login 
// User will be sent to 'login.php' page 
// to allow the user to login
if (!isset($_SESSION['username'])) { 
    $_SESSION['msg'] = "You have to log in first"; 
    header('location: login2.php'); 
} 
?> 

<?php
$mysqli = new mysqli('localhost', 'root', '', 'salondb');

if(isset($_GET['date'])){
    $date = $_GET['date'];

    $stmt = $mysqli->prepare("select * from bookings where date = ?");
    $stmt->bind_param('s', $date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }
            
            $stmt->close();
        }
    }
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $timeslot = $_POST['timeslot'];
    $beautician = $_POST['beautician'];
    $services = $_POST['services'];
    $notes = $_POST['notes'];

    $stmt = $mysqli->prepare("select * from bookings where date = ? AND timeslot =?");
    $stmt->bind_param('ss', $date, $timeslot);
   
    if($stmt->execute()){
        $result = $stmt->get_result();
        $status="Not Approved";
        
        if($result->num_rows>0){ 
            $msg = "<div class='alert alert-danger'>Already Booked</div>";
           
        }else{
            $stmt = $mysqli->prepare("INSERT INTO bookings (name, timeslot, email, date,status,beautician,services,notes) VALUES (?,?,?,?,?,?,?,?)");
            $stmt->bind_param('ssssssss',$name, $timeslot, $email, $date,$status,$beautician,$services,$notes);
            $stmt->execute();
            $msg = "<div class='alert alert-success'>Booking Successfull.Wait for the confirmation.</div>";
            $bookings[]=$timeslot;
            $stmt->close();
            $mysqli->close();

        }
    }
}


$duration = 30;
$cleanup = 0;
$start = "08:00";
$end = "20:00";

function timeslots($duration,$cleanup, $start, $end){
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new DateInterval("PT".$duration."M");
    $cleanupInterval = new DateInterval("PT".$cleanup."M");
    $slots = array();

    for($intStart = $start; $intStart<$end;$intStart->add($interval)->add($cleanupInterval)){
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);
        if($endPeriod>$end){
        break;
        }

        $slots[] = $intStart->format("H:iA")."-".$endPeriod->format("H:iA");

    }

    return $slots;
}



?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
  </head>

  <body style="background-image:url(images/2.png)">
    <div class="container">
        <br><br>
            <div class="row">
		        <div class="col-md-3"></div>
   	   	        <div class="col-md-5">	
				    <div class="row">
   	   	  		        <div class="col-md-6">
				            <img style="width:100px; height:80px; margin-left:210px;" id="#" src="images/logo.png" class="img-fluid" alt="">
				        </div>
				        <div class="col-md-6">
				            <!-- <p style="color:#cc0066; font-size: 22px; margin-right:70px;" class="salon-logo">SALON MANORI</P> -->
				        </div>
				    </div>
                </div>
                </div>

        <h1 class="text-center">Book for Date: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr><br>
            <div class="row">
                <div class="col-md-12">
                    <?php echo isset($msg)?$msg:""; ?>
                </div>
        <?php $timeslots = timeslots($duration, $cleanup, $start, $end);
            foreach($timeslots as $ts){
        ?>

                <div class="col-md-2">
                    <div class ="form-group">
                    <?php if(in_array($ts, $bookings)){ ?>
                    <button class = "btn btn-danger"><?php echo $ts; ?></button>

                    <?php }else{ ?>
                    <button class = "btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>
                    <?php } ?>
                
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

            <br><br><br>
                <div class="form-group" style="margin-left:700px;"> 
   	   	            <input type="button" onclick="location.href='cal_index.php?'" name="loginsubmit" class="btn btn-default  btn-primary" value="Back">
                
   	   	            <input type="button" onclick="location.href='index2.php?'" name="loginsubmit" class="btn btn-default btn-primary" value="Home">
                </div>                

        <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Booking: <span id="slot"></span></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class = "col-md-12">
                       
                <!-- information of the user logged in -->  
        <?php  if (isset($_SESSION['username'])) : ?>      
        <div class="content">           
            <?php endif ?>
        </div> 
                    <form action=""method="post">
                        <div class="form-group">
                            <label for="">Timeslot</label>
                                <input required type="text" readonly name="timeslot" id="timeslot" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Name</label>
                                <input required type="text" readonly name="name" value="<?php echo $_SESSION['username']; ?>"  class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Email</label>
                                <input required type="text" name="email" class="form-control" placeholder="Enter Your Email Here">
                        </div>

                        <div class="form-group">
                                <label>Select Your Preferred Beautician</label>
                                <div class="input-group">           
                                        <select name="beautician" id="beauticean" required>
                                            <option value="Manori"> Manori Pieris </option>
                                            <option value="Madhushi">Madhushi Nanayakkara</option>
                                            <option value="Nishie">Nishie Fernando</option>
                                            <option value="Ashini">Ashini Heenatigala</option>
                                            <option value="Roshana">Roshana Pieris</option> 
                                            <option value="Book With an Available Beautician">Book With an Available Beautician</option>                                       
                                        </select>                              
                                </div>
                        </div>

                            <div class="form-group">
                                <label>Select Services</label>
                                <div class="input-group">           
                                        <select name="services" id="services" required>
                                            <option value="Hair Cut and blow dry"> Hair Cut and blow dry </option>
                                            <option value="Perming & smoothing"> Perming & smoothing </option>
                                            <option value="Morrocon oil treatment">Morrocon oil treatment</option>
                                            <option value="Hair extention  fashion colour">Hair extention  fashion colour</option>
                                            <option value="Waxing">Waxing</option>
                                            <option value="Clean Up">Clean Up</option> 
                                            <option value="Full Facial">Full Facial</option> 
                                            <option value="Eye Treatment"> Eye Treatment</option>
                                            <option value="Dressing"> Dressing </option>
                                            <option value="MakeUp">MakeUp</option>
                                            <option value="Gel Nails & Acrylac Nails">Gel Nails & Acrylac Nails</option>
                                            <option value="Threading">Threading</option>
                                            <option value="Clean Up">Clean Up</option> 
                                            <option value="Full Facial">Full Facial</option>
                                            <option value="White hair coverage (Full Head)">White hair coverage (Full Head)</option>
                                            <option value="Deep conditioning Treatment">Deep conditioning Treatment</option>
                                            <option value="Classic Manicure">Classic Manicure</option>
                                            <option value="Delux Manicure">Delux Manicure</option> 
                                            <option value="Classic Pedicure">Classic Pedicure</option>                                       
                                        </select>                              
                                </div>
                            </div>

                            <div class="form-group">
                            <label for="">Appointment Notes (Optional)</label>
                                <textarea name="notes" class="form-control" Placeholder="Add a Note to your Appointment. To Protect your Privacy Do not include any Priviledged Material such as Personal Health Information"></textarea>
                        </div>


                        <div class="form-group pull-right">
                            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>     
        </div>   
        </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script>
    $(".book").click(function(){
        var timeslot = $(this).attr('data-timeslot');
        $("#slot").html(timeslot);
        $("#timeslot").val(timeslot);
        $("#myModal").modal("show");
    })

  /*   $(".book").click(function(){
        var username = $(this).attr('data-username');
        $("#username").html(username);
        $("#username").val(username);
        $("#myModal").modal("show");
    }) */

    </script>
  
  
  </body>

</html>

<!-- $bookings = array(); -->

<!-- while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            } -->

            <!-- $stmt->close(); -->