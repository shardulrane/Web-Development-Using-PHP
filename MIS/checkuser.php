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
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
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
function toggleVisibility() 
{
document.getElementById("newusr").style.display = "";
if(document.getElementById("newusr").style.visibility == "hidden" ) 
{
    document.getElementById("newusr").style.visibility = "visible";
}
else 
{
document.getElementById("newusr").style.visibility = "hidden";
}
}

function ProcessForm()
			{
	 						
				if(document.form1.myusername.value=="")
				{
					alert("Please Enter Employee ID");
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
                <a class="navbar-brand" href="http://www.jaihindcollege.com/" target="_blank"><B><font size=+1>JAIHIND COLLEGE</font></B></a>
					
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
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls" style="min-height:600px!important"  >
            <div id="page-inner" style="min-height:600px!important">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">User Authentication :</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                   <form name="form1" method="post" action="check.php">

                     <br>
                     <label><h2>Enter Your Employee ID : </h2></label>
					 <br>
                        <input name="username" type="text" id="username" class="form-control" required='required'>
						
                        
						<br>
						
                        <input type="submit" name="Submit" value="Submit" onclick="return ProcessForm()" class="btn btn-info">&nbsp;
						<input type="reset" name="Reset" value="Clear" class="btn btn-default"><br>
						
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
                    
                </div>

            </div>
                <!-- /. PAGE INNER  -->
			

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
