<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);
$sql="INSERT INTO jhc_switch(Identification_No,Location,Department,Item,Brand,ModelType,SerialNo)
VALUES('$_POST[idn]','$_POST[loc]','$_POST[dept]','$_POST[item]','$_POST[brand]','$_POST[mod]','$_POST[ser]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "<script>alert('1 record Added')
window.location.href='switchadd.php';</script>";

mysql_close($con);


?>