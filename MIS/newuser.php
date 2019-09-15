<?php session_start(); 

					 $EmpID = $_SESSION['empid'];
					 $Dept = $_SESSION["Dept"];
					$Name = $_SESSION["Name"];
					$EmailID = $_SESSION["EmailID"];
					$PhNo = $_SESSION["PhNo"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Free Html Bootstrap Admin Template" />
    <meta name="author" content="" />
    <meta name="keywords" content="bootstrap, template,admin,free template" />
    <link rel="canonical" href="http://www.jaihind.com/">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- Favicon Icon ( put .ico favicon URL in href below ) -->
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
	<script type="text/javascript">
function toggleVisibility() {
document.getElementById("newusr").style.display = "";
if(document.getElementById("newusr").style.visibility == "hidden" ) {
    document.getElementById("newusr").style.visibility = "visible";
}
else {
document.getElementById("newusr").style.visibility = "hidden";
}
}


function ProcessForm()
			{
	 						
				if(document.form1.myusername.value=="")
				{
					alert("Please Enter UserName");
					document.form1.myusername.focus();
					return false;
				}

					if(document.form1.mypassword.value=="")
				{
					alert("Please Enter Password");
					document.form1.mypassword.focus();
					return false;
				}
			}

				</script>
</head>
<body >
       
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.jaihind.com/" target="_blank">Management Information System
                     
                </a>
            </div>

           
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-div">
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><strong>LOGIN AND SIGNUP </strong></b>
                           
                        </div>

                    </li>

                    <li>
                     <a href="#"> You Need To Login To Get Inside !</a>  

                    </li>
                    
                </ul>
            </div>

        </nav>
<div id="page-wrapper" class="page-wrapper-cls" style="min-height:600px!important"  >
            <div id="page-inner" style="min-height:600px!important">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">User Registration:</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                   <form name="form1" method="post" action="usrreg.php">
<?php
echo "<label>EmpID:</label><input name='empid' readonly id='empid' value='$EmpID' class='form-control' size = 4>";
 ?>                    <br>
					 <label>Name: </label>
					 <?php 
                        echo"<input name='name' readonly type='text' id='name' value='$Name' class='form-control'>";
				echo	"<label>Department: </label>
					<select name='dept' readonly class='form-control'>
					<option value='$Dept'>$Dept</option>";
					?>
<option value="Accounts">Accounts</option>
<option value="Office">Office</option>
<option value="Vice Principal">Vice Principal</option>
<option value="Computer Science">Computer Science</option>
<option value="Information Technology">Information Technology</option>
<option value="Physics">Physics</option>
<option value="Chemistry">Chemistry</option>
<option value="English">English</option>
<option value="Maths">Maths</option>
<option value="EVS">EVS</option>
<option value="Commerce">Commerce</option>
<option value="Hindi">Hindi</option>
<option value="French">French</option>
<option value="Philosophy">Philosophy</option>
<option value="Political Science">Political Science</option>
<option value="Pshycology">Pshycology</option>
<option value="Botany">Botany</option>
<option value="Biology">Biology</option>
<option value="Biotechnology">Biotechnology</option>
<option value="Microbiology">Microbiology</option>
<option value="LifeScience">LifeScience</option>
<option value="BMS">BMS</option>
<option value="BMM">BMM</option>
<option value="BA">BAF</option>
<option value="BBI">BBI</option>
<option value="BFM">BFM</option>
<option value="Principal">Principal</option>
<option value="CAO">CAO</option>
</select>
<label>User name: </label>
<input name="usernm" type="text" id="myusername" class="form-control">
<label>Password: </label>
<input name="pwd" type="password" id="pwd" class="form-control">
<label>User Type:</label>
<select name="type" class="form-control">
<option value="0">Select User Type</option>
<option value="Common User">HOD</option>
<option value="Faculty">Faculty</option>
<option value="Engineer">Engineer</option>
</select>
<br>
<input type="submit" name="Submit" value="Submit" class="btn btn-default">&nbsp;
<input type="reset" name="Reset" value="Reset" class="btn btn-default">
</form>
</div>
                <div class="col-md-6">
                    <div class="alert alert-info">
                        Instructions For Your Login:
						<br>
                         <strong> Some of its features are given below :</strong>
                        <ul>
                            <li>
                         If You Don't Have A Login ID Or Password Created Then Click On The New User Sign up Link. 
                        
                            </li>
                            <li>
                               Create Your Login And Select Your Type
                            </li>
                            
                        </ul>
                       
                    </div>
                    <div class="alert alert-success">
                         <strong> NOTE:</strong>
                        <ul>
                            <li>
                               There Are Two (2) Types Of Logins In This M.I.S:
                            </li>
                            <li>
                                 ADMIN LOGIN
                            </li>
                            <li>
                              FACULTY LOGIN
                            </li>
                            
                        </ul>
                       
                    </div>
                </div>
				</div>
				<a href="index.php">Already a Member.! Login Here..</a>
				</div>

            <!-- /. PAGE WRAPPER  -->
        </div>
    </div>
   
    <!-- /. FOOTER  -->

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
