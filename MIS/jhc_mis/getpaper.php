<?php
session_start();
$q=$_GET["q"];
$Subject = $_SESSION['Subject'];
echo $Subject;
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
$sql="SELECT * FROM syllabus WHERE Subject='".$Subject."';";

$result = $conn->query($sql);
while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
{
	echo "<option value='".$row['Paper']."' selected>".$row['Paper']."</option>";
}
echo "</select></td>";

?> 