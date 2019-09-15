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
	<script language="JAVASCRIPT" src="ts_picker.js">
</script>
<script language="JAVASCRIPT">
function ProcessForm()
			{
				document.tstest.dept2.disabled=false;
				document.tstest.Id.disabled=false;

				if (document.getElementById("stat").value == "Completed") 
				{       
				
				
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

				
				
				
				if(document.tstest.timestamp.value=="")
				{
					alert("Please Enter Call Log Date");
					document.tstest.timestamp.focus();
					return false;
				}
				if(document.tstest.cat.value=="0")
				{
					alert("Please Select Category");
					document.tstest.cat.focus();
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
			
			if(document.tstest.acttk.value=="")
				{
					alert("Please Enter Action Taken");
					document.tstest.acttk.focus();
					return false;
				}

			
				if(document.tstest.timestamp2.value=="")
				{
					alert("Please Enter Resolution Date");
					document.tstest.timestamp2.focus();
					return false;
				}
					
				test1();
				document.tstest.dept2.disabled=false;
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
				test1();
				

				document.tstest.acttk.disabled=false;
				document.getElementById("timestamp2").disabled=false;
 
				}	
 	//return true;

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

function myFunction()
{
document.tstest.Id.disabled=false;
//document.ReadID.callog.disabled=false;
}
</script>
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
                        <h2 class="page-head-line" align="center">Call Log Updation</h2>
                    </div>
                </div>
                <div class="row">
        <form name="tstest" method="post" action="dbupdate.php">
		<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);

		$id = $_GET['id'];
if($id=="All")
{
 
	  $sql="select * from info_tab";

}

else{ $sql="select * from info_tab WHERE Id='$id'";}
	
//echo $sql;
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	  ?>
	  <table width="100%" class="table table-striped table-bordered table-hover">
	  <tr>
	  <th><label>ID</label></th>
	  <td><input type = "text" name = "Id" readonly  class="form-control" value = "<?php echo $row['Id']; ?>" ></td>
	  <th>&nbsp;&nbsp;&nbsp;&nbsp;<label>Name</label>
	    </th>
	    <td>
	    <input type = "text" name = "username"   class="form-control" value = "<?php echo $row['Username']; ?>" >
	    </td>

	    </tr>
<tr>
	  	<th><label>
Catgory	  </label>  </th>
	    <td>
	    <input type = "text" name = "cat"  class="form-control" value = "<?php echo $row['Catgory']; ?>" >
	    </td>

	  	<th>&nbsp;&nbsp;&nbsp;&nbsp;<label>
	    Call log Date & Time</label>
	    </th>
	    <td>

	    <input type = "text" name = "timestamp0"  class="form-control" value = "<?php echo date('d-m-Y H:i:s',strtotime($row['Call_log_DateTim'])); ?>" >
	  <a href="javascript:show_calendar('document.tstest.timestamp0', document.tstest.timestamp0.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a>  
	    </td>
	    </tr>
	  <tr>
<th><label>Problem Reported</label>
</th>
	    <td>
	    <input type = "text" class="form-control" name = "probrep"  value = "<?php echo $row['Prob_Rep']; ?>" 
	    </td>
<th>&nbsp;&nbsp;&nbsp;&nbsp;<label>
Engineer</label>
	    </th>
	    <td>
	    <input type = "text" name = "eng" class="form-control" value = "<?php echo $row['Enginner']; ?>" >
	    </td>
</tr>
<tr>
<th><label>
Response log Date & Time</label>
	    </th>
	    <td> <input type="Text" class="form-control" name="timestamp" style="width: 200px;" value = "<?php echo date('d-m-Y H:i:s',strtotime($row['Resp_log_DateTim'])); ?>" >
<a href="javascript:show_calendar('document.tstest.timestamp', document.tstest.timestamp.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a>
</td>

	  	<th>&nbsp;&nbsp;&nbsp;&nbsp;<label>Resolution log Date & Time</label>
	    </th>

	    <td> <input type="Text" class="form-control" name="timestamp1" style="width: 200px;" value = "<?php echo $row['Res_DateTim']; ?>" >
<a href="javascript:show_calendar('document.tstest.timestamp1', document.tstest.timestamp1.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a>
</td>
<tr>

	    	  	<th><label>Action Taken</label></th>
<td>
<textarea name = "acttak" cols=22 class="form-control"><?php echo $row['Act_Tak']; ?> </textarea>
</td>   
	  	<th>&nbsp;&nbsp;&nbsp;&nbsp;<label>Status</label>
	    </th>
	    <td>
		<input type="Text" class="form-control" name="stat" value="<?php echo $row['Status'];?>">

	    </td>
</tr>
<tr>
	    <th colspan='4' align='center'><center>&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type = "Submit"  name = "update" value = "Update" onclick="return ProcessForm()" class="btn btn-primary" style="width: 220px; height: 40px"> </center> </tr>

        </table>



        </td>


      
   </tr>
   
   
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







