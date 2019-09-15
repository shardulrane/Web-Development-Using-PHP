<?php
/* session_start();
$pid=$_SESSION['pid']; */
$q=$_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MIS";

// Create connection
	$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($con->connect_error) 
	{
		die("Connection failed: " . $con->connect_error);
	}
	
	$sql="Delete FROM lecturereport WHERE ID='".$q."';";
	$result = $con->query($sql);
	$message = "The Report ID"."$q"." has been Deleted.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo"<script type='text/javascript'> setTimeout(function(){ location.assign('lectureview.php'); }, 0000);</script>";
?>