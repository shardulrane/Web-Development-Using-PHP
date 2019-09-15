<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Free Html Bootstrap Admin Template" />
    <meta name="author" content="" />
    <meta name="keywords" content="bootstrap, template,admin,free template" />
    <link rel="canonical" href="http://www.htmladmin.com/">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
   <!-- Favicon Icon ( put .ico favicon URL in href below ) -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="#" />
    <title>Management Information System</title>
     <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
		<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	<script language="JAVASCRIPT" src="ts_picker.js">
</script>
<script language="JAVASCRIPT" src="scw.js">
</script>

<script language="JAVASCRIPT">
	function ValidateBlank()
{
	document.report.papersh.disabled=false;
	if(document.report.stream.value=="0")
	{
		alert("Please Select Stream");
		document.report.stream.focus();
		return false;
	}
	else if(document.report.course.value=="0")
	{
		alert("Please Select Course");
		document.report.course.focus();
		return false;
	}
	else if(document.report.year.value=="0")
	{
		alert("Please Select Year");
		document.report.year.focus();
		return false;
	}
	
	
	//else if(document.report.class.value=="0")
	//{
		//alert("Please Select Class");
		//document.report.class.focus();
		//return false;
	//}
	
	else if(document.report.sem.value=="0")
	{
		alert("Please Select Semester");
		document.report.sem.focus();
		return false;
	}
	else if(document.report.sub.value=="0")
	{
		alert("Please Select Subject");
		document.report.sub.focus();
		return false;
	}
	else if(document.report.div.value=="0")
	{
		alert("Please Select Division");
		document.report.div.focus();
		return false;
	}
	else if(document.report.papersh.value=="0")
	{
		alert("Please Select Paper");
		document.report.papersh.focus();
		return false;
	}
		else if(document.report.name.value=="0")
	{
		alert("Please Select Faculty Name");
		document.report.name.focus();
		return false;
	}
	else if(document.report.type.checked== false || document.report.type.checked== false)
	{
		alert("Please Check Atleast One Lecture Type");
		return false;
	}
	else
	{
		return true;
	}
}	

function coursesend(str)

{
	document.report.year.disabled=false;
	 if (str=="")
  {
  document.getElementById("year").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
       document.getElementById('year').innerHTML = xmlhttp.responseText;
    }
}
}
 function streamsend(str)
{
	document.report.course.disabled=false;
	 if (str=="")
  {
  document.getElementById("course").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
       document.getElementById('course').innerHTML = xmlhttp.responseText;
    }
  }
 xmlhttp.open("GET","getcourse.php?q="+str,true);
 xmlhttp.send();
}
function depsend(str){
    if (str == "") {
    //    document.getElementById('txtHint').innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      //          document.getElementById('name').innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open('GET','addsession.php?q='+str,true);
        xmlhttp.send();
    }
} 

function showfaculty(str) {
    if (str == "") {

        document.getElementById('txtHint').innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('name').innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open('GET','showfaculty.php?q='+str,true);
        xmlhttp.send();
    }
} 
function yearsend(str)
{
	document.report.sem.disabled=false;
	 if (str=="")
  {
  document.getElementById("sem").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
       document.getElementById('sem').innerHTML = xmlhttp.responseText;
    }
  }
 xmlhttp.open("GET","getsem1.php?q="+str,true);
 xmlhttp.send();
}
function subjectsend(str)
{
	document.report.papersh.disabled=false;
	 if (str=="")
  {
  document.getElementById("papersh").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
       document.getElementById('papersh').innerHTML = xmlhttp.responseText;
    }
  }
 xmlhttp.open("GET","getpaper1.php?q="+str,true);
 xmlhttp.send();
}
/* function getpaper(str)
{
	 if (str=="")
  {
  document.getElementById("papersh").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
       document.getElementById('papersh').innerHTML = xmlhttp.responseText;
    }
  }
 xmlhttp.open("GET","getpaper1.php?q="+str,true);
 xmlhttp.send();
} */
function semsend(str)
{
	document.report.sub.disabled=false;
	 if (str=="")
  {
  document.getElementById("sub").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
       document.getElementById('sub').innerHTML = xmlhttp.responseText;
    }
  }
 xmlhttp.open("GET","getsub1.php?q="+str,true);
 xmlhttp.send();
}

function disable(){
  document.report.papersh.disabled=false;
}

