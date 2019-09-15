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
 
	  $sql=mysql_query("select * from jhc_amc order by Date asc");
}

else{ $sql=mysql_query("SELECT * FROM jhc_amc WHERE Status = '".$q."'");}


echo "<b>AMC Call log for Status $q : </b>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='amcexcel_stat.php?q=$q'>
Click Here to Export to Excel</a>";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=button name=print value='Print Page' onClick='window.print()'>"; 
echo "<br><table class='table table-striped table-bordered table-hover'>
<tr bgcolor='#B0B0B0'>
<th>Sr. No</th>
<th>Call Id</th>
<th>Department</th>
<th>User Name</th>
<th>Item Details</th>
<th>Problem Reported</th>
<th>Serial No</th>
<th>Recievers Name</th>
<th>Dispatch Date Time</th>
<th>Status</th>
<th>Senders Name</th>
<th>Receiving Date Time</th>
<th>Others</th>
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
echo "<tr bgcolor=\"$w\">";
  echo "<td>" . $n1 . "</td>";
 echo "<td>" . $row['Id'] . "</td>";
  echo "<td>" . $row['Department'] . "</td>";
  echo "<td>" . $row['Username'] . "</td>";
echo "<td>" . $row['Item'] . "</td>";
echo "<td>" . $row['Prob_Rep'] . "</td>";
  echo "<td>" . $row['Serial_No'] . "</td>";
  echo "<td>" . $row['Reciever_Name'] . "</td>";  
  echo "<td>" . date('d-m-y H:i:s',strtotime($row['Dispatch_Datetime'])) . "</td>";  
  echo "<td>" . $row['Status'] . "</td>";
echo "<td>" . $row['Senders_Name'] . "</td>";
  $p= date('d-m-y',strtotime($row['Recieving_DateTime'])) ;
  if($p!='01-01-70'){
echo "<td>" . date('d-m-y H:i:s',strtotime($row['Recieving_DateTime'])) . "</td>";

 }
 else{
  echo "<td>" . '00-00-00 00:00:00' . "</td>";
  }
  echo "<td>" . $row['Others'] . "</td>";
  
 
echo "<td>
<a href=\"displayamc.php?id=$row[Id]\" onclick=\"return confirm('Are you sure want to Update $row[Username] with Id $row[Id]??');\">
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