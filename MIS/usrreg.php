<?php
session_start();
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);

$sql="INSERT INTO login (Emp_ID,name,Username,Password,Dept_ID,login_type)
VALUES
('$_POST[empid]','$_POST[name]','$_POST[usernm]','$_POST[pwd]','$_POST[dept]','$_POST[type]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "<script>alert('1 record Added')
window.location.href='index.php';</script>";
session_destroy();
mysql_close($con);


?>