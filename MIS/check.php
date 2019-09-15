<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="mis"; // Database name 
$tbl_name="employee"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$username=$_POST['username']; 

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$username = mysql_real_escape_string($username);
$sql="SELECT * FROM $tbl_name WHERE Emp_no='$username'";

$result=mysql_query($sql);
//while($row = mysql_fetch_array($result)){
//$pid1=$row['login_type'];
//echo $pid1;}

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
session_start();                
$_SESSION['empid'] = $username;

while($row = mysql_fetch_array($result)){
$Dept=$row['Dept_ID'];
$Name=$row['Name'];
$EmailID=$row['EmailID'];
$PhNo=$row['PhNo'];
}
$_SESSION["Dept"] = $Dept;
$_SESSION["Name"] = $Name;
$_SESSION["EmailID"] = $EmailID;
$_SESSION["PhNo"] = $PhNo;

header("location:newuser.php");}


else {
//echo "Wrong Username or Password";
echo "<script>alert('Wrong Employee ID Please Try Again.')
window.location.href='checkuser.php';</script>";

}

?>