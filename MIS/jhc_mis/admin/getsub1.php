<?php
session_start();
$q=$_GET["q"];
$dep = $_SESSION["dep"];
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
	
	$sql="SELECT * FROM Syllabus WHERE Dept_ID = '".$dep."' AND Semester ='".$q."'";
	$result = $conn->query($sql);
	//echo $result;
	echo"<option value='0'>Select Subject</option>";
while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
{
	echo "<option value='".$row['Subject']."'>".$row['Subject']."</option>";
}
echo"</select></td>";
  
?> 