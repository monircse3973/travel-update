<head><title>ONLINE TRAVEL AGENCY SYSTEM::Salary LIST</title></head>
<?php include('header.php');?>
<?php
require_once('connection\connection.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">SALARY VIEW</h2>
  
  
<table class="table table-bordered">

  <thead>
    <tr>
  
    <th>Salary Id</th>
    <th>Paid to whom?</th>
    <th>Month</th>
    <th>Amount</td>
    <th>Description</th><?php /*?>
    <TD   class="specail">ACTION </TD><?php */?>
  </tr>
  </thead>

  <tbody>
    <?php 
  $sql="select*from salary where employee='$_GET[emp_name]'";
  $result=mysqli_query($con,$sql) or die(mysqli_error());
  if(mysqli_num_rows($result)<1)
  {
    echo"<script type='text/javascript'>alert('No Salary found');
    document.location='employee_view.php'</script>";
   
  }
  while($row=mysqli_fetch_array($result))
  {                                   
    $salary_id=$row["salary_id"];
    $employee=$row["employee"];
    $month=$row["month"];
    $amount=$row["amount"];
    $description=$row["description"];           
  ?>
  
  <tr>
 
    <td><?php       echo       $salary_id;?></td>
    <td><?php       echo       $employee;?></td>
    <td><?php       echo          $month; ?></td>
    <td><?php       echo       $amount;?></td>
    <td><?php       echo       $description;?></td>           
    
  <?php /*?>   <td width="219" align="left" valign="top"><a href="salary_edit.php?salary_id=<?php echo $salary_id;?>">&nbsp;&nbsp;<img src="images/edit.png" title="Edit Salary" /></a><a href="delete.php?salary_id=<?php echo $salary_id ;?>" onclick="return confirm('Are you sure you want to delete?')">&nbsp;&nbsp;<img src="images/delete.png" title="Delet salary" /></a></td><?php */?>
    
  </tr>
  <?php }?>
  </tbody>
  
</table> 
<br><br><br><br><br><br>

 <?php include('footer.php');?>