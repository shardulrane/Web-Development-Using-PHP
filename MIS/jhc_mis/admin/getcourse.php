<?php
session_start();
$dep = $_SESSION["dep"];
$q=$_GET["q"];
$_SESSION["stream"] = $q;
//$q="Professional Communication Skills";
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
$sql="SELECT * FROM Course WHERE Stream = '".$q."' AND (Dept_ID IS NULL OR Dept_ID = '$dep') order by Course_Name asc";

$result = $conn->query($sql);
echo"<option value='0'>Select Course</option>";
while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
{
	echo "<option value='".$row['Course_Name']."'>".$row['Course_Name']."</option>";
	//echo "<td><input type='text' value=".$row['Paper']." name='paper' id='paper' style='width: 200px;'></td>";
}
echo"</select></td>";

?> 