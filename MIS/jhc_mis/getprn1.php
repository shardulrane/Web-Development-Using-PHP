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
 
	  $sql=mysql_query("select * from jhc_printer order by Location");
}

else{ $sql=mysql_query("SELECT * FROM jhc_printer WHERE Location LIKE '$q%' order by Location ");}

echo "<b>Printer log details for Location: $q floor</b>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='prnexcel_loc.php?q=$q'>
Click Here to Export to Excel</a>";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=button name=print value='Print Page' onClick='window.print()'>"; 

echo "<br><table border='1' width='100%'>
<tr bgcolor='#B0B0B0'>
<th>Sr. No</th>
<th>ID</th>
<th>Department</th>
<th>Location</th>
<th>User Name</th>
<th>Identification No</th>
<th>Item</th>
<th>Brand</th>
<th>Model Type</th>
<th>Serial No</th>
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
  echo "<td>" . $row['IdNo'] . "</td>";
  echo "<td>" . $row['Department'] . "</td>";
  echo "<td>" . $row['Location'] . "</td>";
  echo "<td>" . $row['Username'] . "</td>";   
  echo "<td>" . $row['Identification_No'] . "</td>"; 
  echo "<td>" . $row['Item'] . "</td>";
  echo "<td>" . $row['Brand'] . "</td>";
  echo "<td>" .$row['Model_Type'] . "</td>";  
  echo "<td>" . $row['Serial_No'] . "</td>";
echo "<td>
<a href=\"displayprn.php?id=$row[IdNo]\" onclick=\"return confirm('Are you sure want to Update $row[Username] with Id $row[IdNo]??');\">
Modify
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