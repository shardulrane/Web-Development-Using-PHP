<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);
$sql="INSERT INTO jhc_desktop (Username,Location,Department,Asset_VerfnNo,Item,Brand,Serial_No,CPU,MHz,RAM,HDD_SrNo,Optical,Monitor,SerialNo,Keyboard_SrNo,Mouse_SrNo)
VALUES('$_POST[user]','$_POST[loc]','$_POST[dept]','$_POST[asset]','$_POST[item]','$_POST[brand]','$_POST[ser]','$_POST[cpu]','$_POST[mhz]','$_POST[ram]','$_POST[hdd]','$_POST[op]','$_POST[mon]','$_POST[ser]','$_POST[key]','$_POST[mse]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "<script>alert('1 record Added')
window.location.href='deskadd.php';</script>";

mysql_close($con);


?>