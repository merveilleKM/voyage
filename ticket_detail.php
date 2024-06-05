<head><title>ONLINE TRAVEL AGENCY SYSTEM::TICKET DETAIL</title></head>
<?php include('header.php');?>
<?php require_once('connection\connection.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">TICKET DETAIL</h2>
 <h2 class="ph">TICKET VIEW</h2>
  <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="customer_view.php">Customer View&gt;&gt;</a><a href="ticket_view.php">ticket view</a><a href="ticket_detail.php">ticket detail</a></p>


 <?php 
  $sql="select*from ticket where ticket_id='$_GET[ticket_id]'";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
  while($row=mysqli_fetch_array($result))
  { //	  	 	 	 	 	 	 	 	 	 		 	 	 	 	
	  $ticket_id=$row["ticket_id"];
	  $ticket_no=$row["ticket_no"];
	  $costomer_id=$row["costomer_id"];
	  $date=$row["date"];
	  $sector_from=$row["sector_from"];
	  $sector_to=$row["sector_to"];
	  $airline_name=$row["airline_name"];
	  $airline_no=$row["airline_no"];
	  $date_of_insertion=$row["date_of_insertion"];
	  $inserted_by=$row["inserted_by"];// 
  }
  ?>
<form name="form1" action="ticket_view_all.php" method="post" >
<table width="43%" border="0" align="center">
<tr>
    <td width="14%">&nbsp;</td>
    <td width="33%">TICKET ID:</td>
    <td width="39%"><?php echo $ticket_id;?></td>
    <td width="14%">&nbsp;</td>
  </tr>
  <tr>
    <td width="14%">&nbsp;</td>
    <td width="33%">TICKET NO:</td>
    <td width="39%"><?php echo $ticket_no;?></td>
    <td width="14%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Customer ID</td>
    <td><?php echo $costomer_id;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE:</td>
    <td><?php echo $date;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>SECTOR FROM:</td>
    <td><?php echo $sector_from;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>SECTOR TO:</td>
    <td><?php echo $sector_to;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>AIRLINE NAME:</td>
    <td><?php echo $airline_name;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>AIRLINE NO:</td>
    <td><?php echo $airline_no;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>INSERTION DATE:</td>
    <td><?php echo $date_of_insertion;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>INSERTED BY:</td>
    <td><?php echo $inserted_by;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="back to list" name="ticketform" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
<?php include('footer.php');?>