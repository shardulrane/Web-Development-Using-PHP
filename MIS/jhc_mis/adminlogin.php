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
<link rel="icon" href="../favicon.ico" type="image/x-icon">
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
                            <i class="fa fa-cogs"></i><i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            				<li><a href="updatepwd.php">Update Password</a>
											</li>
                            <li><a href="../index.php"><i class="index.php"></i>Logout</a>
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
                        <div class="user-div">
                            <i class="fa fa-exchange div-exchange" id="buttonMenu"></i><?php
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
	echo"<script type='text/javascript'> setTimeout(function(){ location.assign('../index.php'); }, 0000);</script>";
}

?>
                           
                        </div>

                    </li>
					<li>
					<a href="#">Call Log<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li><a href="caladd.php">Add Call Log</a></li>
						<li><a href="viewcal_log.php">View Call Log</a></li>
					</ul>
				</li>
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

						<li><a href="viewprn.php">
							View Printer Details</a></li>

						<li><a href="viewsw.php">
							View Switch Details</a></li>

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
			</ul>            </ul>
            </div>

        </nav>
            <!-- /. SIDEBAR MENU (navbar-side) -->
		        <div id="page-wrapper" class="page-wrapper-cls" style="min-height:600px!important"  >
            

			<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/b.jpg" alt="b" title="b" id="wows0_0"/></li>
		<li><img src="data0/images/c.jpg" alt="c" title="c" id="wows0_1"/></li>
		<li><img src="data0/images/d.jpg" alt="d" title="d" id="wows0_2"/></li>
		<li><img src="data0/images/dsc_0020.jpg" alt="DSC_0020" title="DSC_0020" id="wows0_3"/></li>
		<li><img src="data0/images/img_0654.jpg" alt="IMG_0654" title="IMG_0654" id="wows0_4"/></li>
		<li><img src="data0/images/img_0985.jpg" alt="IMG_0985" title="IMG_0985" id="wows0_5"/></li>
		<li><img src="data0/images/img_1319.jpg" alt="IMG_1319" title="IMG_1319" id="wows0_6"/></li>
		<li><img src="data0/images/img_1471.jpg" alt="IMG_1471" title="IMG_1471" id="wows0_7"/></li>
		<li><a href="http://wowslider.com"><img src="data0/images/img_1535.jpg" alt="slider wordpress" title="IMG_1535" id="wows0_8"/></a></li>
		<li><img src="data0/images/img_1582.jpg" alt="IMG_1582" title="IMG_1582" id="wows0_9"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="b"><span><img src="data0/tooltips/b.jpg" alt="b"/>1</span></a>
		<a href="#" title="c"><span><img src="data0/tooltips/c.jpg" alt="c"/>2</span></a>
		<a href="#" title="d"><span><img src="data0/tooltips/d.jpg" alt="d"/>3</span></a>
		<a href="#" title="DSC_0020"><span><img src="data0/tooltips/dsc_0020.jpg" alt="DSC_0020"/>4</span></a>
		<a href="#" title="IMG_0654"><span><img src="data0/tooltips/img_0654.jpg" alt="IMG_0654"/>5</span></a>
		<a href="#" title="IMG_0985"><span><img src="data0/tooltips/img_0985.jpg" alt="IMG_0985"/>6</span></a>
		<a href="#" title="IMG_1319"><span><img src="data0/tooltips/img_1319.jpg" alt="IMG_1319"/>7</span></a>
		<a href="#" title="IMG_1471"><span><img src="data0/tooltips/img_1471.jpg" alt="IMG_1471"/>8</span></a>
		<a href="#" title="IMG_1535"><span><img src="data0/tooltips/img_1535.jpg" alt="IMG_1535"/>9</span></a>
		<a href="#" title="IMG_1582"><span><img src="data0/tooltips/img_1582.jpg" alt="IMG_1582"/>10</span></a>
	</div></div>
	</div>	
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	

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
