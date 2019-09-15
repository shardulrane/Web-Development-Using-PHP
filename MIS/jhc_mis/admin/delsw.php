<?php
mysql_connect("localhost","root","") or die("Cannot connect to server db!");
mysql_select_db("mis");

mysql_query("Delete from jhc_switch where IdNo='$_GET[id]';");

echo "<script>alert('1 record Deleted')
window.location.href='viewasset_log.php';</script>";


?>