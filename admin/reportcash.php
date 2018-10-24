<?php include('session.php');?>
<?php include('header.php');?>
<h2>  Create Cash Reports Select Dates You want to create Report </h2>
<!-- <form method="post" name="f1" action="report1.php" style="height:250px">
  <table width="200" border="1">
    <tr>
      <td width="37%">SEARCH START DATE 
        <input name="sdate" type="date" id="sdate" /></td>
      <td width="38%">SEARCH END DATE 
        <input name="edate" type="date" id="edate" /></td>
    </tr>
    <tr class="asad">
    
    <form name="r1" action="report1.php"><td align="center" valign="top" colspan="2"><input type="submit" name="b1" value="Cash Book Report" /></td></form>
    
      </tr>
      
  </form>
</table> -->
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <form method="post" name="f1" action="report1.php">
        <label>Search Start Date</label>
        <input type="date" name="sdate" class="form-control">
        <label>Search End Date</label>
        <input type="date" name="edate" class="form-control"> <br>
        <form name="r1" action="report1.php">
          <button type="submit" name="b1" class="btn btn-primary">Cash Book Report</button>
        </form>
      </form>
    </div>
  </div>
</div>


<p>&nbsp;</p>
<br><br><br><br><br>
<?php include('footer.php');?>