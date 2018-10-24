<head><title>ONLINE TRAVEL AGENCY SYSTEM::</title>
<?php include('header.php'); ?></head>

<link rel="stylesheet" href="css/bar.css" type="text/css" />
<?php

require_once('connection\connection.php'); 

?>
<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
<script language="javascript" src="js/validation.js"></script>

<h2 class="ph">ADD ARTICALS</h2>
  <p class="ph2">&nbsp;</p>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-3">
        <form method="post" name="form1" enctype="multipart/form-data">

<!-- <h2>Articals Information</h2> -->
 
  
    <label>Title</label>
    <input name="title" type="text" class="form-control" />
    

  
    
     <label>Picture</label>
  
      <input name="file" type="file" class="form-control" value="" />

     <label>Artical</label>
    <select name="page_type" class="form-control">
    <option value="-1">-SELECT ARTICAL-</option>
    <option value="home">HOME</option> 
    <option value="aboutus">ABOUT US</option> 
    <option value="packages">PACKAGES</option> 
    <option value="services">SERVICES</option> 
    <option value="career">CAREER</option> 
    <option value="news">NEWS</option> 
    <option value="packagepic">PACKAGES PICTURES</option> 
    <option value="term_condition">TERM & CONDITION</option> 
     
    </select>
  
 
   <label>Description</label>
    <textarea name="description"   class=" form-control ckeditor"  id="description"></textarea><br>

  
 
   <!--  <input name="save" type="submit" id="save" value="submit" /> -->
   <button name="save" type="submit" id="save" class="btn btn-primary">Submit</button>
   <!-- <button name="save" type="submit" id="save" class="btn btn-primary">Submit</button> -->

    
   <!--    <input type="reset" name="reset" value="clear" /> -->
       <button name="reset" type="reset"  class="btn btn-info ">Clear</button>
       <a href="artical_view.php"><!-- <input type="button" value="back to list"> --> <button type="button" class="btn btn-danger">Back To List</button> </a>
   
</form>
      </div>
    </div>
  </div>


<?php
if(isset($_POST['save']))
{
$title=$_POST['title'];	
$description=$_POST['description'];	
$page_type=$_POST['page_type'];	

$dir='uploaded/';
$uploadfile=$dir.basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
$filename=$_FILES['file']['name'];
}

$query_insert=mysqli_query("INSERT INTO pages(`title`, `picture`, `page_type`,  `description`) VALUES ('$title', '$filename', '$page_type', '$description')" )  or die(mysqli_error());
}
?>
<?php include('footer.php');?>