
<?php include('header.php');?>
<?php include('connection/connection.php');?>
 <link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">SEARCH EMPLOYEE</h2>
<div class="ph2"><a href="index.php">home&GT;&gt;</a><a href="employee_search.php">Employee search</a></div>

<?php


if(isset($_POST['search']))

{
	$tab="<table width='300' border='0'><tr class='header-tr'><td align='center'>Action</td><td align='center'>Photo</td><td align='center'>Name</td><td align='center'>Email</td><td align='center'>Contact No</td><td align='center'>Manipulation</td></tr>";
	$emp_name=$_POST["emp_name"];
	$a=trim($emp_name);//avoid extra spaces
	
$sql="select*from employee where emp_name like '$a%'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num>=1 and $a!="")	//avoid null condition
{
while($res=mysqli_fetch_array($result))
{
	$emp_id=$res["emp_id"];
	$emp_picture=$res["emp_picture"];
$emp_name=$res["emp_name"];
$emp_contact=$res['emp_contact'];
$emp_email=$res["emp_email"];
$tab.="<tr class='header-tr'><td ><table border='1'> 
<tr ><td>Salary</td><td><a href='salary.php?emp_id=$emp_id'><img src='images/file_add.png' width='20' height='20' title'add salary'/></a><a href='salary_view.php?emp_id=$emp_id'><img src='images/icon_view_new.gif' title='View salary' /></a></td></tr> 

 <tr><td>Document</td><td><a href='document.php?emp_id=$emp_id'><img src='images/file_add.png' width='20' height='20' alt='' title'add document'/></a><a href='employee_view.php?emp_id=$emp_id'><img src='images/icon_view_new.gif' title='View document' /></a></td></tr> </table></td><td width=100 height=100 align='center'><img src='$emp_pic' width=100 height=100/> </td><td align='center'>$emp_name</td><td align='center'>$emp_contact</td><td align='center'>$emp_address</td><td>
 
 <table><tr><td><a href='employee_detail.php?emp_id=$emp_id'><img src='images/icon_view_new.gif' title='View employee' /></a></td> <td align='left' valign='top'><a href='employee_edit.php?emp_id= $emp_id'><img src='images/edit.png' title='Edit employee' /></a></td> <td align='left' valign='top'><a href='delete.php?emp_id= $emp_id' onclick='return confirm('Are you sure you want to delete?')'><img src='images/delete.png' title='Delete employee' /></a></td></tr></table></tr>";
}
$tab.='</table>';//table should be end othersise it will not work.
echo $tab;

}else
{
	echo'<div style="color:red" >Not found</div>';
}
}
else
{
?>

<form name="form1" action="employee_search.php" method="post">
Employee Name:<input type="text" name="employee_name" />
<input type="submit" value="search" name="search" />
</form>
<?php }?>
<?php include('footer.php');?>