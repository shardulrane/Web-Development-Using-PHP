<?php
$q=$_GET["q"];
//$q="Commerce";
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
$sql="SELECT * FROM syllabus WHERE Stream = '".$q."' group by Course order by Course asc";

$result = $conn->query($sql);
echo"<option value='0'>Select Couse</option>";
while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
{
	echo "<option value='".$row['Course']."'>".$row['Course']."</option>";
	//echo "<td><input type='text' value=".$row['Paper']." name='paper' id='paper' style='width: 200px;'></td>";
}
echo "</select></td>";

?> 