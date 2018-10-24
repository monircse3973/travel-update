<head><title>ONLINE TRAVEL AGENCY SYSTEM::ADD CUSTOMER</title></head>
<?php require('header.php'); ?>


<link href="../onlinetravelagency/admin/datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="../onlinetravelagency/admin/datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="../onlinetravelagency/admin/datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="../onlinetravelagency/admin/datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="../onlinetravelagency/admin/datepicker/core.js" type="text/javascript"></script>
  <script src="../onlinetravelagency/admin/js/validation.js"></script>
  <link rel="stylesheet" href="../onlinetravelagency/admin/css/bar.css" type="text/css" />
  <style>
  .ph2
  {
	  
	  background:#cccccc;
	  font-family:Georgia, "Times New Roman", Times, serif;
	  font-size:9px;
	  text-align:left;
	  height:auto;
	  margin:0 0 0 0;
	  
  }
  </style>

<!--   <div class="ph2"><a href="index.php">FELL THE FORM</a></div>
  
  <form name="form1" method="post" action="employee_insert.php" enctype="multipart/form-data" onsubmit="return validate();" style="background-color:#cccccc;" >
  <fieldset>
  <legend>PERSONAL INFROMATION</legend>
<table width="100%" border="0" align="center">

  
  
<tr>
    <td width="8%">&nbsp;</td>
    <td width="21%">PHOTO</td>
    <td width="23%"><img src="images/profile.jpg" width="81" height="81"/><br /><input type="file"  name="userfile" /></td>
    <td width="48%">&nbsp;</td>
  </tr>
  <tr>
    <td width="8%">&nbsp;</td>
    <td width="21%" >FULL NAME:</td>
    <td width="23%"><input name="emp_name" type="text" id="emp_name" required="required" /^[a-zA-Z ]+$/;   /></td>
    <td width="48%">&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>CONTACT NUMBER:</td>
    <td><input name="emp_contact" type="text" id="emp_contact" required="required" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>EMAIL:</td>
    <td><input name="emp_email" type="text" id="emp_employee" required="required" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>ADDRESS:</td>
    <td><input name="emp_address" type="text" id="emp_address" required="required" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>REFRENCE:</td>
    <td><input name="emp_reference" type="text" id="emp_reference" required="required" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>JOIN DATE:</td>
    <td><input name="emp_join" type="date" id="emp_join" required="required" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>CLOSEING DATE:</td>
    <td><input name="emp_close" type="date" id="emp_close" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DESCRIPTION:</td>
    <td><input name="emp_desc" type="text" id="emp_desc" /></td>
    <td>&nbsp;</td>
  </tr>
  </table>
  </fieldset>
  <fieldset>
    <td>&nbsp;</td>
    <td><input type="submit" value="submit" name="employeeform" /><input type="reset" value="clear" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>

</form> -->
 <div class="container">
   <div class="row">
     <div class="col-md-4 col-md-offset-3  text-center">
       <h2>ADD EMPLOYEE</h2>
     </div>
   </div>
   <div class="row">
     <div class="col-md-4 col-md-offset-4">
       <h4>Fill the Form</h4>
       <h5>Personal Information</h5>
     </div>
   </div>
   <div class="row">
     <div class="col-md-6 col-sm-6 col-xs-6 col-xm-6 col-md-offset-2">
       <form action="employee_insert.php" method="post" name="form1" enctype="multipart/form-data" onsubmit="return validate();">
        <label>Photo</label>
         <input type="file" name="userfile" class="form-control">
         <label>Full Name</label>
         <input type="text" name="emp_name" required="required" /^[a-zA-Z ]+$/; class="form-control">
         <label>Contact Number</label>
         <input type="number" name="emp_contact" class="form-control">
         <label>Email</label>
         <input type="email" name="emp_email" class="form-control">
         <label>Address</label>
         <input type="text" name="emp_address" class="form-control">
         <label>Reference</label>
         <input type="text" name="emp_reference" class="form-control">
         <label>Join Date</label>
         <input type="date" name="emp_join" class="form-control">
         <label>Closing Date</label>
         <input type="date" name="emp_close" class="form-control">
         <label>Description</label>
         <input type="text" name="emp_desc" class="form-control"><br>
         <button type="submit" class="btn btn-primary" name="employeeform">Submit</button>
         <button type="reset" class="btn btn-info" name="button">Reset</button>
        </form>
     </div>
   </div>
 </div>
 <?php include('footer.php');?>