function visibility() {
  document.report.name.disabled=true;
  document.report.course.disabled=true;
  document.report.year.disabled=true;
  document.report.sem.disabled=true;
  document.report.sub.disabled=true;
  document.report.papersh.disabled=true;
}
</script></head>
<body class="set-body">

    <div id="side-menu-push">
        <div class="link-main-site">
            <hr />
            <a href="http://www.HtmlAdmin.com/" target="_blank" class="btn btn-default btn-lg">Go To Website</a>
            <hr />
        </div>

    </div>
    <!-- /. SIDE PUSH MENU  -->
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.jaihindcollege.com/" target="_blank">
				<B><font size=+1>JAIHIND COLLEGE</font></B></a>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="images/jhclogo.gif" height="75" width="75">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<font style="High Tower Text" size=+4>Managment Information System</font>
            <div class="notifications-wrapper">
                <ul class="nav">


  <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user"></i><i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            				<li><a href="updatepwd.php"><i class="fa fa-user"></i>Update Password</a>
											</li>
                            <li><a href="../../index.php"><i class="fa fa-sign-out"></i>Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-div">&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src='admin.png' height='15' width='15'> &nbsp;&nbsp;&nbsp;&nbsp;<?php
if(!(isset($_SESSION['log']) && ($_SESSION['log'] != ''))){
        //if the user is not allowed, display a message and a link to go back to login page
	echo "<br><br><div align='center'>You are not allowed.";
echo " <a href=\"../index.php\">back to login page</a> </div>";

        //then abort the script
	exit();
}
else{
$a=$_SESSION["pid"];

echo "Welcome $a ";



if(isset($_GET['log']) && ($_GET['log']=='out')){
        //if the user logged out, delete any SESSION variables
	session_destroy();
	
        //then redirect to login page
	echo"<script type='text/javascript'> setTimeout(function(){ location.assign('../../index.php'); }, 0000);</script>";
}

?>                         
                        </div>

                    </li>

          <li>
						<a href="#">I.T Services<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
					
								<li><a href="#">Call Log<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li><a href="caladd.php">Add Call Log</a></li>
						<li><a href="viewcal_log.php">View Call Log</a></li>
					</ul>
					<li>
                        <a href="#">Complaint Log  <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="complaintlog.php">Add Complaint Log  </a>
                            </li>
                            <li>
                                <a href="viewcomplaintlog.php">View Complaint Log </a>
                            </li>

                        </ul>
                    </li>                    

					</ul>
				</li>
				</li>
		</li>
	<li>
						<a href="#">Asset Management<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
					
                    <li>
					<a href="#">ISP Log<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li><a href="ispadd.php">Add ISP Log</a></li>
						<li><a href="view_isp_log.php">View ISP Log</a></li>
					</ul>
				</li>
	
			<li><a href="#">Asset Log<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
						<li><a href="deskadd.php">
						Add Desktop/Laptop Details</a></li>

						<li><a href="printradd.php">
							Add Printer Details</a></li>

						
						<li><a href="switchadd.php">
							Add Switch Details</a></li>

						<li><a href="projadd.php">
							Add Projector Details</a></li>

						<li><a href="viewasset_log.php">
							View Desktop/Laptop Details</a></li>

					
						<li><a href="viewproj.php">
							View Projector Details</a></li>
				
					</ul>

				</li>
				
				<li><a href="#">AMC Call Log<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
						<li><a href="amcadd.php">
						Add AMC Call Log</a></li>
						<li><a href="viewamc.php">
						View AMC Details</a></li>						
					</ul>
				</li>
		
				<li><a href="jhcnw.gif" target="_blank">Network Diagram</a>
				</li>	
				<li><a href="amc_con.php">AMC Contractor</a>
				</li>	
				<li><a href="proj_con.php">Projector Contractor</a>
				</li>
				
				<li><a href="uploadfaculty.php">Upload Faculty Details</a>
				</li>
				</ul>
				</li>
				
				<li>
						<a href="#">Faculty Academic Planner<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="#">Class Allotment<span class="fa arrow"></span></a>
									<ul class="nav nav-second-level">
											<li><a href="classreg.php">Faculty Class Allotment</a>
											</li>
											<li><a href="viewclassallotment.php">View Class Allotment</a>
											</li>
										</ul>
										</li>
						<li><a href="#">Weekly Teaching Plan<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li><a href="viewplan.php">
						View Weekly Plan</a></li>
						
					</ul></li>
				<li><a href="#">Daily Lecture Report<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li><a href="lectureview.php">
						View Lecture Report</a></li>
						
					</ul></li>
					</ul></li>
					<li><a href="#">E-Notices<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li><a href="uploadpage.php">
						Upload E-Notices</a></li>
						<li><a href="delete.php">
						Delete E-Notices</a></li>
						<li><a href="#">View E-Notices  <span class="fa arrow"></span></a>
					 <ul class="nav nav-second-level">
                            <li><a href="universitynotice.php">
							
						University E-Notices</a></li>
						
						<li><a href="collegenotice.php">
							
						College E-Notices</a></li>
						<li><a href="departmentnotice.php">
							
						Department E-Notices</a></li>
					</ul>
				</li>
					</ul>
				</li>
				<li><a href="adminlogin.php">Back To Home</a></ul></li>		
				
				</ul>            </ul>
            </div>

        </nav>
     
     <div id="page-wrapper" class="page-wrapper-cls" style="min-height:600px!important"  >
            <div id="page-inner" style="min-height:600px!important">
                <div class="row">
                    <div class="col-md-12"><br>
                        <h2 class="page-head-line"><center>Class Registration</h2></center>
                    </div>
                </div>
                 
                        <div class="row">
                       <form name="report" method="post" action="register.php" onSubmit="return ValidateBlank();">
						<table width="100%" class="table table-striped table-bordered table-hover">
				<tr>
					<td>
	<label>Select Department</label></td><td>
    <select name="seldep" id="seldep" onblur="depsend(this.value)"  class="form-control">
<?php
$emp = $_SESSION["emp"];
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
$sql="SELECT distinct Dept_Name FROM Department order by Dept_Name asc;";

$result = $conn->query($sql);

while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
{
echo "<option value='".$row['Dept_Name']."'>".$row['Dept_Name']."</option>";

}
?>				
</select>
 
  <td>
				<label>Year</label></td><td>
				<select name="year" id="year" onchange="yearsend(this.value)" class="form-control">
<option value="0">Select Year</option>
<option value="First">First</option>
<option value="Second">Second</option>
<option value="Third">Third</option>
    </select></td><td>
  <label >Semester</label></td><td>
				<select id="sem" name="sem"  class="form-control" onchange="semsend(this.value)">
<option value="0">Select Semester</option>
</select>
</td></tr>
<tr><td>
				<label >Subject</label></td><td>
				<select id="sub" name="sub" class="form-control" onchange="subjectsend(this.value)" onblur="getpaper(this.value)">
			<option value="0">Select Subject</option></select></td><td>
		
 <label>Paper</label></td><td>
				<select name="papersh" id="papersh"  class="form-control">
				<option value="0">Select Paper</option></select></td>
  		<td>	<label >Division</label></td><td>
				<select id="div" name="div"  class="form-control" >
<option value="0">Select Division</option>
<option value="A" >A</option>
<option value="B">B</option>
</select></td></tr>
<tr>
		<td>
			<label>Department</label></td>
		<td>
				<select name="dept" id="dept"  class="form-control" onchange="showfaculty(this.value)">
				<option value="0">Select Department</option>
				<?php
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
$sql="SELECT distinct Dept_Name,Dept_ID FROM Department order by Dept_Name asc";

$result = $conn->query($sql);

while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
{
echo "<option value='".$row['Dept_ID']."'>".$row['Dept_Name']."</option>";
}
?>
				</select>
		</td>
<td >			
	<label>Faculty Name</label></td>
	<td colspan='3'>
				<select name="name" id="name" class="form-control">
			<option value="0">Select Faculty Name</option>
			</select>
</td></tr>
<tr><td>  <label> Theory</label></td><td>
  <input type="checkbox" name="type" value="Theory" ></td><td>
  
  <label>Practical</label></td><td colspan='3'>
  <input type="checkbox" name="types" value="Practical" ></td></tr>
  <tr>
  <td colspan='6'>
   <center>
  <input type="submit" name="submit" value="Submit" class="btn btn-primary" onclick="return ValidateBlank()">
       </center>
	   </td></tr>                   

</form>
                            </div>
                            </div>
                    </div>
                      </div>
                </div>

                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        
    </div>
    <!-- /. WRAPPER  -->
    <!-- /. FOOTER  -->

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CHARTS SCRIPTS -->
    <script src="assets/js/Chart.js"></script>
    <!-- CHARTS SCRIPTS SCRIPTS-->
    <script src="assets/js/custom-charts.js"></script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
<?php } ?>
