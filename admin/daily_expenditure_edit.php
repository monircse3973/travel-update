<head><title>ONLINE TRAVEL AGENCY SYSTEM::DAILY EXPENDITURE EDIT</title></head>
<script language="javascript" src="js/validation.js"></script>
<?php include('header.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">EDIT VOUCHER</h2>
 <?php  include('connection\connection.php');?>
<?php
$sql="select*from daily_expenditure where id=$_GET[id]";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$id =$row["id"];
	$voucher_no=$row["voucher_no"];
	$title=$row["title"];
	$description=$row["description"];
	$amout=$row["amount"];
	$date=$row["date"];
	$inserted_by=$row["inserted_by"];	 	 	 	 	
}
?>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <form action="update.php" method="post" name="form1" onsubmit="return daily();" >
<input type="hidden" name="id" value="<?php echo $id; ?>" />

    <label>Voucher:</label>
    <input type="text" class="form-control" name="voucher_no" value="<?php echo $voucher_no;?>"/></td>
    
    <label>Title:</label>
    <input type="text" class="form-control" name="title"  value="<?php echo $title; ?>"/>
    <label>Designation</label>
    <input type="text" class="form-control" name="description" value="<?php echo $description; ?>"/>

   <label>Amount:</label>
    <input type="text" class="form-control" name="amount" value="<?php echo $amout;?>"/><br>
   <!--  <td><input type="submit" value="submit" name="daily_expenses"></td>
     <td><input type="reset" value="Clear"></td>
    <td>&nbsp;</td>
  </tr>
</table> -->
<button type="submit" name="daily_expenses" class="btn btn-primary">Submit</button>
<button type="reset" class="btn btn-danger">Clear</button>
</form>
    </div>
  </div>
</div>


<?php include('footer.php'); ?>
