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
			document.tstest.Id.disabled=false;

				if(document.tstest.dept.value=="0")
				{
					alert("Please Select Department");
					document.tstest.dept.focus();
					return false;
				}
				if(document.tstest.user.value=="")
				{
					alert("Please Enter User Name");
					document.tstest.user.focus();
					return false;
				}
				
				if(document.tstest.idn.value=="")
				{
					alert("Please Enter Identification No");
					document.tstest.idn.focus();
					return false;
				}

				if(document.tstest.item.value=="")
				{
					alert("Please Enter item");
					document.tstest.item.focus();
					return false;
				}

				if(document.tstest.brand.value=="")
				{
					alert("Please Enter Brand");
					document.tstest.brand.focus();
					return false;
				}

				if(document.tstest.mod.value=="")
				{
					alert("Please Enter Model Type");
					document.tstest.mod.focus();
					return false;
				}

				if(document.tstest.ser.value=="")
				{
					alert("Please Enter Serial No");
					document.tstest.ser.focus();
					return false;
				}

				

			//return true;

		}


function myFunction()
{
document.tstest.Id.disabled=false;
//document.ReadID.callog.disabled=false;
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
                            <i class="fa fa-exchange div-exchange" id="buttonMenu"></i>
							<?php
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
       <div id="page-wrapper" class="page-wrapper-cls" style="min-height:600px!important"  >
            <div id="page-inner" style="min-height:600px!important">
                <div class="row">
                    <div class="col-md-12"><br>
                        <h2 class="page-head-line" align="center">Printer Details Updation</h2>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">                   
        <form name="tstest" method="post" action="dbupdateprn.php">
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
 
	  $sql="select * from jhc_printer";

}

else{ $sql="select * from jhc_printer WHERE IdNo='$id'";}
	
//echo $sql;
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	  ?>
	  <table width="100%" class="table table-striped table-bordered table-hover">
	  <tr>
	  	<th>Id</th>
	    <td>
	    <input type = "text" class="form-control" name = "Id" disabled style="width: 200px;" value = "<?php echo $row['IdNo']; ?>" >
    </td>

 	<th>&nbsp;&nbsp;&nbsp;&nbsp;	   Name
	    </th>
	    <td>
	    <input type = "text" class="form-control" name = "username"  style="width: 200px;" value = "<?php echo $row['Username']; ?>" >
	    </td>

	    </tr>
<tr>
	  	<th>
Location	    </th>
	    <td>
	    <input type = "text" class="form-control" name = "loc"  style="width: 200px;" value = "<?php echo $row['Location']; ?>" >
	    </td>

	  	<th>&nbsp;&nbsp;&nbsp;&nbsp;
	   Department
	    </th>
	    <td>

	    <input type = "text" class="form-control" name = "dept" style="width: 200px;" value = "<?php echo $row['Department']; ?>" >
	     </td>
	    </tr>
		<tr>
<th>Asset Verification No
</th>
	    <td>
	    <input type = "text" class="form-control" name = "idn" style="width: 200px;" value = "<?php echo $row['Identification_No']; ?>" 
	    </td>
<th>&nbsp;&nbsp;&nbsp;&nbsp;
Item
	    </th>
	    <td>
	    <input type = "text" class="form-control" name = "item" style="width: 200px;" value = "<?php echo $row['Item']; ?>" >
	    </td>
</tr>
<tr>
<th>
Brand
	    </th>
	    <td> <input type="Text" class="form-control" name="brand" style="width: 200px;" value = "<?php echo $row['Brand']; ?>" >
</td>

	  	<th>&nbsp;&nbsp;&nbsp;&nbsp;Model Type
	    </th>

	    <td> <input type="Text" name="mod" class="form-control" style="width: 200px;" value = "<?php echo $row['Model_Type']; ?>" >
</td>

</tr>
<tr>
	    	  	<th>Serial No</th>
<td>
<input type="Text" name = "ser" class="form-control" value="<?php echo $row['Serial_No']; ?>" >
</td>   
	
	    <td>&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type = "Submit" name = "update" class="form-control" value = "Update" onclick="return ProcessForm()" style="width: 100px; height: 30px">
    </td><td></td>       </tr>

        </table>

      </td>

    </tr>
	</table>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="ueberschrift"><a href="mailto:support@jaihindcollege.com">Mail</a> |  <a href="#">Terms of Use</a></div></td>
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


