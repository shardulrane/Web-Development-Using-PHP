<?php 
session_start();
$q=$_GET['q'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MIS";

// Create connection
	$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($con->connect_error) 
	{
		die("Connection failed: " . $con->connect_error);
	}
	
	$sql="SELECT * FROM Employee WHERE Dept_ID ='".$q."';";
	
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
   echo "<option value='0'>Select Faculty Name</option>";
while($row = $result->fetch_assoc())   
  {
  echo "<option value='".$row['Name']."'>".$row['Name']."</option>";
  }
	}
	echo "</select></td>";
	$con->close(); 
	?>