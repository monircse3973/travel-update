

<?php require_once('header.php');?>
<?php
    require_once('connection\connection.php');
?>

<link rel="stylesheet" href="css/bar.css" type="text/css" />
<div class="ph">EMPLOYEE VIEW</div>
 <!--  <DIV class="ph2"><a href="index.php">home&gt;&gt;</a><a href="employee_view.php">Employee_view</a></DIV> -->
<div class="table-responsive">
  <table class="table table-bordered">
 <thead>
      <tr>
        <th>Action</th>
        <th>Salry</th>
        <th>Photo</th>
        <th>ID</th>
        <th>Full Name</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Email</th>
        <th>Reference</th>
      </tr>
    </thead>
 <!--  <tr class="header-tr"> -->
<!-- <td width="130" align="center">Action</td>
  <Td align="center" width="160">Salary</a></Td>
 
    <td width="100"  align="center">PHOTO</td>
    <td width="92"  align="center">ID</td>
    <td width="59"  align="center">FULL NAME</td>
    <td width="27"  align="center">CONTACT</td>
    <td width="76"  align="center">ADDRESS</td>
    <td width="92"  align="center">EMAIL</td>
    
    <td align="center">REFERENCE </td> -->
  <!-- </tr>
  <tr>
  <td colspan="9"><hr /></td>
  </tr> -->
  <?php 
  $total=0;
  //RETRIVAL DATA FROM EMPLOYEE TABALE
  $sql="select*from employee";
$result=mysqli_query($con,$sql) or die(mysqli_error());
while($row=mysqli_fetch_array($result))
{   
    $emp_picture=$row['emp_picture']; 
  $emp_id=$row['emp_id'];
  $emp_name=$row['emp_name'];
  $emp_contact=$row['emp_contact'];
  $emp_address=$row['emp_address'];
  $emp_reference=$row['emp_reference'];
  $emp_email=$row['emp_email'];
  $emp_jion=$row['emp_join'];
  $emp_close=$row['emp_close'];
  $total=$total+1;

?>
<tbody>
   <tr>
<td>
  <table>
  <tr>
    <td><a href="employee_detail.php?emp_id=<?php echo $emp_id;?>"><i class="fa fa-eye"></i></a></td> <td><a href="employee_edit.php?emp_id=<?php echo $emp_id?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td> <td><a href="delete.php?action=Delete&emp_id=<?php echo $emp_id ;?>" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></a></td>
  </tr>

  </table>
</td>
            <td>
  <table> 
  <tr>
 <!--  <td width="74" class="asad" >Salary</td> -->
    <td><a href="Salary1.php?emp_name=<?php echo $emp_name;?>"><i class="fa fa-plus" title="add salary"></i></a><a href="salary_view.php?emp_name=<?php echo $emp_name;?>"><i class="fa fa-eye" title="view salary"></i></a></td>
  </tr>
  
</table>
    </td>
  
    <td><?php if ($emp_picture!=""){?><a href="photoupdate.php?emp_id=<?php echo $emp_id;?>"><img src="<?php echo $emp_picture;?>" width="100" height="113" /></a><?php } else {?><a href="photoupdate.php?emp_id=<?php echo $emp_id;?>"><img src="user/default.gif" width="100" height="100" /></a><?php }?></td>
    
    <td><?php       echo  $emp_email=$row['emp_id'];               ?></td>
    <td><?php       echo  $emp_name;                  ?></td>
    <td><?php       echo  $emp_contact;                     ?></td>
    <td><?php      echo  $emp_address;               ?></td>
    <td><?php       echo  $emp_email=$row['emp_email'];               ?></td>
    
    <td><?php       echo  $emp_reference;                ?></td>
  </tr>
  <?php }?>
  
</table>                                    
<br />
<?php //require_once('footer.php'); ?>
<!-- <tr align="center"><td><?PHP  $total ; ?></td></tr> -->
<h3 class="text-center">TOTAL EMPLOYEE: <?php echo $total; ?></h3>

</tbody>
<?php include('footer.php');?>


 