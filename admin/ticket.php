<head><title>ONLINE TRAVEL AGENCY SYSTEM::ADD TICKET</title></head>
<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
<script language="javascript" src="js/validation.js"></script>
<?php include('header.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">ADD TICKET</h2>
  
 <?php  require_once('connection\connection.php');?>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <form name="form1" action="insert.php" method="post"  onsubmit="return ticket_validate();">


   <label>Ticket No</label>
    <input type="text" class="form-control" name="ticket_no" />
    
    
    <label>CUSTOMER NAME</label>
    <input type="hidden" name="costomer_id" value="<?php echo $_REQUEST['costomer_id']; ?>" />
  
  <?php $cID=$_REQUEST['costomer_id']; $s=mysqli_query($con,"SELECT * FROM costomer WHERE costomer_id='$cID'");  
  $d=mysqli_fetch_array($s);
   echo $d['full_name']; ?>
    
    <label>Date</label>
    <input type="text" class="datepicker form-control" name="date" /></td>
    
    <label>SECTOR FROM:</label>
    <input type="text" class="form-control" name="sector_from" />
    
    <label>SECTOR TO:</label>
    <input type="text" class="form-control" name="sector_to" />
    
   <label>AIRLINE NAME:</label>
    <input type="text" class="form-control" name="airline_name" />
    
    <label>PNR NO:</label>
    <input type="text" class="form-control" name="pnr_no" />
    
    <label>AIRLINE NO:</label>
    <input type="text" class="form-control" name="airline_no" /> <br>
    
    <!-- <input type="submit" value="submit" name="ticketform" /><input type="reset" name="clear" value="clear" /></td>
    <td><a href="customer_view.php"><input type="button" value="back to list"></a></td>
    <td>&nbsp;</td> -->
    <button type="submit" name="ticketform" class="btn btn-primary">Submit</button>
    <button type="reset" name="clear" class="btn btn-danger">Clear</button>
    <a href="customer_view.php"><button type="button" class="btn btn-info">Back To List</button></a>
  
</form>
    </div>
  </div>
</div>

<?php include('footer.php');?>