<?php

include 'dbconnection.php';

$conn = OpenCon();

$user = $_POST['username'];
$pass = $_POST['password'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$mobile = $_POST['mobileNo'];
$email = $_POST['email'];
$gend = $_POST['gender'];

$sql = "INSERT INTO customer_register(username,password,firstname,lastname,mobileno,email,gender) VALUES ('$user','$pass','$fname','$lname','$mobile','$email','$gend')";

if ($conn->query($sql) ===TRUE) 
{
	if($user=='')
  {
	echo "<script>alert('Please enter Username')</script>";
  }
  else if($pass=='')
  {
	echo "<script>alert('Please enter Password')</script>";
  }
  else
  {
  	echo "<script>alert('Registration successfully !')</script>";
  	header("refresh:2, url = login2.php");
  }

}
else{
	echo "error:".$sql."<br>".$conn->error;
}

CloseCon($conn);

?>


