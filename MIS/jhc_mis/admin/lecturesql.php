<?php
session_start();
$Class=$_SESSION["Class"];
$q=$_GET['q'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MIS";

// Create connection
	$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($con->connect_error) 
	{
		die("Connection failed: " . $con->connect_error);
	}
	
	$sql="SELECT * FROM lecturereport WHERE Class='".$Class."' AND Semester='".$q."';";
echo "<table border='1' width='100%'>
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
Modify
</a>
<a href=\"lecturedelete.php?id=$row[ID]\" onclick=\"return confirm('Are you sure want to Delete $row[Teacher_Name] with Id $row[ID]??');\">
Delete
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
$con->close(); 
	?>

      </td>

    </tr>
	</table>