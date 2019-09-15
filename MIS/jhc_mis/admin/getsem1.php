<?php
session_start();
$q=$_GET["q"];
//$_SESSION["yearcheck"] = $q;
echo"<option value='0'>Select Semester</option>";
 if ($q=="First")
  {
	
	echo"<option value='I'>I</option>";
	echo"<option value='II'>II</option>";
  }
 if ($q=="Second")
  {
	echo"<option value='III'>III</option>";
	echo"<option value='IV'>IV</option>";
  }   
   if ($q=="Third")
  {
	echo"<option value='V'>V</option>";
	echo"<option value='VI'>VI</option>";
  }
?> 