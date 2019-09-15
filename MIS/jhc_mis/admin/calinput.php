<?php
//$d1=$_REQUEST["timestamp0"];
$d1=$_REQUEST["timestamp"];
$d1=date('Y-m-d',strtotime($d1));
$u=$_REQUEST["users"];
//echo $u;

$start_date=$_REQUEST["timestamp"];
$d2=date('Y-m-d H:i:s',strtotime($start_date));

$since_start=$_REQUEST["timestamp1"];
$d3=date('Y-m-d H:i:s',strtotime($since_start));




if(isset($_POST['stat']) && $_POST['stat'] == "Pending"){
$d4="0000-00-00 00:00:00";
//$diff1 = abs(strtotime($since_rstart) - strtotime($since_start));

$years1 = 0;
$months1 = 0;
$days1 = 0;

$hours1 = 0;
$minuts1 = 0;
$seconds1 =0;

//$c1=$days1."-".$months1."-".$years1."  ".$hours1.":".$minuts1.":".$seconds1;
$c1=$days1."days "." ".$hours1."hrs ".$minuts1."mins";
}

else{
$since_rstart=$_REQUEST["timestamp2"];

$diff1 = abs(strtotime($since_rstart) - strtotime($since_start));

$years1 = floor($diff1 / (365*60*60*24));
$months1 = floor(($diff1 - $years1 * 365*60*60*24) / (30*60*60*24));
$days1 = floor(($diff1 - $years1 * 365*60*60*24 - $months1*30*60*60*24)/ (60*60*24));

$hours1 = floor(($diff1 - $years1 * 365*60*60*24 - $months1*30*60*60*24 - $days1*60*60*24)/ (60*60));
$minuts1 = floor(($diff1 - $years1 * 365*60*60*24 - $months1*30*60*60*24 - $days1*60*60*24 - $hours1*60*60)/ 60);
$seconds1 = floor(($diff1 - $years1 * 365*60*60*24 - $months1*30*60*60*24 - $days1*60*60*24 - $hours1*60*60 - $minuts1*60));

//$c1=$days1."-".$months1."-".$years1."  ".$hours1.":".$minuts1.":".$seconds1;
$c1=$days1."days "." ".$hours1."hrs ".$minuts1."mins";
$d4=date('Y-m-d H:i:s',strtotime($since_rstart));
}



$diff = abs(strtotime($since_start) - strtotime($start_date));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60));
$minuts = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);
$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60));
//$c=$days."-".$months."-".$years."  ".$hours.":".$minuts.":".$seconds;
$c=$days."days "." ".$hours."hrs ".$minuts."mins";

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
	
	$dpt=$_REQUEST["dept"];
	$dpt1=$_REQUEST["dept1"];
	$dpt2=$_REQUEST["dept2"];
	
	if($dpt!=="0")
	{ 
		//echo "hello";
	$a=$dpt;
		//echo $a;
	}
	
	if($dpt1!=="0")
	{ 
		
	$a=$dpt1;
		//echo $a;
	}
	
	if($dpt2!=="0")
	{ 
		
	$a=$dpt2;
		//echo $a;
	}
	


echo "<script>alert('1 record Added')
window.location.href='caladd.php';</script>";
mysql_select_db("mis", $con);

$sql="INSERT INTO info_tab (Date,Department,Username,Prob_Rep,Act_Tak,Catgory,Call_log_DateTim,Resp_log_DateTim,Cal_Resp_DateTim,Res_DateTim,Cal_Res_DateTim,Enginner,Status)
VALUES
('$d1','$a','$_POST[users]','$_POST[probrp]','$_POST[acttk]','$_POST[cat]','$d2','$d3','$c','$d4','$c1','$_POST[eng]','$_POST[stat]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con);


?>