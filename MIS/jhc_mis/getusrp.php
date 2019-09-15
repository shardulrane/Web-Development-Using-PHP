<?php
$q=$_GET["q"];

$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);



$sql="SELECT distinct Username FROM jhc_printer WHERE Department = '".$q."' ";

$result = mysql_query($sql);

//echo "<select name='users' style='width: 200px;' onchange="showU(this.value)">";
//echo "<option value='0'>Select Category</option>";




while ($row = mysql_fetch_array($result)) 
{
echo "<option value=".$row['Username'].">".$row['Username']."</option>";

}
 
echo "</select>";

mysql_close($con);

?> 