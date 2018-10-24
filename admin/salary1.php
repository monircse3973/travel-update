<head><title>ONLINE TRAVEL AGENCY SYSTEM::ADD DEPENDENT</title></head>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
<?php include('header.php');?>
<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
<script language="javascript" src="js/validation.js"></script>

<h2 class="ph">ADD SALARY</h2>
  <p class="ph2">&nbsp;</p>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-3">
        <form name="form1" action="insert.php" method="post" onsubmit="return salary_validate();">
<fieldset>
<legend>Salary Info
</legend>

    
   <label>Employee Name</label>
   <select name="employee" id="employee" class="form-control">
    <option value="Selectemp">-Select Emloyee-</option>
<?php include("connection/connection.php");$sql=mysqli_query($con,"select emp_name from employee") or die(mysqli_error()); while($row=mysqli_fetch_array($sql)){ ?>
<option><?php echo $row['emp_name']; ?> </option> 
<?php } ?>

</select>
     
    <label>Month</label>
    <select name="month" id="month" class="form-control">
    <option value="-1">-Select Month-</option>
    <option value="jan">jan</option> 
    <option value="feb">feb</option> 
    <option value="mar">mar</option> 
    <option value="apr">apr</option> 
    <option value="may">may</option> 
    <option value="june">june</option> 
    <option value="july">july</option> 
    <option value="aug">aug</option> 
    <option value="sep">sep</option> 
    <option value="oct">oct</option> 
    <option value="nov">nov</option> 
    <option value="dec">dec</option>    
    </select>
 
    <label>Ammout</label>
    <input name="amount" class="form-control" type="text" id="amount"/>
   
    <label>Description</label>
    <input name="description" class="form-control" type="text" id="desc" /> <br>

    <input name="salaryform" class="btn btn-primary" type="submit" id="salaryform" value="submit" /><input type="reset" class="btn btn-info" name="reset" value="clear" />
    <a href="salary_view.php"><input type="button" class="btn btn-danger" value="back to list"></a>

</fieldset>

</form>
      </div>
    </div>
  </div>


<?php include('footer.php');?>