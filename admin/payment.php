<head><title>ONLINE TRAVEL AGENCY SYSTEM::ADD PAYMENT</title></head>
<script language="javascript" src="js/validation.js"></script>
<?php 

include('header.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">ADD PAYMENT</h2>
 <div  class="container">
   <div class="row">
     <div class="col-md-4 col-md-offset-3">
       <form name="form1" method="post" action="insert.php" onsubmit="return daily();">
<h2 class="text-center">Payment Info</h2>
<?php  require_once('connection\connection.php');?>

    <label>Customer Id</label>
    <input type="hidden" name="costomer_id" value= <?php echo $_REQUEST['costomer_id'];?> />
  
  <?php $cID=$_REQUEST['costomer_id']; $s=mysqli_query($con,"SELECT * FROM costomer WHERE costomer_id='$cID'");  
  $d=mysqli_fetch_array($s);
   echo $d['full_name']; ?></td>
     
     
    <label>Payment Type</label>
    <select name="payment_type" class="form-control"><option value="-1">-Payment Type-</option><option>Ticket</option><option>Visa</option><option>Other</option></select>
    
    <label>Ammount</label>
    <input type="text" class="form-control" name="amount" />
    
    <label>Description</label>
    <input type="text" class="form-control" name="description" /> <br>
    
   <!--  <td><input type="submit"  name="paymentform" value="submit" /><input type="reset"  value="clear"/></td>
    <td><a href="customer_view.php"><input type="button" value="back to list"></a></td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset> -->
<button type="submit" name="paymentform" class="btn btn-primary">Submit</button>
<button type="reset" name="" class="btn btn-info">Clear</button>
</form>
     </div>
   </div>
 </div>

<?php include('footer.php');?>