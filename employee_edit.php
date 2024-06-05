<head><title>ONLINE TRAVEL AGENCY SYSTEM::EMPLOYEE EDIT</title></head>
<link rel="stylesheet" href="css/styles.css" type="text/css"/>
<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
 <script src="js/validation.js" type="text/javascript"></script>
<?php include('header.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">EMPLOYEE EDIT</h2>
  
<?php
require_once('connection\connection.php');
?>

<?php
  $sql="select * from employee where emp_id='$_GET[emp_id]'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	 
	$emp_id=$row['emp_id'];
	$emp_name=$row['emp_name'];
	$emp_contact=$row['emp_contact'];
	$emp_address=$row['emp_address'];
	$emp_reference=$row['emp_reference'];
	$emp_email=$row['emp_email'];
	$emp_join=$row['emp_join'];
	$emp_close=$row['emp_close'];;
	$inserted_by=$row['inserted_by'];
}
?>

<form name="form1" method="post" action="update.php?action=updateEmp"enctype="multipart/form-data">
<input type="hidden" name="emp_id" value="<?php echo $emp_id; ?>" />
<fieldset>
<legend>personal info</legend>
<table width="100%" border="0" align="center">


  <tr>
    <td width="36%">&nbsp;</td> 
    <td width="16%">FULL NAME:</td>
    <td width="40%"><input type="text" name="emp_name"  value="<?php echo $emp_name ;?>"/></td>
    <td width="8%">&nbsp;</td>
  </tr>
  <tr> 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 		 	 	 	 	 	
    <td>&nbsp;</td>
    <td>EMPLOYEE CONTACT:</td>
    <td><input type="text" name="emp_contact" value="<?php echo $emp_contact;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>ADDRESS:</td>
    <td><input type="text" name="emp_address" value="<?php echo $emp_address;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>REFERENCE:</td>
    <td><input type="text" name="emp_reference" value="<?php echo $emp_reference;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>EMAIL:</td>
    <td><input type="text" name="emp_email" value="<?php echo $emp_email;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>JOIN DATE:</td>
    <td><input type="text" name="emp_join" value="<?php echo $emp_join;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td>EMPLOYEE LEAVING:</td>
    <td><input type="text" name="emp_close"  value="<?php echo $emp_close;?>"/></td>
    <td>&nbsp;</td>
  </tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="submit" name="employeeform" /><a href="employee_view.php"><input type="button" value="back to list" /></a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
</form>
<?php include('footer.php'); ?>
