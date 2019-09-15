<?php
session_start();
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
		//put header
	}

		
		
if ($stmt = $conn->prepare("INSERT INTO Class_reg VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
	$stmt->bind_param('issssssss', $id, $name , $Semester, $class, $division, $Subject, $Paper, $Theory, $Practical);
}
else {
    printf("Errormessage: %s\n", $conn->error);
}

// Set Parameters And Execute
$id ="";
$stream=$_POST['stream'];
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
$name= $_POST["name"];
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
$course =$_POST['course'];
$course1 ="(". $course .")";
$class= $year1. " " .$stream1. " " .$course1;
$division =$_POST['div'];
$Semester =$_POST['sem']; //"2";
$Subject = $_POST['sub'];//"12:12:10";
$Paper =$_POST['papersh'];//"10:10:10";
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