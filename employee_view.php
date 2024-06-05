

<?php require_once('header.php');?>
<?php
    require_once('connection\connection.php');
?>

<link rel="stylesheet" href="css/bar.css" type="text/css" />
<div class="ph">EMPLOYEE VIEW</div>
  <DIV class="ph2"><a href="index.php">home&gt;&gt;</a><a href="employee_view.php">Employee_view</a></DIV>

<table width="1024"  class="table" border="0"   align="center">

  <tr class="header-tr">
<td width="130" align="center">MANIPULATION</td>
  <Td align="center" width="160">ACTION </a></Td>
 
    <td width="100"  align="center">PHOTO</td>
    <td width="92"  align="center">ID</td>
    <td width="59"  align="center">FULL NAME</td>
    <td width="27"  align="center">CONTACT</td>
    <td width="76"  align="center">ADDRESS</td>
    <td width="92"  align="center">EMAIL</td>
    
    <td align="center">REFERENCE </td>
  </tr>
  <tr>
  <td colspan="9"><hr /></td>
  </tr>
  <?php 
  $total=0;
  //RETRIVAL DATA FROM EMPLOYEE TABALE
  $sql="select*from employee";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{   
    $emp_picture=$row['emp_picture']; 
	$emp_id=$row['emp_id'];
	$emp_name=$row['emp_name'];
	$emp_contact=$row['emp_contact'];
	$emp_address=$row['emp_address'];
	$emp_reference=$row['emp_reference'];
	$emp_email=$row['emp_email'];
	$emp_jion=$row['emp_join'];
	$emp_close=$row['emp_close'];
	$total=$total+1;

?>
  <tr>
<td align="left" valign="top">
  <table  border="0">
  <tr>
    <td align="left" valign="top"><a href="employee_detail.php?emp_id=<?php echo $emp_id;?>"><img src="images/icon_view_new.gif" title="View employee" /></a></td> <td align="left" valign="top"><a href="employee_edit.php?emp_id=<?php echo $emp_id?>"><img src="images/edit.png" title="Edit employee" /></a></td> <td align="left" valign="top"><a href="delete.php?action=Delete&emp_id=<?php echo $emp_id ;?>" onclick="return confirm('Are you sure you want to delete?')"><img src="images/delete.png" title="Delete Employee" /></a></td>
  </tr>

  </table>
</td>
            <td align="left" valign="top">
  <table  border="0" style="background:#033; color:#FFF"> 
  <tr>
  <td width="74" class="asad" >Salary</td>
    <td width="71" ><a href="Salary1.php?emp_name=<?php echo $emp_name;?>"><img src="images/file_add.png" width="20" height="20" alt="" title="Add Salary" /></a>/<a href="salary_view.php?emp_name=<?php echo $emp_name;?>"><img src="images/icon_view_new.gif" title="View Salary" /></a></td>
  </tr>
  
</table>
    </td>
  
    <td align="left" valign="top"><?php if ($emp_picture!=""){?><a href="photoupdate.php?emp_id=<?php echo $emp_id;?>"><img src="<?php echo $emp_picture;?>" width="100" height="113" /></a><?php } else {?><a href="photoupdate.php?emp_id=<?php echo $emp_id;?>"><img src="user/default.gif" width="100" height="100" /></a><?php }?></td>
    
    <td align="left" valign="top"><?php       echo  $emp_email=$row['emp_id'];               ?></td>
    <td align="left" valign="top"><?php       echo  $emp_name;                  ?></td>
    <td align="left" valign="top"><?php       echo  $emp_contact;                     ?></td>
    <td align="left" valign="top"><?php      echo  $emp_address;               ?></td>
    <td align="left" valign="top"><?php       echo  $emp_email=$row['emp_email'];               ?></td>
    
    <td align="left" valign="top"><?php       echo  $emp_reference;                ?></td>
  </tr>
  <?php }?>
  <tr><td colspan="8" align="center">TOTAL EMPLOYEE:<?PHP echo $total ; ?></td></tr>
</table> 	 	 	  	 	 	 	 	 	 		 	 	 	 	 	 	
<br />
<?php //require_once('footer.php'); ?>
<?php include('footer.php');?>
