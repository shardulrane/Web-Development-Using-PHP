<?php
session_start();
$q=$_GET["q"];
$_SESSION['Subject']= $q;
//$q="First";
$Course=$_SESSION['Course'];
echo $Course;
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
$sql="SELECT * FROM Teachers WHERE Course = '".$Course."' group by Name order by Name asc;";

$result = $conn->query($sql);
echo"<option value='0'>Select Faculty</option>";
while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
{
	echo "<option value='".$row['Name']."'>".$row['Name']."</option>";
}
echo "</select></td>";

?> 