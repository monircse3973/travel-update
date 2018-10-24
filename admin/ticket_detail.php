<head><title>ONLINE TRAVEL AGENCY SYSTEM::TICKET DETAIL</title></head>
<?php include('header.php');?>
<?php require_once('connection\connection.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">TICKET DETAIL</h2>
 <h2 class="ph">TICKET VIEW</h2>
  

 <?php 
  $sql="select*from ticket where ticket_id='$_GET[ticket_id]'";
  $result=mysqli_query($con,$sql) or die(mysqli_error());
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
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <form name="form1" action="ticket_view_all.php" method="post" >
<table class="table table-bordered">
  <thead>
    
  </thead>
  <tbody>
    <tr>
    
    <td>TICKET ID:</td>
    <td><?php echo $ticket_id;?></td>
   
  </tr>
  <tr>
    
    <td>TICKET NO:</td>
    <td><?php echo $ticket_no;?></td>
    
  </tr>
  <tr>
    
    <td>Customer ID</td>
    <td><?php echo $costomer_id;?></td>
    
  </tr>
  <tr>
    
    <td>DATE:</td>
    <td><?php echo $date;?></td>
    
  </tr>
  <tr>
    
    <td>SECTOR FROM:</td>
    <td><?php echo $sector_from;?></td>
    
  </tr>
  <tr>
   
    <td>SECTOR TO:</td>
    <td><?php echo $sector_to;?></td>
    
  </tr>
  <tr>
    
    <td>AIRLINE NAME:</td>
    <td><?php echo $airline_name;?></td>
    
  </tr>
  <tr>
    
    <td>AIRLINE NO:</td>
    <td><?php echo $airline_no;?></td>
    
  </tr>
  <tr>
   
    <td>INSERTION DATE:</td>
    <td><?php echo $date_of_insertion;?></td>
   
  </tr>
  <tr>
    
    <td>INSERTED BY:</td>
    <td><?php echo $inserted_by;?></td>
    
  </tr>
  <tr>
   
   
    
  </tr>
  </tbody>

</table>
 <!-- <input type="submit" value="back to list" name="ticketform" /> -->
 <button type="submit" class="btn btn-info" name="ticketform">Back To List</button>
</form>
      </div>
    </div>
  </div>

<?php include('footer.php');?>