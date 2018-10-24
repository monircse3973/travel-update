<head><title>ONLINE TRAVEL AGENCY SYSTEM::DAILY EXPENDITURE LIST</title></head>
<?php include('header.php');?>
<?php require_once('connection\connection.php'); ?>

<link rel="stylesheet" href="css/bar.css" type="text/css" />
<form name="form1">
  <h2 class="ph">VIEW VOUCHER</h2>
 <div class="table-responsive">
   <table  class="table table-bordered">

  <thead>
     <tr>
    
    <th> ID</th>
    <th>VOUCHER</th>
    <th>TITLE</th>
    <th>DESCRIPTION</th>
    <th>AMOUNT</th>
    <th>DATE</th>
     <th>FROM CURRENT TO NEXT</th>
    <th>INSERTED BY</th>
    <th>ACTION</th>
  </tr>
  </thead>
  <tbody>
    <?php
$sum=0;
$sql="select*from daily_expenditure";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
  $id=$row["id"];   
  $voucher_no=$row["voucher_no"];   
  $title=$row["title"];   
  $description=$row["description"];   
  $amount=$row["amount"];   
  $date=$row["date"];   
  $inserted_by=$row["inserted_by"];
  $sum=$sum+$row["amount"];
  
?>




  <tr>
    
    <td><?php echo $id;?></td>
    <td><?php echo $voucher_no;?></td>
    <td><?php echo $title;?></td>
    <td><?php echo $description;?></td>
    <td><?php echo $amount;?></td>
    <td><?php echo $date;?></td>
    <td><?php echo $sum;?></td>
    <td><?php $cID=$inserted_by; $s=mysqli_query($con,"SELECT * FROM admin WHERE user_id='$cID'");  
  $d=mysqli_fetch_array($s);
   echo $d['username']; ?></td>
     
     <td><a href="daily_expenditure_edit.php?id=<?php echo $id;?>"><i class="fa fa-eye" title="Edit Document"></i></a>&nbsp;&nbsp;<a href="delete.php?id=<?php echo $id ;?>" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash" title="Delete Document"></i></a></td>
  </tr>
  <?php 
  }?>
</table>
  </tbody>

 </div>

 

<br />
 <a href="javascript:;" style="color:#000"  onClick="window.open('printexpence.php?id=<?php echo $id; ?>','msgWindow','toolbar=no, scrollbars=no, resizable=no, top=30, left=100, width=1000, height=640')"> Print View </a>
</form>
<?php include('footer.php');?>