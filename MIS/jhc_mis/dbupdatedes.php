<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);
//$id = $_REQUEST["Id"];
//echo $id;


mysql_query("UPDATE jhc_desktop SET Username='$_POST[username]',Location='$_POST[loc]',Department='$_POST[dept]',Asset_VerfnNo='$_POST[asset]',Item='$_POST[item]',Brand='$_POST[brand]',Serial_No='$_POST[ser]',CPU='$_POST[cpu]',MHz='$_POST[mhz]',RAM='$_POST[ram]',HDD_SrNo='$_POST[hdd]',Optical='$_POST[op]',Monitor='$_POST[mon]',SerialNo='$_POST[ser1]',Keyboard_SrNo='$_POST[key]',Mouse_SrNo='$_POST[mou]'
WHERE Id='$_POST[Id]'");

echo "<script>alert('1 record Updated')
  window.location.href='viewasset_log.php';
</script>";

mysql_close($con);
?> 