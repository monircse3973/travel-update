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
    <th>CONTACT ID</th>              
    <th>NAME</th>
    <th> COMPANY</th>
    <th>EMAIL</th>
    <th>TOPIC</th>
    <th>PHONE</th>
   <th>COMMENTS</th>
   <th>DATE & TIME</th>
    <?php /*?><TD class="specail">ACTION </TD><?php */?>
  </tr>
  </thead>

 <tbody>
   <tr>
  <?php
$sql=mysqli_query($con,"select * from contact ORDER BY contact_id desc")or die("Query Error");
while($row=mysqli_fetch_array($sql)){
  $contact_id=$row['contact_id'];
  ?>
        <td><?php echo $row['contact_id']; ?></td
             ><td><?php echo $row['name']; ?></td>
            <td><?php echo $row['company']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['topic']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['comments']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <?php /*?><td><a href="#">Delete</a> <td></td></td><?php */?>


         </tr>
  <?php }?>
 </tbody>
                  
  
</table> 
</div>
 <?php include('footer.php');?>