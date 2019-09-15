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
	<script type="text/javascript" src="js/slidedown-menu2.js"></script>
	<script language="JAVASCRIPT" src="ts_picker.js">
</script>
<script language="JAVASCRIPT">
function showUser1(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
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
     // alert(str);
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getprn.php?q="+str,true);
xmlhttp.send();
}

function showUser2(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
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
     
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getprn1.php?q="+str,true);
xmlhttp.send();
}

function showUser4(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
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
     // alert(str);
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getprn2.php?q="+str,true);
xmlhttp.send();
}
</script>

</head>
<body class="set-body" style="overflow-x: auto;">

    
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
                        <div class="user-div"> &nbsp;&nbsp;&nbsp;<img src='admin.png' height='15' width='15'> &nbsp;&nbsp;<?php
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
                        <h2 class="page-head-line"><center>Filter Printer Details</center></h2>
                    </div>
                </div>
                <div class="row">
				<table width="100%" class="table table-striped table-bordered table-hover">
				<tr>
				<th align="center">
				
				<form name="tstest">
				<label>Department</label></th><td>
				<select name="dept1" onchange="showUser1(this.value)" class="form-control">
<option value="0">Select Department</option>
<option value="All">All</option>
</select></td><th align="center">
<label>Location</label></th><td>
<select name="loc" onchange="showUser2(this.value)" class="form-control">
<option value="0">Select Location</option>
<option value="All">All</option>
</select></td><th  align="center">
<label>Item</label></th><td>
<select name="ram" onchange="showUser4(this.value)" class="form-control">
<option value="0">Select By Item</option>
<option value="All">All</option>

</select></td></tr>
</table>
</form>
<div id="txtHint"><b>Search Details will be listed here.</b></div>
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