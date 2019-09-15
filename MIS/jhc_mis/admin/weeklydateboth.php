<?php
session_start();
$a=$_SESSION["pid"];
$d=$_GET["q"];
$d2=$_GET["q1"];
$d=date('Y-m-d',strtotime($d));
$d2=date('Y-m-d',strtotime($d2));
$d3=implode("-", array_reverse(explode("-", $d)));
$d4=implode("-", array_reverse(explode("-", $d2)));
if($d>$d2){
	
	echo "<b>Invalid Date Selection!!!. Please Select proper Date Range</b><br><br>";
}

else{ echo "<b>Records From:  $d3  To:  $d4 </b>";
$q=$_GET["q"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MIS";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
$sql="select * from weeklyplan WHERE Date BETWEEN '".$d."' AND '".$d2."' AND Teacher_Name='".$a."' order by date asc;";
echo "<table width='100%' class='table table-striped table-bordered table-hover'>
<tr bgcolor='#B0B0B0'>
<th>ID</th>
<th>Class</th>
<th>Teacher</th>
<th>Semester</th>
<th>Subject</th>
<th>Start Date</th>
<th>End Date</th>
<th>Theory Plan</th>
<th>Practial Plan</th>
<th>Action</th>
</tr>";
$result = $con->query($sql);
$n=0;
$n1=1;
if ($result->num_rows > 0) {
    // output data of each row
while($row = $result->fetch_assoc())   
  {
if (($n%2) == 0){
$w="#E0E0E0";
}else{
$w="#F0F0F0";
}
echo "<tr bgcolor=\"$w\">";
   echo "<td>" . $row['ID'] . "</td>";
   echo "<td>" . $row['Class'] . "</td>";
   echo "<td>" . $row['Teacher'] . "</td>"; 
  echo "<td>" . $row['Semester'] . "</td>";
  echo "<td>" . $row['Subject'] . "</td>";
  echo "<td>" . $row['Startdate'] . "</td>";
  echo "<td>" . $row['Enddate'] . "</td>";
  echo "<td>" . $row['Theory_Topics_to_Cover'] . "</td>";  
  echo "<td>" . $row['Practical_Topics_to_Cover'] . "</td>";
  echo "<td>".
"<a href='lecturemodify.php?id=".$row['ID']."onclick='return confirm('Are you sure want to Update". $row['Teacher']."with Id".$row['ID']."??')'>
Modify
</a>
</td>";
  echo "</tr>";
$n++;
$n1++;
  }
}
echo "</table>";
$n1=$n1-1;
echo "<b>Total no of records are $n1</b>";
$con->close();}
?>