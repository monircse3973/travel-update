<head><title>ONLINE TRAVEL AGENCY SYSTEM::PAYMENT LIST</title></head>
<?php include('header.php');?>
<?php
require_once('connection\connection.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">PAYMENT VIEW</h2>
 <!--  <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="customer_view.php">Customer View&gt;&gt;</a><a href="payment_view.php?costomer_id=<?php $_GET['costomer_id']; ?>">payment view</a></p> -->
<div class="table-responsive">
  <table class="table table-bordered">
 <thead>
   <tr>
 
    <th>PAYMENT ID</th>
    <th>CUSTOMER ID</th>
    <th>PAYMENT TYPE</th>
    <th>AMOUNT</th>
    <th>DESCRIPTION</th>
    <th>DATE OF INSERTION</th>
    <th>INSERTED BY</th>
     <th   class="specail">ACTION </th>
    
  </tr>
 </thead>
 <tbody>
    <?php 
  $sql="select*from payment order by payment_id desc";
  $result=mysqli_query($con,$sql) or die(mysqli_error());
  if(mysqli_num_rows($result)<1)
  {
    echo"<script type='text/javascript'>alert('No payment found');
    document.location='customer_view.php'</script>";
   
  }
  while($row=mysqli_fetch_array($result))
  {     
    $payment_id=$row["payment_id"];
    $costomer_id=$row["costomer_id"];
    $payment_type=$row["payment_type"];
    $amount=$row["amount"];
    $description=$row["description"];
    $date_of_insertion=$row["date_of_insertion"];
    $inserted_by=$row["inserted_by"];
   
  ?>
  <tr>
  
  
  
    <td><?php       echo $payment_id;         ?></td>
    <td><?php       echo $costomer_id;       ?></td>
    <td><?php       echo $payment_type;       ?></td>
    <TD><?php       echo $amount;             ?></td> 
    <TD><?PHP       echo $description;        ?></TD>          
    <td><?php       echo $date_of_insertion;  ?></td>
    <td><?php $cID=$inserted_by; $s=mysqli_query($con,"SELECT * FROM admin WHERE user_id='$cID'");  
  $d=mysqli_fetch_array($s);
   echo $d['username']; ?></td>
     
    <td><a href="payment_edit.php?payment_id=<?php echo $payment_id;?>"><i class="fa fa-pencil" title="Edit Payment"></i></a>&nbsp;&nbsp;<a href="delete.php?payment_id=<?php echo $payment_id ;?>" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash" title="Delete Payment"></i></a></td>
   
  </tr>
  <?php }?>
 </tbody>
  
 
</table> 
</div>

<br />
<a href="javascript:;" style="color:#000"  onClick="window.open('printpayment.php','msgWindow','toolbar=no, scrollbars=no, resizable=no, top=30, left=100, width=1000, height=640')"> Print View </a>
 <?php include('footer.php');?>