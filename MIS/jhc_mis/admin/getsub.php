<?php
session_start();
$q=$_GET["q"];
//$q="First";
$Course=$_SESSION['Course'];
//echo $Course;
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
$sql="SELECT * FROM syllabus WHERE Course = '".$Course."' AND Semester='".$q."' group by Subject order by Subject asc";

$result = $conn->query($sql);
echo"<option value='0'>Select Subject</option>";
while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
{
	echo "<option value='".$row['Subject']."'>".$row['Subject']."</option>";
}
echo "</select></td>";

?> 