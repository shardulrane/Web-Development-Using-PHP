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
$sql="select * from lecturereport WHERE Date BETWEEN '".$d."' AND '".$d2."' order by date asc;";

$result = $conn->query($sql);
echo "<table class='table table-striped table-bordered table-hover'>
<tr bgcolor='#B0B0B0'>
<th>ID</th>
<th>Name</th>
<th>Class</th>
<th>No Of Lectures</th>
<th>Semester</th>
<th>Subject</th>
<th>Date</th>
<th>Lecture Type</th>
<th>Lecture Start Time</th>
<th>Lecture End Time</th>
<th>Topics Covered</th>
<th>Teaching Methodology</th>
<th>Action</th>
</tr>";
$result = $conn->query($sql);
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
  echo "<td>" . $row['Teacher_Name'] . "</td>"; 
  echo "<td>" . $row['Class'] . "</td>";
  echo "<td>" . $row['No_of_Lectures'] . "</td>";
  echo "<td>" . $row['Semester'] . "</td>";
  echo "<td>" . $row['Subject'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['Lecture_Type'] . "</td>";
  echo "<td>" . $row['Lec_Start_Time'] . "</td>";  
  echo "<td>" . $row['Lec_End_Time'] . "</td>";
  echo "<td>" . $row['Topics_Covered'] . "</td>";
  echo "<td>" . $row['Teaching_Methodology'] . "</td>";
  echo "<td>
 <a href=\"lecturemodify.php?id=$row[ID]\" onclick=\"return confirm('Are you sure want to Update $row[Teacher_Name] with Id $row[ID]??');\">
<button class='btn btn-default'><i class='fa fa-edit'></i> Modify</button>
</a>
<a href=\"lecturedelete.php?id=$row[ID]\" onclick=\"return confirm('Are you sure want to Delete $row[Teacher_Name] with Id $row[ID]??');\">
<button class='btn btn-danger'><i class='fa fa-edit'></i> Danger</button>
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
$conn->close(); }
?>