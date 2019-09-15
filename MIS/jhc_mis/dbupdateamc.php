<?php
$start_date=$_REQUEST["t1"];
$d1=date('Y-m-d H:i:s',strtotime($start_date));

$since_start=$_REQUEST["t2"];
$d2=date('Y-m-d H:i:s',strtotime($since_start));

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);
//$id = $_REQUEST["Id"];
//echo $id;


mysql_query("UPDATE jhc_amc SET Department='$_POST[dept]',Username='$_POST[usr]',Item='$_POST[item]',Prob_Rep='$_POST[probrep]',Serial_No='$_POST[ser]',Reciever_Name='$_POST[ser]',Dispatch_Datetime='$d1',Status='$_POST[stat]',Senders_Name='$_POST[send]',Recieving_DateTime='$d2',Others='$_POST[othr]'
WHERE Id='$_POST[Id]'");

echo "<script>alert('1 record Updated')
  window.location.href='viewamc.php';
</script>";

mysql_close($con);
?> 