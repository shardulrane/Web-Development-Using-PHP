<?php 
session_start();
$q=$_GET['q'];
$_SESSION['Class8']="$q";
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
	
	$sql="SELECT * FROM class_reg WHERE Class ='".$q."' Group By Semester;";
	
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
   echo "<option value='0'>Select Semester</option>";
while($row = $result->fetch_assoc())   
  {
  echo "<option value=".$row['Semester'].">".$row['Semester']."</option>";
  }
	}
	echo "</select></td>";
	$con->close(); 
	?>