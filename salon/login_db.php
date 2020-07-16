<?php

include 'dbconnection.php';

$conn = OpenCon();

$user = $_POST['username'];
$pass = $_POST['password'];

$select = "SELECT * FROM customer_register where username = '$user' && password = '$pass'";
$result = mysqli_query($conn,$select);
$num = mysqli_num_rows($result);

if($num == 1)
{
  header('location:cus_book.php');
}
else
{
	header('location:login2.php');
}

CloseCon($conn);

?>