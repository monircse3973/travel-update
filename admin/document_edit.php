<head><title>ONLINE TRAVEL AGENCY SYSTEM::EDIT DOCUMENT</title></head>
<script language="javascript" src="js/validation.js"></script>
<?php include("header.php");?>
<?php require_once('connection\connection.php'); ?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">EDIT DOCUMENT</h2>
  
<?php 
$sql="select*from document where document_id=$_GET[document_id]";
$result=mysqli_query($con,$sql) or die(mysqli_error());
while($row=mysqli_fetch_array($result))
{
$document_id=$row["document_id"]; 	
$costomer_id=$row["costomer_id"];
$document_type=$row["document_type"];
$document=$row["document"];
$inserted_by=$row["inserted_by"];
}

?>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <form action="update.php" method="POST" name="form1" enctype="multipart/form-data" onsubmit="return document_validate();">
<input type="hidden"  name="document_id" value="<?php echo $document_id ;?>" />

  
    <label>Customer id:</label>
    <input type="hidden" class="form-control" name="costomer_id" value=<?php echo $costomer_id;?> /><?php   echo $costomer_id;?> <br>
    <label>DOCUMENT TYPE</label>
    <input type="text" name="document_type"  class="form-control" value="<?php  echo $document_type ;?>"/><br>
    <!-- <input type="submit" value="SAVE" name="documentform"><input type="reset" value="Clear" /></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
  </tr>
</table> -->
<button type="submit" name="documentform" class="btn btn-primary">Save</button>
<button type="reset" class="btn btn-danger">Clear</button>
</form>
    </div>
  </div>
</div>
 

<?php include("footer.php");?>
