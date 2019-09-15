<?php
session_start();
$q=$_GET["q"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MIS";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
$sql="SELECT * FROM Department WHERE Dept_Name = '".$q."'";

$result = $conn->query($sql);
echo"<option value='0'>Select Course</option>";
while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
{
	$q1 = $row['Dept_ID'];
		$_SESSION["dep"] = $q1;
}

?>