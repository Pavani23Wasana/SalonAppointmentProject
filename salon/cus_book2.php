<html>
<head>
<link rel="stylesheet" href="main.css">
<style>
table{
    width: 85%;
    border-collapse: collapse;
	border: 4px solid black;
    padding: 5px;
	font-size: 25px;
}

th{
border: 4px solid black;
	background-color: #4CAF50;
    color: white;
	text-align: left;
}
tr,td{
	border: 4px solid black;
	background-color: white;
    color: black;
}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head><?php include "'dbconnection.php'"; ?>
<body style="background-image:url(images/contact.jpg)">
<div class="header">
				<ul>
					<li style="float:left;border-right:none"><strong><?php session_start(); echo $_SESSION['user']; ?></strong></li>
					<!-- <li><a href="ulogin.php">Home</a></li> -->
				</ul>
</div>
<center>
	<?php
	$username=$_SESSION['username'];
	$sql1 = "Select * from bookings where username ='".$username."' order by DOV desc";
			$result1=mysqli_query($conn, $sql1);  
			echo "<table>
					<tr>
					<th>ID</th>
					<th>Name</th>
					<th>email</th>
					<th>Date</th>
					<th>time slot</th>
					<th>status</th>
					</tr>";
			while($row1 = mysqli_fetch_array($result1))
			{
				// $sql2="SELECT * from doctor where did=".$row1['DID'];
				// $result2= mysqli_query($conn,$sql2);
				// while($row2= mysqli_fetch_array($result2))
				// {
				// 	$sql3="SELECT * from clinic where CID=".$row1['CID'];
				// 		$result3= mysqli_query($conn,$sql3);
				// 		while($row3= mysqli_fetch_array($result3))
				// 		{
								echo "<tr>";
								echo "<td>" . $row1['id'] . "</td>";
								echo "<td>" . $row1['name'] . "</td>";
								echo "<td>" . $row3['email']."-".$row3['town'] . "</td>";
								echo "<td>" . $row2['date'] . "</td>";
								echo "<td>" . $row1['timeslot'] . "</td>";
								echo "<td>" . $row1['status'] . "</td>";
								echo "</tr>";
						}
				
				
			
	?>
</center>
</body>
</html>