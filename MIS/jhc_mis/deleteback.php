<?php
error_reporting(0);
$name = $_POST['fileToDelete'];
$file ="../uploads/$name";
if (!unlink($file))
  {
  header("Location:delete.php");
  }
else
  {
 header("Location:adminenotices.php");
  }
//unlink ( $name , dir_opendir('uploads/') );
?>