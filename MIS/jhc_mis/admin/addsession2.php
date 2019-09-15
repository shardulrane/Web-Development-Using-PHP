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

while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
{
	$q1 = $row['Dept_ID'];
		$_SESSION["dep"] = $q1;
}
$sql1="SELECT distinct Class FROM weeklyplan WHERE Dept_ID = '".$q1."' order by Class asc";

$result1 = $conn->query($sql1);
echo"<option value='0'>Select Class</option>";
while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)) 
{
echo "<option value='".$row1['Class']."'>".$row1['Class']."</option>";
}
?>
<select>

