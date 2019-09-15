<?php
session_start();
$name = $_SESSION['Name'];
$q=$_GET['q'];
//$name="Ms Ummehani Saiyed";
//$q="II";
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
	
	$sql="SELECT * FROM lecturereport,class_reg WHERE class_reg.Teachers_Name ='".$name."' AND class_reg.Semester='".$q."';";
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
  echo "<td>" . $row['Teachers_Name'] . "</td>"; 
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
 <a href=\"lecturemodify.php?id=$row[ID]\" onclick=\"return confirm('Are you sure want to Update $row[Teachers_Name] with Id $row[ID]??');\">
<button class='btn btn-default'><i class='fa fa-edit'></i> Modify</button>
</a>
<a href=\"lecturedelete.php?id=$row[ID]\" onclick=\"return confirm('Are you sure want to Delete $row[Teachers_Name] with Id $row[ID]??');\">
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
$con->close(); 
	?>

      </td>

    </tr>
	</table>