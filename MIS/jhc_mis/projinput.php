<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);
$sql="INSERT INTO jhc_projector (Department,Location,Company,Model_No,Serial_No)
VALUES('$_POST[dept]','$_POST[loc]','$_POST[comp]','$_POST[mod]','$_POST[ser]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "<script>alert('1 record Added')
window.location.href='projadd.php';</script>";

mysql_close($con);


?>