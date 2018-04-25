
<!DOCTYPE html>
<html>
<head>

  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.8.2.min.js"></script>
  <script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.13/jquery.popupoverlay.js"></script>

</head>

<body>

<?php
//$q = intval($_GET['q']);

$connection= mysqli_connect('localhost', 'root','','lazzaz');
if (!$connection) {
    die('Could not connect: ' . mysqli_error($connection));
    
}



$q = intval($_GET['q']); //add the form and the button submit

	mysqli_select_db($connection,"lazzaz");

	
	

$sql="SELECT * FROM horse WHERE stallno = '".$q."'";
$result = mysqli_query($connection,$sql);
?>



<table class="table" style="text-align: center">

        <tr style="font-family: serif , font-size: 20px ">
                <th><h5> Stall Number </h5></th>
            <th><h5> Name </h5></th>
                <th><h5> Color </h5></th>
                <th><h5> Speed </h5></th>
            <th><h5> Date of Birth </h5></th>
                <th><h5> Sex </h5></th>
                <th><h5> Origin </h5></th>
            <th><h5> Owner </h5></th>
                <th><h5> Trainer_ID </h5></th>
        </tr>

    

         






<?php
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['StallNo'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Color'] . "</td>";
    echo "<td>" . $row['Speed'] . "</td>";
    echo "<td>" . $row['DOB'] . "</td>";
    echo "<td>" . $row['Sex'] . "</td>";
    echo "<td>" . $row['Origin'] . "</td>";
    echo "<td>" . $row['Owner'] . "</td>";
    echo "<td>" . $row['TrainerID'] . "</td>";
    echo "</tr>";
}
echo "</table>";



?>

</body>

</html>