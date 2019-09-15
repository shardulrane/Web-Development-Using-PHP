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

function ProcessForm()
			{
			

			document.tstest.dept2.disabled=false;
				if (document.getElementById("stat").value == "Completed") {       
				
				//if(document.tstest.dept.value=="0")
				//{
				//	alert("Please Select Department");
				//	document.tstest.dept.focus();
				//	return false;
				//}
				if(document.tstest.log.value=="0")
				{
					alert("Please Select Call Log Type");
					document.tstest.log.focus();
					return false;
				}

				if(document.tstest.dept.value=="0" && document.tstest.dept1.value=="0" && document.tstest.dept2.value=="0")
				{
					alert("Please Select Department");
					document.tstest.dept.focus();
					return false;
				}


				if(document.tstest.users.value=="0")
				{
					alert("Please Select User");
					document.tstest.users.focus();
					return false;
				}

				if(document.tstest.users.value=="")
				{
					alert("Please Enter Name");
					document.tstest.users.focus();
					return false;
				}
				
				if(document.tstest.timestamp.value=="")
				{
					alert("Please Enter Call Log Date");
					document.tstest.timestamp.focus();
					return false;
				}

				if(document.tstest.probrp.value=="")
				{
					alert("Please Report Problem");
					document.tstest.probrp.focus();
					return false;
				}

				if(document.tstest.acttk.value=="")
				{
					alert("Please Enter Action Taken");
					document.tstest.acttk.focus();
					return false;
				}

				if(document.tstest.timestamp1.value=="")
				{
					alert("Please Enter Response Date");
					document.tstest.timestamp1.focus();
					return false;
				}

				if(document.tstest.timestamp2.value=="")
				{
					alert("Please Enter Resolution Date");
					document.tstest.timestamp2.focus();
					return false;
				}			
		 }

	if (document.getElementById("stat").value == "Pending") {
	
			//	if(document.tstest.dept.value=="0")
				//{
				//	alert("Please Select Department");
				//	document.tstest.dept.focus();
				//	return false;
				//}

				if(document.tstest.users.value=="0")
				{
					alert("Please Select User");
					document.tstest.users.focus();
					return false;
				}
				if(document.tstest.users.value=="")
				{
					alert("Please Enter Name");
					document.tstest.users.focus();
					return false;
				}
				
				if(document.tstest.timestamp.value=="")
				{
					alert("Please Enter Call Log Date");
					document.tstest.timestamp.focus();
					return false;
				}

				if(document.tstest.probrp.value=="")
				{
					alert("Please Report Problem");
					document.tstest.probrp.focus();
					return false;
				}

				
				if(document.tstest.timestamp1.value=="")
				{
					alert("Please Enter Response Date");
					document.tstest.timestamp1.focus();
					return false;
				}
				cmp();
				cmp1();
				document.tstest.acttk.disabled=false;
				document.getElementById("timestamp2").disabled=false;
		}	

	//return true;

}
function cpm()
{
alert(date1);
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

  
  function changetextbox()
{
    if (document.getElementById("stat").value == "Pending") {
        document.getElementById("acttk").disabled='true';
           document.getElementById("timestamp2").disabled='true';
	} 

	if (document.getElementById("stat").value == "Completed") {
	//document.getElementById("acttk").enabled='true';
	document.tstest.acttk.disabled=false;
           document.getElementById("timestamp2").disabled=false;
	}
					
}

function showUser(str)
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
       document.getElementById('users').innerHTML = xmlhttp.responseText;
    }
  }

xmlhttp.open("GET","getusr.php?q="+str,true);
xmlhttp.send();
}

function showUserp(str)
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
       document.getElementById('users').innerHTML = xmlhttp.responseText;
    }
  }

xmlhttp.open("GET","getusrp.php?q="+str,true);
xmlhttp.send();
}

function showUsers(str)
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
       document.getElementById('users').innerHTML = xmlhttp.responseText;
    }
  }

xmlhttp.open("GET","getusrs.php?q="+str,true);
xmlhttp.send();
}
function toggleVisibility(str) {
	if(str=="Printer"){
		 document.tstest.dept.disabled=false;
 document.getElementById("dept0").style.display = "none";
 document.getElementById("sw").style.display = "none";
   document.getElementById("prin").style.display = "inline";
	
	}


if(str=="Desktop/Laptop"){
		 document.tstest.dept.disabled=false;
		  document.getElementById("dept0").style.display = "inline";
document.getElementById("sw").style.display = "none";
  document.getElementById("prin").style.display  = "none";
  }

if(str=="Switch"){
	 document.tstest.dept.disabled=false;
 document.getElementById("dept0").style.display = "none";
document.getElementById("sw").style.display = "inline";
  document.getElementById("prin").style.display = "none";
  }
}

