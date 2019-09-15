<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("mis", $con);

$d=$_REQUEST["dt"];
$d=date('Y-m-d H:i:s ',strtotime($d));
$d2=date('Y-m-d',strtotime($d));

if(isset($_POST['stat']) && $_POST['stat'] == "Pending"){
$d1="0000-00-00 00:00:00";

}


else{
$d1=$_REQUEST["rdt"];
$d1=date('Y-m-d H:i:s',strtotime($d1));
}

$sql="INSERT INTO jhc_amc(Date,Department,Username,Item,Prob_Rep,Serial_No,Reciever_Name,Dispatch_Datetime,Status,Senders_Name,Recieving_DateTime)
VALUES('$d2','$_POST[dept]','$_POST[user]','$_POST[item]','$_POST[probrp]','$_POST[ser]','$_POST[rec]','$d','$_POST[stat]','$_POST[recd]','$d1')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "<script>alert('1 record Added')
window.location.href='amcadd.php';</script>";

mysql_close($con);


?>