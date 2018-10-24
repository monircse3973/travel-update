<?php include('session.php');?>
<?php include('header.php');?>
<h2> From Here you can easly create Daily Expendeture Date to date reports</h2>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <form method="post" name="f1" action="report2.php">
 <!--  <table width="200" border="1">
    <tr>
      <td width="37%">SEARCH START DATE 
        <input name="sdate" type="date" id="sdate" /></td>
      <td width="38%">SEARCH END DATE 
        <input name="edate" type="date" id="edate" /></td>
    </tr>
    <tr class="asad">
    
    <form name="r2" action="report2.php"> <td align="center" valign="top" colspan="2"><input type="submit" name="b2" value="Expence Report" /></td></form>
    
    </tr>
      
  
</table> -->

<label>Search Start Date</label>
<input type="date" name="sdate" class="form-control">
<label>Search End Date</label>
<input type="date" name="edate" class="form-control"> <br>
<form action="report2.php" method="post">
  <!-- <input type="submit" class="btn btn-primary" name="b2" value="Expence Report"> -->
  <button type="submit" class="btn btn-primary" name="b2">Expence Report</button>
</form>
</form>
    </div>
  </div>
</div>
<p>&nbsp;</p>
<br><br><br><br><br>
<?php include('footer.php');?>


