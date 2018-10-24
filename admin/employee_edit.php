<head><title>ONLINE TRAVEL AGENCY SYSTEM::EMPLOYEE EDIT</title></head>
<link rel="stylesheet" href="css/styles.css" type="text/css"/>
<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
 <script src="js/validation.js" type="text/javascript"></script>
<?php include('header.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">EMPLOYEE EDIT</h2>
  
<?php
require_once('connection\connection.php');
?>

<?php
  $sql="select * from employee where emp_id='$_GET[emp_id]'";
$result=mysqli_query($con,$sql) or die(mysqli_error());
while($row=mysqli_fetch_array($result))
{
	 
	$emp_id=$row['emp_id'];
	$emp_name=$row['emp_name'];
	$emp_contact=$row['emp_contact'];
	$emp_address=$row['emp_address'];
	$emp_reference=$row['emp_reference'];
	$emp_email=$row['emp_email'];
	$emp_join=$row['emp_join'];
	$emp_close=$row['emp_close'];;
	
}
?>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <form name="form1" method="post" action="update.php?action=updateEmp"enctype="multipart/form-data">
<input type="hidden" name="emp_id" value="<?php echo $emp_id; ?>" />

<h2 class="text-center">Personal Infos</h2>
<table width="100%" border="0" align="center">


  
   <label>Full Name</label>
    <input type="text" name="emp_name" class="form-control"  value="<?php echo $emp_name ;?>"/>
  
 
   <label>Employee Contact</label>
    <input type="text" name="emp_contact" class="form-control" value="<?php echo $emp_contact;?>"/>
    
  
    <label>Address</label>
    <input type="text" name="emp_address"  class="form-control" value="<?php echo $emp_address;?>"/> 
 <label>Reference</label>
    <input type="text" name="emp_reference" class="form-control" value="<?php echo $emp_reference;?>"/>
  
    <label>Email</label>
    <input type="text"  name="emp_email" class="form-control" value="<?php echo $emp_email;?>"/>
    
  
  <label>Join Date</label>
    <input type="text" name="emp_join" class="form-control" value="<?php echo $emp_join;?>"/> 
   
    <label>Employee Leaving</label>
    <input type="text" name="emp_close" class="form-control"  value="<?php echo $emp_close;?>"/><br>
  
   <!--  <input type="submit" value="submit" name="employeeform" /><a href="employee_view.php"><input type="button" value="back to list" /></a>
 -->
 <button type="submit" name="employeeform" class="btn btn-primary">Submit</button>
 <a href="employee_view.php"><button type="button" class="btn btn-info">Back To List</button></a>
</form>


    </div>
  </div>
</div>


