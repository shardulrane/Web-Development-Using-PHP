<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="mis"; // Database name 
$tbl_name="login"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE Username='$myusername' and Password='$mypassword'";

$result=mysql_query($sql);
//while($row = mysql_fetch_array($result)){
//$pid1=$row['login_type'];
//echo $pid1;}

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
session_start();                
$_SESSION['log'] = 'in';

while($row = mysql_fetch_array($result)){
$pid1=$row['Login_Type'];
$pid=$row['Name'];
$dep=$row['Dept_ID'];
$emp = $row['Emp_ID'];
}


$_SESSION["pid"] = $pid;
$_SESSION["pid1"] = $pid1;
$_SESSION["dep"] = $dep;
$_SESSION["emp"] = $emp;
if($pid1=="Engineer"){

header("location:jhc_mis/caladd.php");}

if($pid1=="admin"){

header("location:jhc_mis/admin/adminlogin.php");
}

if($pid1=="Faculty"){

header("location:jhc_mis/faculty/facultylogin.php");}

if($pid1=="HOD"){

header("location:jhc_mis/hod/facultylogin.php");}
}

else {
//echo "Wrong Username or Password";
echo "<script>alert('Wrong Username or Password')
window.location.href='index.php';</script>";

}

?>