<?php
$start_date=$_REQUEST["callog"];
$since_start=$_REQUEST["timestamp"];
$d=date('Y-m-d H:i:s',strtotime($since_start));

$diff = abs(strtotime($since_start) - strtotime($start_date));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60));
$minuts = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);
$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60));
$c=$days."days "." ".$hours."hrs ".$minuts."mins";

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);
//$id = $_REQUEST['id'];
mysql_query("UPDATE ispinfo_tab SET Start_Tim='$d',Tot_Downtim='$c'
WHERE Id= '$_POST[id]'");

echo "<script>alert('1 record Updated')
window.location.href='view_isp_log.php';</script>";
echo "<script>
</script>";

mysql_close($con);
?> 