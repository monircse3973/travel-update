<head><title>ONLINE TRAVEL AGENCY SYSTEM::ADD DOCUMENT</title></head>
<script language="javascript" src="js/validation.js"></script>
<?php include("header.php");
include("connection/connection.php");
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">ADD DOCUMENT</h2>
  
<form action="insert.php" method="post" name="form1" onsubmit="return document_validate();" enctype="multipart/form-data">



  
    <label>Customer Id</label>
    <input type="hidden" name="costomer_id" value= <?php echo $_REQUEST['costomer_id'];?> />
	
	<?php $cID=$_REQUEST['costomer_id']; $s=mysqli_query("SELECT * FROM costomer WHERE costomer_id='$cID'");  
	$d=mysqli_fetch_array($s);
	 echo $d['full_name']; ?>
  
   
   <label>DOCUMENT TYPE</label>
    <input type="text" class="form-control" name="document_type" />
    
   <label>Document</label>
    <td><input type="file" class="form-control" name="document1"></td>
    
     
   <!--  <input type="submit" value="SAVE" name="documentform"><input type="reset" value="Clear" /></td>
   <td>&nbsp; </td> 
  </tr>
</table>
</fieldset> -->
<button class="btn btn-primary" type="submit" name="documentform">Save</button>
<button class="btn btn-danger" type="reset">Clear</button>
</form>
<?php include("footer.php");?>