function visibility() {
  document.getElementById("prin").style.display = "none";
   document.getElementById("sw").style.display = "none";
   document.tstest.dept.disabled=true;
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
                
                   <table width="100%" class="table table-striped table-bordered table-hover">
        <form name="tstest" method="post" action="calinput.php">
<tr></tr>
<tr></tr>

     




<tr> <td><select name="log" onchange="toggleVisibility(this.value)" class="form-control">
<option value="0">Select Call Log Type</option>
<option value="Desktop/Laptop">Desktop/Laptop Call Log</option>
<option value="Printer">Printer Call Log</option>
<option value="Switch">Switch Call Log</option></td>
<td colspan="2"><select name="dept" id="dept0" onchange="showUser(this.value)" style="display: none;" class="form-control">
<option value="0">Select Department</option>
<?php
$q=$_POST["dept"];
echo $q;

$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);

$sql="SELECT distinct Department FROM jhc_desktop  order by Department";

$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)) 
{
echo "<option value=".$row['Department'].">".$row['Department']."</option>";

}
?>

 
</select>
<select name="dept1" id="prin" onchange="showUserp(this.value)" style="display: none;" class="form-control">
<option value="0">Select Department</option>

<?php
//$q=$_GET["q"];

$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);

$sql="SELECT distinct Department FROM jhc_printer  order by Department";

$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)) 
{
echo "<option value=".$row['Department'].">".$row['Department']."</option>";

}
?> 

</select>
<select name="dept2" id="sw" onchange="showUsers(this.value)" disabled='true' class="form-control">
<option value="0">Select Department</option>
<?php
//$q=$_GET["q"];

$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);

$sql="SELECT distinct Department FROM jhc_switch  order by Department";

$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)) 
{
echo "<option value=".$row['Department'].">".$row['Department']."</option>";

}
?> 


</select>
</td>

 	<th >&nbsp;&nbsp;&nbsp;&nbsp;<label>UserName</label></th>
<td><select id="users" name="users" class="form-control">
<option value="0">Select User</option></div></td>
	
</tr>      
<tr><!-- onblur="return ValidateBlankNm()" -->
	  <th><label>Call log Date & Time</label></th>
	<td colspan="2"> <input type="Text" readonly name="timestamp" id="timestamp" style="width: 200px;" class="btn btn-default dropdown-toggle">
<a href="javascript:show_calendar('document.tstest.timestamp', document.tstest.timestamp.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a></td>
        
          <th>&nbsp;&nbsp;&nbsp;&nbsp;<label>Category</label></th>
	<td><select name="cat" size="1" class="form-control">
<option value="Antivirus Call">Antivirus Call
<option value="Desktop Call">Desktop Call
<option value="Hardware Call">Hardware Call
<option value="Internet Call">Internet Call
<option value="Network Call">Network Call
<option value="Salary_Package Call">Salary_Package Call
<option value="Server Call">Server Call
<option value="Software Call">Software Call
<option value="Tally Call">Tally Call
<option value="Wifi Call">Wifi Call

</select></td>
</tr>

<tr>
  <th><label>Engineer</label></th>
	<td colspan="2"> <select name="eng" size="1" class="form-control">
<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);
$sql="SELECT distinct Name FROM login WHERE Login_Type = 'Engineer' order by Emp_Id";

$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)) 
{
echo "<option value=".$row['Name'].">".$row['Name']."</option>";

}
//mysql_close($con);
?> 
</select> </td>

          <th>&nbsp;&nbsp;&nbsp;&nbsp;<label>Problem Reported</label></th>
          <td><textarea name="probrp" cols=26 class="form-control"></textarea></td>
	 </tr>


        <tr>
		<th><label>Responselog Date & Time</label></th>
	<td colspan=""> <input type="Text" name="timestamp1" readonly style="width: 200px;" class="btn btn-default dropdown-toggle" onblur="cpm()">
<a href="javascript:show_calendar('document.tstest.timestamp1', document.tstest.timestamp1.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a></td>
 
   <th colspan='2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Call Status</label></th>
<td><select id="stat" name="stat" size="1" onChange="changetextbox();" class="form-control">
<option value="Completed" class="btn btn-success dropdown-toggle">Completed
<option value="Pending" class="btn btn-danger dropdown-toggle">Pending
</select></td>

                 

   </tr>
       
<tr> 
 <th><label>Action Taken</label></th>
	
<td colspan="2"><textarea id="acttk" name="acttk" cols=26 class="form-control"></textarea></td>
         <th>&nbsp;&nbsp;&nbsp;&nbsp;<label>Resolution Date & Time</label></td>
	<td> <input type="Text" id="timestamp2" name="timestamp2" readonly style="width: 200px;" class="btn btn-default dropdown-toggle">
<a href="javascript:show_calendar('document.tstest.timestamp2', document.tstest.timestamp2.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a></td>


       

	</tr>
<tr></tr>
<tr></tr>
<tr>
<td colspan="5" align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="submit" value="Submit" style="width: 120px; height: 40px"  onclick="cpm()" class="btn btn-primary btn-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" style="width: 120px; height: 40px" class="btn btn-default btn-sm">
</td>

        </tr>

        </table>

      </td>

    </tr>

</table>

<br><br><br><br><br><br><br><br><br><br><br><br><br>



        </td>


      
   </tr>
   </table>

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
