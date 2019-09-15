<?php
session_start();
$a=$_SESSION["pid"];
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

		
		
if ($stmt = $conn->prepare("INSERT INTO weeklyplan VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
	$stmt->bind_param('issssssss', $id, $class, $a, $sem, $Subject, $sDate, $eDate, $tTopics_Cover, $pTopics_Cover);
}
else {
    printf("Errormessage: %s\n", $conn->error);
}
// Set Parameters And Execute
$d =$_POST['timestamp'];
$sDate=date('Y-m-d',strtotime($d));
$d0 =$_POST['timestamp0'];
$eDate=date('Y-m-d',strtotime($d0));
$id ="";
$class =$_POST['class'];//"F.Y.I.T";
$sem =$_POST['sem'];
$Subject =$_POST['sub'];
if(isset($_POST['type']))
{
	$tTopics_Cover= $_POST['topics'];
	
}
else{
$tTopics_Cover= "";
}
if(isset($_POST['types']))
{
		$pTopics_Cover= $_POST['method`'];
}
else{
$pTopics_Cover= "";
}
	if (!$stmt->execute()) 
	{
		echo "<script type='text/javascript'>alert('Error:Please Enter Correct Data')</script>";
	}
	else
	{
	$message = "Your Weekly Plan Has Been Updated.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo"<script type='text/javascript'> setTimeout(function(){ location.assign('createplan.php'); }, 1000);</script>";
	}

//Closing Sessions.
	$stmt->close();
	$conn->close();
?>