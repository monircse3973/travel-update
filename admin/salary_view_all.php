<head><title>ONLINE TRAVEL AGENCY SYSTEM::DEPENDENT LIST</title></head>
<?php include('header.php');?>
<?php
require_once('connection\connection.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">Salary VIEW</h2>
  <!-- <p class="ph2"></p> -->
   
   <div class="table-responsive">
     <table class="table table-bordered">
<thead>
  <tr>

    <th width="50">Salary Id</th>               
    <th width="50"> Month</th>
    <th width="60">Amount</th>
     <th width="179">Description</th>
     <th width="150">Paid To whom? </th>
      <th width="99"> Date</th>
     <th width="99"> Inserted By</th>
    <?php /*?> <TD class="specail">ACTION </TD><?php */?>
  </tr>
</thead>
  
  <?php 
  $sql="select*from salary";
  $result=mysqli_query($con,$sql) or die(mysqli_error());
  if(mysqli_num_rows($result)<1)
  {
    echo"<script type='text/javascript'>alert('No Salary found');
    document.location='employee_view.php'</script>";
   
  }
  while($row=mysqli_fetch_array($result))
  {
    $salary_id=$row["salary_id"];                
    $month=$row["month"];
    $amount=$row["amount"];
    $description=$row["description"];
     $employee=$row["employee"];
      $date=$row["date"];
      $inserted_by=$row["inserted_by"];
   
   
  ?>
  
  <tr>
  
 
  
    <td><?php echo $salary_id;?></td>
    
    <td><?php       echo $month;      ?></td>
    <TD><?php       echo $amount;?></td>  
           
    <td><?php       echo $description; ?></td>
    <td><?php       echo $employee; ?></td>
     <td><?php       echo $date; ?></td>
   
      <td><?php $cID=$inserted_by; $s=mysqli_query($con,"SELECT * FROM admin WHERE user_id='$cID'");  
  $d=mysqli_fetch_array($s);
   echo $d['username']; ?></td>
       
    <?php /*?><td width="91">
    <a href="salary_edit.php?salary_id=<?php echo $salary_id;?>">&nbsp;&nbsp;<img src="images/edit.png" /></a>
    <a href="delete.php?salary_id=<?php echo $salary_id;?>" onclick="return confirm('Are you sure you want to delete?')">&nbsp;<img src="images/delete.png" /></a></td>
  </tr><?php */?>
  <?php }?>
</table> 
   </div>


<a href="javascript:;" style="color:#000"  onClick="window.open('printsalary.php','msgWindow','toolbar=no, scrollbars=no, resizable=no, top=30, left=100, width=1000, height=640')"> Print View </a>
 <?php include('footer.php');?>