<?php
$id = $_GET['id'];
echo $id;
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);
$d =$_POST['inputfield'];
$Date=date('Y-m-d',strtotime($d));

$class =$_POST['class'];//"F.Y.I.T";
$sem =$_POST['sem'];
$Subject =$_POST['sub'];
$No_of_Lectures =$_POST['nooflec']; //"2"; 
$Lec_Start_Time = $_POST['slecture_h']. $_POST['slecture_m'] ."00";//"12:12:10";
$Lec_Finish_Time =$_POST['electure_h']. $_POST['electure_m'] ."00";//"10:10:10";
$Topics_Covered = $_POST['topics'];//"C++ Full Complete";//
$Teaching_Methodology =$_POST['method'];//"projector";// 
$sql = "UPDATE lecturereport SET Date='$Date',No_of_Lectures='$No_of_Lectures',Lec_Start_Time='$Lec_Start_Time',Lec_End_Time='$Lec_Finish_Time',Topics_Covered='$Topics_Covered',Teaching_Methodology='$Teaching_Methodology'
WHERE Id= '$id';";
if(mysql_query($sql)=== TRUE)
{
	
echo "<script>alert('1 record Updated')
  window.location.href='lectureview.php';
</script>";
}
else 
{echo 'MySQL barked: '.mysql_errno($con).': '.mysql_error($con)."\n";}
mysql_close($con);
?>