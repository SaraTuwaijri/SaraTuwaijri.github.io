
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
<?php

	$FName = $_POST['fname'];
	$lname = $_POST['lname'];
	$Nationality = $_POST['nat'];
	//$dob = $_POST['birthday'];
	$Sex = $_POST['sex'];
	$Email = $_POST['email'];
	$Phone = $_POST['phone'];
	$Reg_Type = $_POST['regtype'];
	
	
	$server= "localhost";
	$username="root";
	$pass="";
	$dbname="db";
	

	// Create connection
	$con =  mysqli_connect($server, $username, $pass,$dbname);
	
	if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
		}
?>

	<div class="container-fluid">
		
			<img height="100%" width="100%" src="mem/thankyou.png">
		
	</div>

<?php
		
	$query= "INSERT INTO member VALUES ('$FName','$lname','$Sex','$Nationality','$Phone','$Email','$Reg_Type')";

	mysqli_query($con, $query);

	mysqli_close($con);
	?>

</body>
</html>