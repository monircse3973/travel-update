<head><title>ONLINE TRAVEL AGENCY SYSTEM::TICKET LIST</title></head>
<?php include('header.php');?>
<?php
require_once('connection\connection.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">TICKET VIEW</h2>
 <!--  -->
  <div class="table-responsive">
    <table class="table table-bordered">

  <thead>
    <tr>
  
    <th>Ticket Id</th>
    <th>Ticket No</th>
    <th>Costomer Name</th>
    <th>Date</th>
    <th>Sector From</th>
    <th>Sector To</th>
    <th>Airline Name</th>
    <th>Airline No</th>
    <th>Date Of Insertion</th>
    <th>ACTION </th>
  </tr>
  </thead>
  <tbody>
    <?php 
  $sql="select*from ticket";
  $result=mysqli_query($con,$sql) or die(mysqli_error());
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
 
    <td><?php       echo       $ticket_id;?></td>
    <td><?php       echo       $ticket_no;?></td>
    <td><?php       echo          $costomer_id; ?></td>
    <td><?php       echo       $date;?></td>
    <td><?php       echo       $sector_from;?></td>           
    <td><?php       echo       $sector_to    ;?></td>
    <td><?php       echo       $airline_name  ;?></td>
    <td><?php       echo       $airline_no        ;?></td>
    <td><?php       echo       $date_of_insertion;?></td>
     <td><a href="ticket_detail.php?ticket_id=<?php echo $ticket_id;?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-eye" title="View Ticket"></i></a><a href="ticket_edit.php?ticket_id=<?php echo $ticket_id;?>">&nbsp;&nbsp;<i class="fa fa fa-pencil" title="Edit Ticket"></i></a><a href="delete.php?ticket_id=<?php echo $ticket_id ;?>" onClick="return confirm('Are you sure you want to delete?')">&nbsp;&nbsp;<i class="fa fa-trash" title="Delete Ticket"></i></a></td>
    
  </tr>
  <?php }?>
  </tbody>
  
</table> 
  </div>


<a href="javascript:;" style="color:#000"  onClick="window.open('printticket.php','msgWindow','toolbar=no, scrollbars=no, resizable=no, top=30, left=100, width=1000, height=640')"> Print View </a>

 <?php include('footer.php');?>