<?php
session_start();
$dep = $_SESSION['dep'];
$q=$_GET['q'];
$Class=$_SESSION["Class8"];
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
	
	$sql="SELECT * FROM class_reg WHERE Class='".$Class."' AND Semester='".$q."';";
echo "<table class='table table-striped table-bordered table-hover'>
<tr bgcolor='#B0B0B0'>
<th>ID</th>
<th>Class</th>
<th>Department ID</th>
<th>Semester</th>
<th>Subject</th>
<th>Division</th>
<th>Faculty</th>
<th>Theory</th>
<th>Practial</th>
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
  echo "<td>" . $row['Class_ID'] . "</td>";
  echo "<td>" . $row['Class'] . "</td>"; 
  echo "<td>" . $row['Dept_ID'] . "</td>"; 
  echo "<td>" . $row['Semester'] . "</td>";
  echo "<td>" . $row['Subject'] . "</td>";
  echo "<td>" . $row['Division'] . "</td>";
  echo "<td>" . $row['Faculty'] . "</td>";
  echo "<td>" . $row['Theory'] . "</td>";
  echo "<td>" . $row['Practical'] . "</td>";  
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