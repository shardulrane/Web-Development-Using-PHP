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
 
	  $sql=mysql_query("select * from jhc_desktop");
}

else{ $sql=mysql_query("SELECT * FROM jhc_desktop WHERE Username LIKE '$q%' ");}

//<th>Date</th>
echo "<b>Desktop/Laptop log for User Name: $q </b>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='deskexcel_nam.php?q=$q'>
Click Here to Export to Excel</a>";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=button name=print value='Print Page' onClick='window.print()'>"; 
echo "<br><table class='table table-striped table-bordered table-hover'>
<tr bgcolor='#B0B0B0'>
<th>Sr. No</th>
<th>ID</th>
<th>User Name</th>
<th>Location</th>
<th>Department</th>
<th>Asset Verfication No</th>
<th>Item</th>
<th>Brand</th>
<th>SerialNo</th>
<th>CPU</th>
<th>MHZ</th>
<th>RAM</th>
<th>HDD_SrNo</th>
<th>Optical</th>
<th>Monitor</th>
<th>SerialNo</th>
<th>Keyboard_SrNo</th>
<th>Mouse_SrNo</th>
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
  echo "<td>" . $row['Username'] . "</td>";
  echo "<td>" . $row['Location'] . "</td>";
  echo "<td>" . $row['Department'] . "</td>";  
  echo "<td>" . $row['Asset_VerfnNo'] . "</td>";  
  echo "<td>" . $row['Item'] . "</td>";
  echo "<td>" . $row['Brand'] . "</td>";
  echo "<td>" .$row['Serial_No'] . "</td>";
  echo "<td>" . $row['CPU'] . "</td>";
  echo "<td>" . $row['MHz'] . "</td>";
  echo "<td>" . $row['RAM'] . "</td>";  
  echo "<td>" .$row['HDD_SrNo'] . "</td>";
  echo "<td>" . $row['Optical'] . "</td>";
  echo "<td>" . $row['Monitor'] . "</td>";
  echo "<td>" . $row['SerialNo'] . "</td>";
  echo "<td>" . $row['Keyboard_SrNo'] . "</td>";
  echo "<td>" . $row['Mouse_SrNo'] . "</td>";
echo "<td>
<a href=\"displaydesk.php?id=$row[Id]\" onclick=\"return confirm('Are you sure want to Update $row[Username] with Id $row[Id]??');\">
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