<?php session_start(); 
include_once 'dbconfig.php';
?>
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
	<script language="JAVASCRIPT">

function ProcessForm()
			{
	 
				if (document.getElementById("stat").value == "Completed") {       
				
				//if(document.tstest.dept.value=="0")
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

				document.tstest.acttk.disabled=false;
				document.getElementById("timestamp2").disabled=false;
		}	

	//return true;

}
</script>

</head>
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
              
        <!-- /. SIDEBAR MENU (navbar-side) -->
		        <div id="page-wrapper" class="page-wrapper-cls" style="min-height:600px!important"  >
            <div id="page-inner" style="min-height:600px!important">
			
<div>
                        <div class="panel panel-default">
                            <div class="col-md-6">
							<div class="col-md-6">
                               <center><h4> University E-NOTICES</h4></center>
                            </div>
							<div class="alert alert-info">
                            <center>
							<table class="table table-striped table-bordered table-hover" border="1">
  
    <tr>
    <td>File Name</td>
    
    <td>View</td>
    </tr>
                      <?php
					  $system_date=date("dMY");
	$sql="SELECT * FROM tbl_uploads where NType='University' ORDER BY date DESC";
	$result_set=mysql_query($sql);
	
			
			
				while($row=mysql_fetch_array($result_set))
				{
					$file_date=$row['date'];
					if($row['date'] == $system_date)
			{
			?>
				<tr>
				<td><img src='new1.gif' height='30'><?php echo $row['Title'] ?><img src='new1.gif' height='30'></td>
				<td><a href="../Uploads/<?php echo $row['file'] ?>" target="_blank">View Notice</a></td>
				</tr>
        <?php
			}
			
			else 
			{
			
		?>	
				<tr>
				<td><?php echo $row['Title'] ?></td>
				<td><a href="../Uploads/<?php echo $row['file'] ?>" target="_blank">View Notice</a></td>
				</tr>
				 <?php
	}
			}
	?>
		
    </table>
</div>
                           </center>
						   

                        </div>
						
						
						
						
						
						
						
						<div class="col-md-6">
							<div class="col-md-6">
                               <center><h4> College E-NOTICES</h4></center>
                            </div>
							<div class="alert alert-info">
                            <center>
							<table class="table table-striped table-bordered table-hover" border="1">
    <tr>
    <td>File Name</td>
    
    <td>View</td>
    </tr>
                      <?php
	$sql="SELECT * FROM tbl_uploads where NType='College' ORDER BY date DESC";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['Title'] ?></td>
       <td><a href="../Uploads/<?php echo $row['file'] ?>" target="_blank">View Notice</a></td>
        </tr>
        <?php
	}
	?>
    </table>
</div>
                           </center>
						   
						   
					</div>	   
<center>
						   
						   <div align="center" style="width:60%">
							<div class="col-md-6">
                               <center><h4> Department E-NOTICES</h4></center>
                            </div>
							<div class="alert alert-info">
                            <center>
							<table class="table table-striped table-bordered table-hover" border="1">
    <tr>
    <td>File Name</td>
    
    <td>View</td>
    </tr>
                      <?php
	$sql="SELECT * FROM tbl_uploads where NType='Department' ORDER BY date DESC";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['Title'] ?></td>
       <td><a href="../Uploads/<?php echo $row['file'] ?>" target="_blank">View Notice</a></td>
        </tr>
        <?php
	}
	?>
    </table>
</div>
                           </center>
						
						   
                        </div>
                    </div>
                        <!-- TWEET WRAPPER END -->
                  


                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
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
