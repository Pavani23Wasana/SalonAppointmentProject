<?php
    $db = new mysqli('localhost', 'root', '', 'salondb');
    $id=$_REQUEST['id'];
    $sql="UPDATE bookings SET status = 'Approved' WHERE id=$id";
    if(mysqli_query($db, $sql)){
        echo "Bookings is approved";
    }else{
        echo "System error occured";
    }
    header("location:index.php");;
?>