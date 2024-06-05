
<?php
require_once('connection/connection.php');
?>
<?php  include('session.php');
?>

<?php 
//insertion into employee table
    if(isset($_REQUEST['employeeform']))
	{
 
 $image=$_FILES['userfile']['name'];
 $file_size=$_FILES['userfile']['size'];
 $tmp_file_name=$_FILES['userfile']['tmp_name']; 

$uploaddir='user/'.$image;
$uploadimage=$uploaddir;//specify the full path for file;

if(move_uploaded_file($tmp_file_name,$uploadimage))
{
	echo"file upload successfully";
}
else
{
	echo"error occured";
         
}// end of else

echo"<pre>";
print_r($_FILES['userfile']);
echo"</pre>";
	}
	 	 	 		 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	
$emp_name=$_REQUEST['emp_name'];
$emp_contact=$_REQUEST['emp_contact'];
$emp_email=$_REQUEST['emp_email'];
$emp_address=$_REQUEST['emp_address'];
$emp_reference=$_REQUEST['emp_reference'];
$emp_join=$_REQUEST['emp_join'];
$emp_close=$_REQUEST['emp_close'];
$emp_desc=$_REQUEST['emp_desc'];

$sql="insert into employee (emp_picture, emp_name, emp_contact,emp_email, emp_address, emp_reference, emp_join, emp_close, emp_desc) values('$uploadimage', '$emp_name', '$emp_contact','$emp_email', '$emp_address', '$emp_reference', '$emp_join', '$emp_close', '$emp_desc')" or die(mysqli_error($con));
$result=mysqli_query($con,$sql);
if($result)
{ echo "data inserted sucessfully";
header('location:employee_view.php?msg=Sucessfully inserted');
}
else
     {  
	    echo "not inserted";
     }
?> 

