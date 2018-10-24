<head><title>ONLINE TRAVEL AGENCY SYSTEM::TICKET EDIT</title></head>
<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
<script language="javascript" src="js/validation.js"></script>
<?php include('header.php');?>
<?php require_once('connection\connection.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">TICKET EIDT</h2>
  
  
 <?php 
  $sql="select*from ticket where ticket_id=$_GET[ticket_id]";
  $result=mysqli_query($con,$sql) or die(mysqli_error());
  while($row=mysqli_fetch_array($result))
  {   	 	 	 	 	 	 	 	 	 		 	 	 	 	
	  $ticket_id=$row["ticket_id"];
	  $ticket_no=$row["ticket_no"];
	  $costomer_id=$row["costomer_id"];
	  $date=$row["date"];
	  $sector_from=$row["sector_from"];
	  $sector_to=$row["sector_to"];
	  $pnr_no=$row["pnr_no"];
	  $airline_name=$row["airline_name"];
	  $airline_no=$row["airline_no"];
	  $date_of_insertion=$row["date_of_insertion"];
	  $inserted_by=$row["inserted_by"]; 
  }
  ?>
  
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <form name="form1"  action="update.php" method="post" onsubmit="return ticket_validate();" >
<input type="hidden" name="ticket_id" value="<?php echo $ticket_id;?>" />

<table class="table table-bordered">
  <tr>
    
   <label>TIcket No</label>
    <input type="text" class="form-control" name="ticket_no"  value="<?php echo $ticket_no;?>"/>
   
    <label>Customer ID</label>
    <input type="hidden" name="costomer_id" value="<?php echo $costomer_id;?>" /> <?php echo $costomer_id;?>
    
   <label>Date</label>
    <input type="text" class="form-control" name="date" value="<?php echo $date;?>" class="datepicker"/>

   <label>SECTOR FROM:</label>
    <input type="text" class="form-control" name="sector_from" value="<?php echo $sector_from;?>"/>
    
    <label>SECTOR TO:</label>
    <input type="text" name="sector_to" class="form-control" value="<?php echo $sector_to;?>"/>
    
   <label>PNR NO:</label>
    <input type="text" class="form-control" name="pnr_no" value="<?php echo $pnr_no;?>"/>
    
    <label>AIRLINE NAME:</label>
    <input type="text" class="form-control" name="airline_name"  value="<?php echo $airline_name;?>"/>
    
    <label>AIRLINE NO:</label>
    <input type="text" class="form-control" name="airline_no"  value="<?php echo $airline_no;?>"/><br>
    
   <!--  <input type="submit" value="save" name="ticketform" /> <a href="ticket_view.php"><input type="button" name="ticketform" value="back to list" /></a> -->
   <button type="submit" name="ticketform" class="btn btn-primary">Save</button>
   <button type="button" name="ticketform" class="btn btn-info">Back TO List</button>
    
</form>
    </div>
  </div>
</div>
  

