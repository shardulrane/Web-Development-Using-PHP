<?php
session_start();
$q=$_GET["q"];
$_SESSION['Course']= $q;
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
$sql="SELECT * FROM syllabus WHERE Course = '".$q."' group by year order by year asc";

$result = $conn->query($sql);
echo"<option value='0'>Select Year</option>";
while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
{
	echo "<option value='".$row['Year']."'>".$row['Year']."</option>";
	//echo "<td><input type='text' value=".$row['Paper']." name='paper' id='paper' style='width: 200px;'></td>";
}
echo "</select></td>";

?> 