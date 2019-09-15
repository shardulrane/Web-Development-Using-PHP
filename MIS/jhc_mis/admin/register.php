<?php
session_start();
$dep = $_SESSION['dep'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MIS";
$Semester =$_POST['sem']; //"2";
$Subject = $_POST['sub'];
$Faculty = $_POST["name"];
// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
		//put header
	}
$sql="SELECT * FROM Syllabus WHERE Subject = '".$Subject."' AND Semester ='".$Semester."'";
	$result = $conn->query($sql);
while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
{
		$stream = $row['Stream'];
}

$sql1="SELECT * FROM employee WHERE Name = '".$Faculty."'";
	$result1 = $conn->query($sql1);
while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)) 
{
		$Emp_Id = $row1['Emp_No'];
}		
		
if ($stmt = $conn->prepare("INSERT INTO Class_reg VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
	$stmt->bind_param('issssssssss', $id, $class, $dep, $Semester, $Subject, $paper, $division, $Emp_Id, $Faculty, $Theory, $Practical);
}
else {
    printf("Errormessage: %s\n", $conn->error);
}
$Emp_Id = $Emp_Id;
// Set Parameters And Execute
$id ="";
if($stream == "Commerce")
{
	$stream1="BCom";
}
if($stream == "Science")
{
	$stream1="BSc";
}
if($stream == "Arts")
{
	$stream1="BA";
}
$Faculty = $_POST["name"];
$year =$_POST['year'];
if($year == "First"){
	$year1="FY";
}
if($year == "Second"){
	$year1="SY";
}
if($year == "Third"){
	$year1="TY";
}
$course = $_POST['seldep'];
$class = $year1. "" .$stream1. "( " .$course.")";
$division =$_POST['div'];
$Semester =$_POST['sem']; //"2";
$Subject = $_POST['sub'];//"12:12:10";
$paper =$_POST['papersh'];//"10:10:10";
if(isset($_POST['type']))
{
	$Theory =$_POST['type'];//"Practical"; //  Displaying Selected Value
}
else
	{
	$Theory ="";//"Practical"; //  Displaying Selected Value
}

if(isset($_POST['types']))
{
	$Practical =$_POST['types'];//"Practical"; //  Displaying Selected Value
}
else
	{
	$Practical ="";//"Practical"; //  Displaying Selected Value
}

	if (!$stmt->execute()) 
	{
		echo "<script type='text/javascript'>alert('Error:Please Enter Correct Data')</script>";
	}
	else
	{
	$message = "Your Class Has Been Registered Successfully!!!.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo"<script type='text/javascript'> setTimeout(function(){ location.assign('classreg.php'); }, 1000);</script>";
	}

//Closing Sessions.
	$stmt->close();
	$conn->close();
?>