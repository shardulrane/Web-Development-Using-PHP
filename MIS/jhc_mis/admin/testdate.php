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
	<script language="JAVASCRIPT" src="scw.js">
</script>
<script language="JAVASCRIPT">
function call()
{
	document.getElementById('timestamp1').value="";
	document.getElementById('timestamp2').value="";
}
function resp()
{
	document.getElementById('timestamp2').value="";

	var ts1 = document.getElementById('timestamp').value;
	var ts2 = document.getElementById('timestamp1').value;
		var ts11 = ts1.split(' ');
		var ts12 = ts2.split(' ');
		var date1 = ts11[0].split('-');
		var time1 = ts11[1].split(':');
		var date2 = ts12[0].split('-');
		var time2 = ts12[1].split(':');
		//alert(ts12[1]);
		
		if((date1[2]>date2[2]) || (date1[1]>date2[1] && date1[2]>=date2[2]) || (date1[0]>date2[0] && date1[1]>=date2[1] && date1[2]>=date2[2]))
		{
					document.getElementById('timestamp1').value="";
	
			alert("Response Date Is Set Before Complaint Date");
		}
		if(date1[0]==date2 [0] && date1[1]==date2[1] && date1[2]==date2[2])
		{
			var t1 = time1[0]*3600+time1[1]*60+time1[2];
			var t2 = time2[0]*3600+time2[1]*60+time2[2];
		if(t1>t2)
		{
						document.getElementById('timestamp1').value="";
	
			alert("Response Time Is Set Before Complaint Date");
		}
			
		}
		
}
function res()
{
	var ts1 = document.getElementById('timestamp1').value;
	var ts2 = document.getElementById('timestamp2').value;
		var ts11 = ts1.split(' ');
		var ts12 = ts2.split(' ');
		var date1 = ts11[0].split('-');
		var time1 = ts11[1].split(':');
		var date2 = ts12[0].split('-');
		var time2 = ts12[1].split(':');
		//alert(ts12[1]);
		
		if((date1[2]>date2[2]) || (date1[1]>date2[1] && date1[2]>=date2[2]) || (date1[0]>date2[0] && date1[1]>=date2[1] && date1[2]>=date2[2]))
		{
						document.getElementById('timestamp2').value="";
	
			alert("Resolution Date Is Set Before Response Date");
		}
		if(date1[0]==date2[0] && date1[1]==date2[1] && date1[2]==date2[2])
		{
			var t1 = time1[0]*3600+time1[1]*60+time1[2];
			var t2 = time2[0]*3600+time2[1]*60+time2[2];
		if(t1>t2)
		{
			document.getElementById('timestamp2').value="";
			alert("Resolution Time Is Set Before Response Date");
			
		}
			
		}
}
function cp()
{
	
	//alert("Hiii Test1");
	var d1=document.getElementById('timestamp').value;
var date12=d1.split(' ');
var a1=date12[0];
alert(date12[0]);
var date1=a1.split('-');

alert(date1);
var firstDate=new Date();
 firstDate.setFullYear(date1[0],(date1[1] - 1 ),date1[2]);
alert(firstDate);
 
}
function cpm()
{
var d1=document.getElementById('timestamp').value;
var date12=d1.split(' ');
var date1=date12.split('-');

alert(date1);


var d2=document.getElementById('timestamp1').value;
var date=d2.split(' ');
var date2=date.split('-');
alert(date2);



//var firstValue = "2012-05-12".split('-');
//var secondValue = "2014-07-12".split('-');

 var firstDate=new Date();
 firstDate.setFullYear(date1[0],(date1[1] - 1 ),date1[2]);
alert(firstDate);
 var secondDate=new Date();
 secondDate.setFullYear(date2[0],(date2[1] - 1 ),date2[2]);     
alert(secondDate);
  if (firstDate > secondDate)
  {
   alert("Call Log Date Can't BE Greater Then The Responselog Date");
   return false;
  }
 else
  {
    return true;
  }
  }


function cpm1()
{
var d1=document.getElementById('timestamp1').value;
var date1=d1.split('-');
alert(date1);


var d2=document.getElementById('timestamp2').value;
var date2=d2.split('-');
alert(date2);



//var firstValue = "2012-05-12".split('-');
//var secondValue = "2014-07-12".split('-');

 var firstDate=new Date();
 firstDate.setFullYear(date1[0],(date1[1] - 1 ),date1[2]);
alert(firstDate);
 var secondDate=new Date();
 secondDate.setFullYear(date2[0],(date2[1] - 1 ),date2[2]);     
alert(secondDate);
  if (firstDate > secondDate)
  {
   alert("Responselog Date Can't Be Greater Then The Resolution Date");
  }
 else
  {
    return true;
  }
  }
</script>



</head>
<body class="set-body">

    
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
                        <h2 class="page-head-line" align="center">Add Call Log</h2>
                    </div>
                </div>
                <div class="row">
                
        <form name="tstest" method="post">

     





<label>Call log Date & Time</label>
	<td colspan="2"> <input type="Text" readonly name="timestamp" id="timestamp" style="width: 200px;" class="btn btn-default dropdown-toggle" onblur="call()" onclick="show_calendar('document.tstest.timestamp', document.tstest.timestamp.value)">
<a href="javascript:show_calendar('document.tstest.timestamp', document.tstest.timestamp.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a>
<br>
<label>Responselog Date & Time</label>
	 <input type="Text" readonly name="timestamp1" id ="timestamp1"  style="width: 200px;" class="btn btn-default dropdown-toggle" onclick="show_calendar('document.tstest.timestamp1', document.tstest.timestamp1.value)" onblur="resp()" >
<a href="javascript:show_calendar('document.tstest.timestamp1', document.tstest.timestamp1.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a>
<br>
<label>Resolution Date & Time</label>
	 <input type="Text" id="timestamp2" name="timestamp2" readonly style="width: 200px;" onblur="res()" onclick="show_calendar('document.tstest.timestamp2', document.tstest.timestamp2.value)" class="btn btn-default dropdown-toggle">
<a href="javascript:show_calendar('document.tstest.timestamp2', document.tstest.timestamp2.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a>



<input type="submit" name="submit" value="Submit" style="width: 120px; height: 40px"  onclick="return cp()" class="btn btn-primary btn-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
