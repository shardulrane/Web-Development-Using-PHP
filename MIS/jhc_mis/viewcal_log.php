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
  <style>
        .divScroll {
            overflow:scroll;
			 overflow:auto;
			 overflow-x: auto;
             width: 80%;
        }
    </style>
<script language="JAVASCRIPT" src="scw.js"></script> 
<script language="JAVASCRIPT">
function showUser0(str)
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
xmlhttp.open("GET","getuser3.php?q="+str,true);
xmlhttp.send();
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
     // alert(str);
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}

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
xmlhttp.open("GET","getuser1.php?q="+str,true);
xmlhttp.send();
}

function showUser2(dataSource, divID) 
      {
	var XMLHttpRequestObject = false; 

      if (window.XMLHttpRequest) {
        XMLHttpRequestObject = new XMLHttpRequest();
      } else if (window.ActiveXObject) {
        XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
      }

 
        if(XMLHttpRequestObject) {
          var obj = document.getElementById(divID); 
		if(document.tstest.inputField.value=="")
				{
					alert("Please Select Date");
					document.tstest.inputField0.focus();
					return false;
				}
				
var a = document.getElementById('t1').value;
//alert(a);
 
  var queryString = "?q=" + a ;

          XMLHttpRequestObject.open("GET", dataSource + queryString); 

          XMLHttpRequestObject.onreadystatechange = function() 
          { 
            if (XMLHttpRequestObject.readyState == 4 && 
              XMLHttpRequestObject.status == 200) { 
                obj.innerHTML = XMLHttpRequestObject.responseText; 
            } 
          } 

          XMLHttpRequestObject.send(null); 
        }
      }



function getData(dataSource, divID) 
      {
	var XMLHttpRequestObject = false; 

      if (window.XMLHttpRequest) {
        XMLHttpRequestObject = new XMLHttpRequest();
      } else if (window.ActiveXObject) {
        XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
      }

 
        if(XMLHttpRequestObject) {
          var obj = document.getElementById(divID); 
		  
		  if(document.tstest.timestamp.value=="")
				{
					alert("Please Select From Date");
					document.tstest.timestamp.focus();
					return false;
				}

				if(document.tstest.timestamp0.value=="")
				{
					alert("Please select To Date");
					document.tstest.timestamp0.focus();
					return false;
				}

var a = document.getElementById('t3').value;
 var w= document.getElementById('t2').value;
 //alert(a);
// alert(w);
  var queryString = "?q=" + a ;
queryString +=  "&q1=" + w ;


          XMLHttpRequestObject.open("GET", dataSource + queryString); 

          XMLHttpRequestObject.onreadystatechange = function() 
          { 
            if (XMLHttpRequestObject.readyState == 4 && 
              XMLHttpRequestObject.status == 200) { 
                obj.innerHTML = XMLHttpRequestObject.responseText; 
            } 
          } 

          XMLHttpRequestObject.send(null); 
        }
      }


	  function getData1(dataSource, divID) 
      {
	var XMLHttpRequestObject = false; 

      if (window.XMLHttpRequest) {
        XMLHttpRequestObject = new XMLHttpRequest();
      } else if (window.ActiveXObject) {
        XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
      }

 
        if(XMLHttpRequestObject) {
          var obj = document.getElementById(divID); 

var ci = document.getElementById('CI').value;
var queryString = "?q=" + ci ;

          XMLHttpRequestObject.open("GET", dataSource + queryString); 
          XMLHttpRequestObject.onreadystatechange = function() 
          { 
            if (XMLHttpRequestObject.readyState == 4 && 
              XMLHttpRequestObject.status == 200) { 
                obj.innerHTML = XMLHttpRequestObject.responseText; 
            } 
          } 

          XMLHttpRequestObject.send(null); 
        }
      }

</script>


</head>
<body class="set-body" style="overflow-x: auto;">

   
    <!-- /. SIDE PUSH MENU  -->
    <div id="wrapper" >
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
	echo"<script type='text/javascript'> setTimeout(function(){ location.assign('../../index.php'); }, 0000);</script>";
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
						
					</ul></li>
			</ul>            </ul>
            </div>

        </nav>
       <div  id="page-wrapper" class="page-wrapper-cls" style="min-height:600px!important"  >
            <div id="page-inner" style="min-height:600px!important">
                <div class="row">
                    <div class="col-md-12"><br>
                        <h2 class="page-head-line" align="center">Filter Call Log Details</h2>
                    </div>
                </div>
                <div class="row" style="overflow-x: auto;>
                <div class="col-md-6">
                   <form enctype="multipart/form-data" name="tstest">
				   <table width="100%" class="table table-striped table-bordered table-hover">
				   <tr>
				   <th><label>Department</label></th>
				   <td colspan="3"><select name="dept" onchange="showUser0(this.value)" class="btn btn-default dropdown-toggle" style="width: 200px;">
<option value="0">Select Department</option>
<option value="All">All</option>
				
 <!-- /. php1  -->;
<?php
//$q=$_GET["q"];

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

</select></td>
<th><label>Category</label></th>
<td><select name="users" class="btn btn-default dropdown-toggle" onchange="showUser(this.value)" style="width: 200px;">
<option value="0">Select Category</option>
<option value="All">All</option>
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
<th><label>Status</label></th>
<td><select name="users" class="btn btn-default dropdown-toggle" onchange="showUser1(this.value)" style="width: 200px;">
<option value="0">Select Status</option>
<option value="Completed" class="btn btn-success dropdown-toggle">Completed</option>
<option value="Pending" class="btn btn-danger dropdown-toggle">Pending</option>
</select></td>
</tr>
<tr>
<th colspan="3" align="left"><br><label>Search By Date</label></th>
<th colspan="5" align="left"><br><label>Select Search Range</label></th>
</tr>
<tr>
<th colspan="2"><label>Date</label></th>
<td><input type="text" id="t1" name="inputField" class="btn btn-default dropdown-toggle" onclick='scwShow(this,this);' style="width: 200px;" />
<input type="button" value="Submit" class="btn btn-primary" onclick = "showUser2('getuser2.php', 'txtHint')" style="width: 70px; height: 30px"></td>
<th><label>From Date:</label></th>
<td colspan="2"><input type="Text" id='t3' name="timestamp" onclick='scwShow(this,this);' style="width: 150px;" class="btn btn-default dropdown-toggle" style="width: 200px;"></td>
<th><label>To Date:</label></th>
<td><input type="Text" id='t2' name="timestamp0" style="width: 150px;" onclick='scwShow(this,this);' class="btn btn-default dropdown-toggle" style="width: 200px;">
<input type = "button" value = "Click" onclick = "getData('ft.php', 'txtHint')" class="btn btn-primary" ></td>
</tr>
</table>	
</form>
</div>
<div id="txtHint"><b>Call Log Details will be listed here.</b></div>
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
			   