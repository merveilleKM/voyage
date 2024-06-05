
<?php include('session.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONLINE TRAVEL AGENCY SYSTEM</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
<div id="header"></div>
<div id="cssmenu">
<ul>
   <li><a href='index.php'><span>Home</span></a></li>
   <li class="has-sub"><a href=""><span>Employee</span></a>
   <ul>
    <li class="has-sub"><a href="employee.php"><span>New Employee</span></a></li>
   <li class="has-sub"><a href="employee_view.php"><span>Show Employee</span></a></li>
</ul></li>
   
   <li class="has-sub"><a href=""><span>Ticket</span></a>
   <ul>
    <li class="has-sub"><a href="customer.php"><span>New Customer</span></a></li>
    <li class="has-sub"><a href="customer_search_ticket.php"><span>Add Ticket</span></a></li>
     <li class="has-sub"><a href="customer_search_payment.php"><span>Add Payment</span></a></li>
     <li class="has-sub"><a href="customer_search_doc.php"><span>Add Document</span></a></li>
        <li class="has-sub"><a href="customer_view.php"><span>Show Customers</span></a></li>
       <li class="has-sub"><a href="customer_search.php"><span>Search Customer</span></a></li>
     
   
   
</ul></li>
   
   
  <li class="has-sub"><a href=""><span>Expences</span></a>
  <ul>
  <li class="has-sub"><a href="daily_expenditure.php"><span>New Voucher</span></a>
   <li class="has-sub"><a href="daily_expenditure_view.php"><span>Show Voucher</span></a></li>
   <li class="has-sub"><a href="salary1.php"><span>Add salary</span></a>
   <li class="has-sub"><a href="salary_view_all.php"><span>show Salaries</span></a>
</ul></li>
   


 <li class="has-sub"><a href=""><span>Reports</span></a>
   <ul>
   
    <li class="has-sub"><a href="reportexpence.php"><span>Expence</span></a></li>
    <li class="has-sub"><a href="reportcash.php"><span>Cash</span></a></li>
    <li class="has-sub"><a href="reportsalary.php"><span>Salary</span></a></li>
 
   
   
    <li class="has-sub"><a href="payment_view_all.php"><span>Payments</span></a></li>
   <li class="has-sub"><a href="ticket_view_all.php"><span>Tickets</span></a></li>
   <li class="has-sub"><a href="document_view_all.php"><span>Documents</span></a></li>
   
   <li class="has-sub"><a href="report.php"><span>Create Reports</span></a></li>
</ul></li>



   
   

   <li class="has-sub"><a href="#"><span>Search </span></a>
        <ul>
        
       <li class="has-sub"><a href="customer_search.php"><span>Search Customer</span></a></li>
 

   <li class="has-sub"><a href="daily_expenditure_search.php"><span>Search Voucher</span></a></li>
       </ul><!--end of sub menu-->
   </li>
   <li class="has-sub"><a href="#"><span>Total</span></a>
   <ul>
   <li class="has-sub"><a href="total.php?tc=tc"><span>Customers</span></a></li>
   <li class="has-sub"><a href="total.php?tt=tt"><span>Tickets</span></a></li>
   <li class="has-sub"><a href="total.php?tp=tp"><span>Payments</span></a></li>
   <li class="has-sub"><a href="total.php?tv=tv"><span>Vouchers</span></a></li>
   <li class="has-sub"><a href="total.php?te=te"><span>Employee</span></a></li>
   </ul>
   </li>
   
    <li class="has-sub"><a href="#"><span>Website</span></a>
        <ul>
   <li class="has-sub"><a href="../index.php"><span>ALMOQADAS.com</span></a></li>
   <li class="has-sub"><a href="artical.php"><span>Insert Artical</span></a></li>
   <li class="has-sub"><a href="artical_view.php"><span>Show Artical</span></a></li>
   <li class="has-sub"><a href="contact_view.php"><span>view Contact</span></a></li>
     </ul><!--end of sub menu-->
   </li>
   
   <li class="has-sub"><a href="#"><span>Account settings</span></a>
   <ul>
   <li class="has-sub"><a href="new_admin.php"><span>New Admin</span></a></li>
     <li class="has-sub"><a href="show_all_admin.php"><span>All Admins</span></a></li>
   <li class="has-sub"><a href="passwordchange.php"><span>Change password</span></a></li>
   <li class="has-sub"><a href="logout.php"><span>Logout</span></a></li>
   </ul>
  
</div>

<div id="contentarea" style="background-color:#CCC;">
