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
	<script type="text/javascript" src="js/slidedown-menu2.js"></script>
	<script language="JAVASCRIPT" src="ts_picker.js">
</script>
<script language="JAVASCRIPT">
function ProcessForm()
			{
		if (document.getElementById("stat").value == "Completed") {  
				if(document.tstest.dept.value=="0")
				{
					alert("Please Select Department");
					document.tstest.dept.focus();
					return false;
				}

				if(document.tstest.item.value=="")
				{
					alert("Please Enter Item Details");
					document.tstest.item.focus();
					return false;
				}
				
				if(document.tstest.probrp.value=="")
				{
					alert("Please Report Problem");
					document.tstest.probrp.focus();
					return false;
				}

				if(document.tstest.ser.value=="")
				{
					alert("Please Enter Serial No");
					document.tstest.ser.focus();
					return false;
				}

				if(document.tstest.rec.value=="")
				{
					alert("Please Enter Receiving Person Name");
					document.tstest.rec.focus();
					return false;
				}

				if(document.tstest.dt.value=="")
				{
					alert("Please Enter Dispatch Date");
					document.tstest.dt.focus();
					return false;
				}

				if(document.tstest.stat.value=="")
				{
					alert("Please Select Status");
					document.tstest.stat.focus();
					return false;
				}

				if(document.tstest.recd.value=="")
				{
					alert("Please Enter Received Person Name");
					document.tstest.recd.focus();
					return false;
				}

				if(document.tstest.rdt.value=="")
				{
					alert("Please Enter Received Date and Time");
					document.tstest.rdt.focus();
					return false;
				}

			}

			if (document.getElementById("stat").value == "Pending") {  
				if(document.tstest.dept.value=="0")
				{
					alert("Please Select Department");
					document.tstest.dept.focus();
					return false;
				}

				if(document.tstest.item.value=="")
				{
					alert("Please Enter Item Details");
					document.tstest.item.focus();
					return false;
				}
				
				if(document.tstest.probrp.value=="")
				{
					alert("Please Report Problem");
					document.tstest.probrp.focus();
					return false;
				}

				if(document.tstest.ser.value=="")
				{
					alert("Please Enter Serial No");
					document.tstest.ser.focus();
					return false;
				}

				if(document.tstest.rec.value=="")
				{
					alert("Please Enter Receiving Person Name");
					document.tstest.rec.focus();
					return false;
				}

				if(document.tstest.dt.value=="")
				{
					alert("Please Enter Dispatch Date");
					document.tstest.dt.focus();
					return false;
				}

				if(document.tstest.stat.value=="")
				{
					alert("Please Select Status");
					document.tstest.stat.focus();
					return false;
				}

			}
				document.tstest.recd.disabled=false;
			//return true;

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
       document.getElementById('loc').innerHTML = xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getusr.php?q="+str,true);
xmlhttp.send();
}

function changetextbox()
{
    if (document.getElementById("stat").value == "Pending") {
        document.getElementById("recd").disabled='true';
           document.getElementById("rdt").disabled='true';
	} 

	if (document.getElementById("stat").value == "Completed") {
	document.tstest.recd.disabled=false;
	 document.tstest.rdt.disabled=false;
	}
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
							View Asset Details</a></li>

						
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
      <div id="page-wrapper" class="page-wrapper-cls" style="min-height:600px!important"  >
            <div id="page-inner" style="min-height:600px!important">
                <div class="row">
                    <div class="col-md-12"><br>
                        <h2 class="page-head-line"><center>Add AMC Details:</center></h2>
                    </div>
                </div>
                <div class="row">
               
       		<form name="tstest" method="post" action="amcinput.php">
			<table width="100%" class="table table-striped table-bordered table-hover">
				<th><label>Department</label></th>
				<td><select name="dept" onchange="showUser(this.value)"  class="form-control">
<option value="0">Select Department</option>
<?php
//$q=$_GET["q"]; 

$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mis", $con);

$sql="SELECT distinct Department FROM jhc_desktop order by Department";

$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)) 
{
echo "<option value=".$row['Department'].">".$row['Department']."</option>";

}
?> 
</select></td>
<th><label>User Name</label></th>
<td><select id="loc" name="user" class="form-control">
<option value="0">Select UserName</option>
</select></td>
<tr>
<th><label>Item Details</label></th>
<td><input type="Text" name="item"  class="form-control"></td>
<th><label>Problem Reported</label></th>
<td><textarea name="probrp" cols=22 class="form-control" cols=22></textarea></td>
</tr>
<tr>
<th><label>Serial No</label></th>
<td><input type="Text" name="ser"  class="form-control" ></td>
<th><label>Receivers Name</label></th>
<td><input type="Text" name="rec"  class="form-control"></td>
</tr>
<tr>
<th><label>Dispatch Date & Time</label></th>
<td><input type="Text" name="dt" readonly class="btn btn-default dropdown-toggle" style="width: 200px;">
<a href="javascript:show_calendar('document.tstest.dt', document.tstest.dt.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a></td>
<th><label>Status</label></th>
<td><select id="stat" name="stat" size="1" onChange="changetextbox();" class="form-control">
<option value="Completed" class="btn btn-success dropdown-toggle">Completed
<option value="Pending" class="btn btn-danger dropdown-toggle">Pending
</select></td>
</tr>
<tr>
<th><label>Senders Name</label></th>
<td><input type="Text" id="recd" name="recd"  class="form-control" ></td>
<th><label>Received Date and Time</label></th>
<td><input type="Text" id="rdt" name="rdt"  readonly class="btn btn-default dropdown-toggle" style="width: 200px;">
<a href="javascript:show_calendar('document.tstest.rdt', document.tstest.rdt.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a></td>
</tr>
<tr>
<td colspan="4" align="center"><input type="submit" name="submit" value="Submit"  onclick="return ProcessForm()" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" value="Reset"  class="btn btn-primary">
</table>
</form>
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
