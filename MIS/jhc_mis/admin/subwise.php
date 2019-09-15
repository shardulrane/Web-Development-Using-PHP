<?php
session_start();
$q=$_GET["q"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MIS";
$dep = $_SESSION["dep"];

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
$sql1="SELECT distinct Subject FROM weeklyplan WHERE Dept_ID='".$dep."' order by Subject asc";
$result1 = $conn->query($sql1);
echo"<option value='0'>Select Subject</option>";
while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)) 
{
echo "<option value='".$row1['Subject']."'>".$row1['Subject']."</option>";
}
?>
<select>

