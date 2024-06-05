<head><title>ONLINE TRAVEL AGENCY SYSTEM::TICKET LIST</title></head>
<?php include('header.php');
require_once('connection\connection.php');
$costomer_id=$GET['costomer_id'];
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">TICKET VIEW</h2>
  <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="customer_view.php">Customer View&gt;&gt;</a><a href="ticket_view.php?costomer_id=<?php echo $_GET['costomer_id'];?>">ticket view</a></p>
  
<table width="100%" border="0" align="center">

  <tr>
  
    <td width="52">Ticket Id</td>
    <td width="42">Ticket No</td>
    <TD width="64">Costomer Id</TD>
    <td width="87">Date</td>
    <td width="85">Sector From</td>
    <td width="98">Sector To</td>
    <td width="128">Airline Name</td>
    <td width="102">Airline No</td>
    <td width="172">Date Of Insertion</td>
    <TD   class="specail">ACTION </TD>
  </tr>
  <?php 
  $sql="select*from ticket where costomer_id='$_GET[costomer_id]'";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
  if(mysqli_num_rows($result)<1)
  {
	  echo"<script type='text/javascript'>alert('No ticket found');
	  document.location='customer_view.php'</script>";
	 
  }
  while($row=mysqli_fetch_array($result))
  { 	  	 	 	 	 	 	 	 	 	 		 	 	 	 	
	  $ticket_id=$row["ticket_id"];
	  $ticket_no=$row["ticket_no"];
	  $costomer_id=$row["costomer_id"];
	  $date=$row["date"];
	  $sector_from=$row["sector_from"];
	  $sector_to=$row["sector_to"];
	  $airline_name=$row["airline_name"];
	  $airline_no=$row["airline_no"];
	  $date_of_insertion=$row["date_of_insertion"];
	  $inserted_by=$row["inserted_by"];  	 	 	 	 	 	 	 	
  ?>
  
  <tr>
 
    <td align="left" valign="top"><?php       echo       $ticket_id;?></td>
    <td align="left" valign="top"><?php       echo       $ticket_no;?></td>
    <td align="left" valign="top"><?php       echo          $costomer_id; ?></td>
    <td align="left" valign="top"><?php       echo       $date;?></td>
    <TD align="left" valign="top"><?php       echo       $sector_from;?></td>           
    <td align="left" valign="top"><?php       echo       $sector_to    ;?></td>
    <td align="left" valign="top"><?php       echo       $airline_name  ;?></td>
    <td align="left" valign="top"><?php       echo       $airline_no        ;?></td>
    <td align="left" valign="top"><?php       echo       $date_of_insertion;?></td>
     <td width="219" align="left" valign="top"><a href="ticket_detail.php?ticket_id=<?php echo $ticket_id;?>">&nbsp;&nbsp;&nbsp;<img src="images/icon_view_new.gif" title="View Ticket" /></a><a href="ticket_edit.php?ticket_id=<?php echo $ticket_id;?>">&nbsp;&nbsp;<img src="images/edit.png" title="Edit Ticket" /></a><a href="delete.php?ticket_id=<?php echo $ticket_id ;?>" onclick="return confirm('Are you sure you want to delete?')">&nbsp;&nbsp;<img src="images/delete.png" title="Delet Ticket" /></a></td>
    
  </tr>
  <?php }?>
</table> 

 <?php include('footer.php');?>