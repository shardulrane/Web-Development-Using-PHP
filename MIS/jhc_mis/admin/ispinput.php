<?php
$d1=$_REQUEST["timestamp1"];
$d1=date('Y-m-d',strtotime($d1));

$start_date=$_REQUEST["timestamp1"];
$d2=date('Y-m-d H:i:s',strtotime($start_date));

if(isset($_POST['stat']) && $_POST['stat'] == "Not_Working"){
$d3="0000-00-00 00:00:00";
$since_start="0000-00-00 00:00:00";
$months1 = 0;
$days1 = 0;

$hours1 = 0;
$minuts1 = 0;
$seconds1 =0;
//$c1=$days1."-".$months1."-".$years1."  ".$hours1.":".$minuts1.":".$seconds1;
$c=$days1."days "." ".$hours1."hrs ".$minuts1."mins";
}

else{
$since_start=$_REQUEST["timestamp2"];
$d3=date('Y-m-d H:i:s',strtotime($since_start));
$years1 = 0;


$diff = abs(strtotime($since_start) - strtotime($start_date));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60));
$minuts = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);
$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60));
//$c=$days."-".$months."-".$years."  ".$hours.":".$minuts.":".$seconds;
$c=$days."days "." ".$hours."hrs ".$minuts."mins";
}
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);
$sql="INSERT INTO ispinfo_tab (Date,ISp_Name,Status,Down_Tim,Start_Tim,Tot_Downtim)
VALUES
('$d1','$_POST[isp]','$_POST[stat]','$d2','$d3','$c')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "<script>alert('1 record Added')
window.location.href='ispadd.php';</script>";
mysql_close($con);


?>