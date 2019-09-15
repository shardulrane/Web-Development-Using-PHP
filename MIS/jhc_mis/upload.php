<?php
error_reporting(0);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mis";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');




if(isset($_FILES['fileToUpload'])){

	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$file_name =$_POST['NamePro'];
	$n_type=$_REQUEST['ntype'];
	$folder="../Uploads/";

	$sql="INSERT INTO tbl_uploads(file,type,size,date,Title) VALUES('$final_file','$file_type','$new_size','now()',$file_name)";
		mysql_query($sql);
	

	/*$file = $_FILES['fileToUpload'];
	$namepro = ;
	//File Proprties
	$file_name = $file['name'];
	$file_tmp = $file['tmp_name'];
	
	$file_size = $file['size'];
	$file_error = $file['error'];
	
	//Extention Check
	$file_ext = explode('.',$file_name);
	$file_ext = strtolower(end($file_ext));
	$allowed = array('pdf');
	if(in_array($file_ext, $allowed))
	{
		if($file_error === 0)
		{
			if($file_size <= 5000000)
			{
				$file_name_new = "$file_name".".$file_ext";
				$destination = '../Uploads/'.$file_name_new;
					if(move_uploaded_file($file_tmp, $destination))
					{
						//$message = "The file "."$file_name_new"." has been uploaded.";
						//echo "<script type='text/javascript'>alert('$message');</script>";
						//echo"<script type='text/javascript'> setTimeout(function(){ location.assign('uploadpage.php'); }, 0000);</script>";
					}
					else 
					{
						$message = "The File Name Provided Is Not Valid Please Give A Valid Name";
						echo "<script type='text/javascript'>alert('$message');</script>";
						echo"<script type='text/javascript'> setTimeout(function(){ location.assign('uploadpage.php'); }, 1000);</script>";
					}
			}
					else 	
					{
						$message = "The File Selected Is Very Large";
						echo "<script type='text/javascript'>alert('$message');</script>";
						echo"<script type='text/javascript'> setTimeout(function(){ location.assign('uploadpage.php'); }, 1000);</script>";
					}
		}
					else 
					{
						$message = "There Is An Error Please Read The Instructions Carefully.";
						echo "<script type='text/javascript'>alert('$message');</script>";
						echo"<script type='text/javascript'> setTimeout(function(){ location.assign('uploadpage.php'); }, 1000);</script>";}
	}
					else
					{ 
						$message = "Only PDF Filetype is Allowed";
						echo "<script type='text/javascript'>alert('$message');</script>";
						echo"<script type='text/javascript'> setTimeout(function(){ location.assign('uploadpage.php'); }, 1000);</script>";}
					}

	*/				
					
					?>