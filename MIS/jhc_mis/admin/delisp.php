<?php
mysql_connect("localhost","root","") or die("Cannot connect to server db!");
mysql_select_db("mis");

mysql_query("Delete from ispinfo_tab where id='$_GET[id]';");

echo "<script>alert('1 record Deleted')
window.location.href='view_isp_log.php';</script>";


?>