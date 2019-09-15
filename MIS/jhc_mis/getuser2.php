<?php
$q=$_GET["q"];
$q1=date('Y-m-d',strtotime($q));
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);

$sql="SELECT * FROM info_tab WHERE Date = '".$q1."' order by Call_log_DateTim asc";

$sql= mysql_query($sql);
//<th>Date & Time</th>
echo "<b>Call log for Date: $q </b>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='exceldat.php?q=$q1'>
Click Here to Export to Excel</a>";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=button name=print value='Print Page' onClick='window.print()'>"; 

echo "<br><table width='100%' class='table table-striped table-bordered table-hover'>
<tr bgcolor='#B0B0B0'>
<th>Sr. No</th>
<th>Call Id</th>
<th>Category</th>
<th>Department</th>
<th>UserName</th>
<th>Problem Reported</th>
<th>Action Taken</th>
<th>Call Log Date</th>
<th>Response Log</th>
<th>Estimated Response Time</th>
<th>Resolution Date</th>
<th>Estimated Resolution Time</th><th>Enginner</th>
<th>Status</th>
<th>Action</th>
</tr>";

$n=0;
$n1=1;
while($row = mysql_fetch_array($sql))
  {
if (($n%2) == 0){
$w="#E0E0E0";
}else{
$w="#F0F0F0";
}
echo "<tr bgcolor=\"$w\">"; // echo "<td>" . $row['Id'] . "</td>";
echo "<td>" . $n1 . "</td>";
  echo "<td>" . $row['Id'] . "</td>";
  echo "<td>" . $row['Catgory'] . "</td>";
  echo "<td>" . $row['Department'] . "</td>";
  echo "<td>" . $row['Username'] . "</td>";
  echo "<td>" . $row['Prob_Rep'] . "</td>";
  echo "<td>" . $row['Act_Tak'] . "</td>";  
  echo "<td>" . date('d-m-y H:i:s',strtotime($row['Call_log_DateTim'])) . "</td>";  
  echo "<td>" . date('d-m-y H:i:s',strtotime($row['Resp_log_DateTim'])) . "</td>";
  echo "<td>" . $row['Cal_Resp_DateTim']."</td>";
  $p= date('d-m-y',strtotime($row['Res_DateTim'])) ;
  if($p!='01-01-70'){
echo "<td>" . date('d-m-y H:i:s',strtotime($row['Res_DateTim'])) . "</td>";
 
 }
 else{
  echo "<td>" . '00-00-00 00:00:00' . "</td>";
  }

  //echo "<td>" . $p. "</td>";
  echo "<td>" . $row['Cal_Res_DateTim'] . "</td>";
   echo "<td>" . $row['Enginner'] . "</td>";
  echo "<td>" . $row['Status'] . "</td>";  
echo "<td>
<a href=\"displayform.php?id=$row[Id]\" onclick=\"return confirm('Are you sure want to Update $row[Username] with Id $row[Id]??');\">
<button class='btn btn-default'><i class='fa fa-edit'></i> Modify</button>
</a> 

</td>";

  echo "</tr>";
$n++;
$n1++;
  }
echo "</table>";
$n1=$n1-1;
echo "<b>Total no of records are $n1</b>";
mysql_close($con);

?> 