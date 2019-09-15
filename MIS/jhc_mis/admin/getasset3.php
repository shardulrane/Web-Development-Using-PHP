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
 
	  $sql=mysql_query("select * from jhc_switch");
}

else{ $sql=mysql_query("SELECT * FROM jhc_switch WHERE Location LIKE '$q%' ");}

//<th>Date</th>
echo "<b>Call log for $q : </b>";
echo "<br><<table class='table table-striped table-bordered table-hover'>
<tr bgcolor='#B0B0B0'>
<th>Sr. No</th>
<th>ID</th>
<th>Department</th>
<th>Location</th>
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
  echo "<td>" . $row['Identification_No'] . "</td>"; 
  echo "<td>" . $row['Item'] . "</td>";
  echo "<td>" . $row['Brand'] . "</td>";
  echo "<td>" .$row['ModelType'] . "</td>";  
  echo "<td>" . $row['SerialNo'] . "</td>";
echo "<td>
<a href=\"displaysw.php?id=$row[IdNo]\" onclick=\"return confirm('Are you sure want to Update Id $row[IdNo]??');\">
<button class='btn btn-default'><i class='fa fa-edit'></i> Modify</button>
</a> 
<a href=\"delsw.php?id=$row[IdNo]\" onclick=\"return confirm('Are you sure want to Delete Id $row[IdNo]??');\">
<button class='btn btn-danger'><i class='fa fa-edit'></i> Delete</button>
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