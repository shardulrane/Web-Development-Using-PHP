<?php
$q=$_GET["q"];

$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);


if($q=="All")
{
 
	  $query=mysql_query("select * from ispinfo_tab order by Down_Tim asc");
}

else{ $query=mysql_query("SELECT * FROM ispinfo_tab WHERE ISP_Name = '".$q."' order by Down_Tim asc");}


echo "<b>ISP log for $q</b>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='ispexcelnam.php?q=$q'>
Click Here to Export to Excel</a>";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=button name=print value='Print Page' onClick='window.print()'>"; 
echo "<br><table class='table table-striped table-bordered table-hover'>
<tr bgcolor='#B0B0B0'>
<th>Sr.No</th>
<th>Log Id</th>
<th>Date</th>
<th>ISP Name</th>
<th>Status</th>
<th>Down Time</th>
<th>Start Time</th>
<th>Total Down Time</th>
<th>Action</th>
</tr>";

$n=0;
$n1=1;
while($row=mysql_fetch_array($query)){
if (($n%2) == 0){
$w="#E0E0E0";
}else{
$w="#F0F0F0";
}
  echo "<tr bgcolor=\"$w\">";
  echo "<td>" . $n1 . "</td>";
  echo "<td>".$row['Id'] . "</td>";
  echo "<td>" . date('d-m-y',strtotime($row['Date'])) . "</td>";
  echo "<td>" . $row['ISP_Name'] . "</td>";
   echo "<td>" . $row['Status'] . "</td>";
  echo "<td>" . date('d-m-y H:i:s',strtotime($row['Down_Tim'])) . "</td>";
   $p= date('d-m-y',strtotime($row['Start_Tim'])) ;
  if($p!='01-01-70'){
echo "<td>" . date('d-m-y H:i:s',strtotime($row['Start_Tim'])) . "</td>";
 
 }
 else{
  echo "<td>" . '00-00-00 00:00:00' . "</td>";
  }

   echo "<td>" . $row['Tot_Downtim'] . "</td>";  
echo "<td>
<a href=\"displayisp.php?id=$row[Id]\" onclick=\"return confirm('Are you sure want to Update $row[ISP_Name] with Id $row[Id]??');\">
<button class='btn btn-default'><i class='fa fa-edit'></i> Modify</button>
</a> 
</td>";
  echo "</tr>";
$n++;
$n1++;
  }
echo "</table>";

mysql_close($con);
$n1=$n1-1;
echo "<b>Total no of records are $n1</b>";
?> 