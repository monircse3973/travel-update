<?php include('session.php');?>
<?php include('header.php');?>
<?php include('connection/connection.php'); ?>
<h1> Welcome to Report Creation Page you can easly create reports from here</h1>
<!-- <form method="post" name="f1" action="report1.php">
  <table width="200" border="1">
    <tr>
      <td width="37%">SEARCH START DATE 
        <input name="sdate" type="date" id="sdate" /></td>
      <td width="38%">SEARCH END DATE 
        <input name="edate" type="date" id="edate" /></td>
    </tr>
    <tr class="asad">
    
    <form name="r1" action="report1.php"><td align="center" valign="top"><input type="submit" name="b1" value="Cash Book Report" /></td></form>
    <form name="r2" action="report2.php"> <td align="center" valign="top"><input type="submit" name="b2" value="Expence Report" /></td></form>
    <form name="r3" action="report3.php"> <td width="25%" align="center" valign="top"><input name="b3" type="submit" id="b3" value="Salary Report" /></td></form>
      </tr>
      
  </form>
</table> -->
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <form action="report1.php" name="f1" method="post">
        <label>Search Start Date</label>
        <input type="date" name="sdate" class="form-control">
        <label>Search End Date</label>
        <input type="date" name="edate" class="form-control"><br>
        <form action="report1.php" name="r1">
          <button type="submit" name="b1" class="btn btn-primary btn-sm">Cash Book Report</button>
          <button type="submit" name="b1" class="btn btn-info btn-sm">Cash Book Report</button>
          <button type="submit" name="b1" class="btn btn-success btn-sm">Cash Book </button>
        </form>
      </form>
    </div>
  </div>
</div>

<p>&nbsp;</p>
<br><br><br><br>
<?php include('footer.php');?>