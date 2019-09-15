<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);
//$id = $_REQUEST["Id"];
//echo $id;


mysql_query("UPDATE jhc_printer SET Username='$_POST[username]',Location='$_POST[loc]',Department='$_POST[dept]',Identification_No='$_POST[idn]',Item='$_POST[item]',Brand='$_POST[brand]',Serial_No='$_POST[ser]',Model_Type='$_POST[mod]'
WHERE IdNo='$_POST[Id]'");

echo "<script>alert('1 record Updated')
  window.location.href='viewasset_log.php';
</script>";

mysql_close($con);
?> 