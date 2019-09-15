<?php
session_start();
$a=$_SESSION["pid"];
$q=$_GET['q'];
$dep=$_SESSION["dep"];
$Class=$_SESSION["Class5"];
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
	
	$sql="SELECT * FROM weeklyplan WHERE Class='".$Class."' AND Semester='".$q."' AND Dept_ID='".$dep."';";
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