<head><title>ONLINE TRAVEL AGENCY SYSTEM::</title></head>
<?php include('header.php');?>
<?php
require_once('connection\connection.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">Artical VIEW</h2>
<div class="table-responsive">
<table class="table table-bordered">
 <thead>
   <tr>
    <th>ARTICAL ID</th>               
    <th>TITLE</th>
    <th> DESCRIPTION</th>
    <th>PAGE TYPE</th>
    <th>PICTURE</th>
    <th class="">ACTION </th>
  </tr>
 </thead>
  
  <tbody>
    <tr>
  <?php
$sql=mysqli_query($con,"select * from pages ORDER BY 'Aid' DESC")or die("Query Error");
while($row=mysqli_fetch_array($sql)){
  $page_id=$row['page_id'];
  ?>
        <td><?php echo $row['page_id']; ?></td
             ><td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['page_type']; ?></td>
           <td><img src="uploaded/<?php  echo $row['picture']; ?>" width="120" height="100"></td>
            <td><a href="artical_delete.php?action=Delete&page_id=<?php echo $page_id; ?>" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash" title="Delete Artical"></i></a><td><a href="artical_edit.php?page_id=<?php echo $page_id?>"><i class="fa fa-pencil" title="Edit Customer"></i></a></td> <td align="left" valign="top"></td></td>


         </tr>
  <?php }?>

  </tbody>            
  
</table>   
</div>


 <?php include('footer.php');?>