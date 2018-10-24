<head><title>ONLINE TRAVEL AGENCY SYSTEM::DOCUMENT LIST</title></head>
<?php   include('header.php');?>
<?php
include('connection/connection.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">DOCUMENT VIEW</h2>
  

  
<div class="container">
  <div class="row">

   <div class="table-responsive">
      <div class="col-md-4 col-md-offset-3">
      <table class="table table-bordered">
   <thead>
     <tr>
   
    <th>Document id</th>
    <th>Customer id</th>
    <th>Document type</th>
    <th>Document</th>
    <th>FULL VIEW/PRINT</th>
    <th>Inserted_by</th>
     <th>ACTION</th>
  </tr>
   </thead>
  
 <tbody>
   <?php 
$sql="select*from document where costomer_id=$_GET[costomer_id]";
$result=mysqli_query($con,$sql) or die(mysqli_error());
if(mysqli_num_rows($result)<1)
  {
    echo"<script type='text/javascript'>alert('No document found');
    document.location='customer_view.php'</script>";
   
  }
while($row=mysqli_fetch_array($result))
{
$document_id=$row["document_id"];   
$costomer_id=$row["costomer_id"];
$document_type=$row["document_type"];
$document=$row["document"];
$inserted_by=$row["inserted_by"];
?>

<tr>
   
    <td><?php echo "$document_id";?></td>
    <td><?php echo "$costomer_id";?></td>
    <td><?php echo "$document_type";?></td>
    <td><a href="document_update.php?document_id=<?php echo $document_id;?>"><img src="<?php echo $document;?>" width="100" height="113" /></a></td>
    <td><a href="document_print.php?document=<?php echo $document; ?>">FULL VIEW/PRINT</a></td>
    <td><?php echo "$inserted_by";?></td>
     <td><a href="document_edit.php?document_id=<?php echo $document_id;?>"><i class="fa fa-pencil" title="Edit Document"></i></a>&nbsp;&nbsp;<a href="delete.php?document_id=<?php echo $document_id ;?>" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash" title="Delete Document"></i></a></td>
   
  </tr>

<?php  } ?>
 </tbody>


</table>

    </div>
   </div>
  </div>
</div>
<?php include('footer.php');?>