<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-upload']))
{    
     
	$file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$file_name =$_POST['NamePro'];
	$n_type=$_REQUEST['ntype'];
	$d_type=$_REQUEST['dept'];
	$folder="../Uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = $file;
	// make file name in lower case
	
	$final_file=str_replace('','',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl_uploads(file,type,size,NType,Department,Title) VALUES('$final_file','$file_type','$new_size','$n_type','$d_type','$file_name')";
			mysql_query($sql);
		?>
		<script>
		alert('Your File Has Been Successfully Uploaded');
        window.location.href='adminenotices.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='uploadpage.php?fail';
        </script>
		<?php
	}
}
?>