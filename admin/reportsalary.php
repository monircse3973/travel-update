<?php include('session.php');?>
<?php include('header.php');?>
<h2> From Here You can easly create Salary Reports Date wise </h2>
<!-- <form method="post" name="f1" action="report3.php" style="height:250px">
  <table width="200" border="1">
    <tr>
      <td width="37%">SEARCH START DATE 
        <input name="sdate" type="date" id="sdate" /></td>
      <td width="38%">SEARCH END DATE 
        <input name="edate" type="date" id="edate" /></td>
    </tr>
    <tr class="asad">

    <form name="r3" action="report3.php"> <td width="25%" align="center" valign="top" colspan="2"><input name="b3" type="submit" id="b3" value="Salary Report" /></td></form>
      </tr>
      
  </form>
</table> -->
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <form method="post" name="f1" action="report3.php">
      <label>Search Start Date</label>
      <input type="date" name="sdate" class="form-control">
      <label>Search End Date</label>
      <input type="date"  name="edate" class="form-control"> <br>
      <form name="r3" action="report3.php">
        <button type="submit" name="b3" class="btn btn-primary">Salary Report</button>
      </form>
    </form>
    </div>
  </div>
</div>


<p>&nbsp;</p>
<br><br><br><br><br>
<?php include('footer.php');?>