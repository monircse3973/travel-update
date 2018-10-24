<head><title>ONLINE TRAVEL AGENCY SYSTEM::PAYMENT EIDT</title></head>
<script language="javascript" src="js/validation.js"></script>
<?php include('header.php');?>
<?php    require_once('connection\connection.php') ?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">EDIT PAYMENT</h2>
  
  
<?php 
  $sql= "select*from payment where payment_id=$_GET[payment_id]";
  $result=mysqli_query($con,$sql) or die(mysqli_error());
  while($row=mysqli_fetch_array($result))
  {	 	 	
	  $payment_id="$row[payment_id]";
	  $costomer_id=$row["costomer_id"];
	  $payment_type=$row["payment_type"];
	  $amount=$row["amount"];
	  $description=$row["description"];
	  $date_of_insertion=$row["date_of_insertion"];
	  $inserted_by=$row["inserted_by"];
  }
	
	?>
     <div class="container">
       <div class="row">
         <div class="col-md-4 col-md-offset-3">
           <form name="form1" method="post" action="update.php"  onsubmit="return payment_validate();">
<input type="hidden" name="payment_id" value="<?php echo $payment_id;?>" />

    <label>Customer Id</label>
    <input type="hidden" name="costomer_id" value="<?php echo $costomer_id;?>" /><?php echo $costomer_id;?></td>
    
    
    <label>Payment Type</label>
    <select name="payment_type" class="form-control"><option <?php if($payment_type=='-1'){echo 'selected="selected"'; } ?> value="-1">-Payment Type-</option><option <?php if($payment_type=='TICKET'){echo 'selected="selected"'; } ?> value="TICKET">Ticket</option><option <?php if($payment_type=='VISA'){echo 'selected="selected"'; } ?> value="VISA">Visa</option><option <?php if($payment_type=='OTHER'){echo 'selected="selected"'; } ?> value="OTHER">Other</option></select>
   
   <label>Ammount</label>
    <input type="text" class="form-control" name="amount" value="<?php echo  $amount;?>" /> </td>
    
    <label>Description</label>
    <input type="text" class="form-control" name="description" value="<?php echo $description; ?>" /></td>
    
    <label>DATE OF INSERTION:</label>
    <input type="text" name="date_of_insertion" class="form-control" value="<?php echo $date_of_insertion;?>" /><br>
    
    <!-- <input type="submit"  name="paymentform" value="save" /></td> -->
    <button type="submit" name="paymentform" class="btn btn-primary">Save</button>
    <!-- <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table> -->
</form> 

         </div>
       </div>
     </div>

<?php include('footer.php');?>
