<?php
$start_date=$_REQUEST["timestamp"];
$d1=date('Y-m-d H:i:s',strtotime($start_date));

$since_start=$_REQUEST["timestamp1"];
$d2=date('Y-m-d H:i:s',strtotime($since_start));

$diff = abs(strtotime($since_start) - strtotime($start_date));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60));
$minuts = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);
$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60));
$c=$days."days "." ".$hours."hrs ".$minuts."mins";


$start_date1=$_REQUEST["timestamp0"];
$d3=date('Y-m-d H:i:s',strtotime($start_date1));

$since_start1=$_REQUEST["timestamp"];

$diff1 = abs(strtotime($since_start1) - strtotime($start_date1));
$years1 = floor($diff1 / (365*60*60*24));
$months1 = floor(($diff1 - $years1 * 365*60*60*24) / (30*60*60*24));
$days1 = floor(($diff1 - $years1 * 365*60*60*24 - $months1*30*60*60*24)/ (60*60*24));

$hours1 = floor(($diff1 - $years1 * 365*60*60*24 - $months1*30*60*60*24 - $days1*60*60*24)/ (60*60));
$minuts1 = floor(($diff1 - $years1 * 365*60*60*24 - $months1*30*60*60*24 - $days1*60*60*24 - $hours1*60*60)/ 60);
$seconds1 = floor(($diff1 - $years1 * 365*60*60*24 - $months1*30*60*60*24 - $days1*60*60*24 - $hours1*60*60 - $minuts1*60));
$c1=$days1."days "." ".$hours1."hrs ".$minuts1."mins";


$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);
//$id = $_REQUEST["Id"];
//echo $id;


mysql_query("UPDATE info_tab SET Username='$_POST[username]',Prob_Rep='$_POST[probrep]',Catgory='$_POST[cat]',
Call_log_DateTim='$d3',Resp_log_DateTim='$d1',Cal_Resp_DateTim='$c1',Act_Tak='$_POST[acttak]',
Res_DateTim='$d2',Cal_Res_DateTim='$c',Status='$_POST[stat]',Enginner='$_POST[eng]'
WHERE Id= '$_POST[Id]'");

echo "<script>alert('1 record Updated')
  window.location.href='viewcal_log.php';
</script>";

mysql_close($con);
?> 