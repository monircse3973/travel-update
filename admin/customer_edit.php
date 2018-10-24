<head><title>ONLINE TRAVEL AGENCY SYSTEM::CUSTOMER EDIT</title></head>
<link rel="stylesheet" href="css/styles.css" type="text/css"/>
<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
 <script src="js/validation.js" type="text/javascript"></script>
<?php include('header.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">CUSTOMER EDIT</h2>
  
<?php
require_once('connection\connection.php');
?>

<?php
  $sql="select*from costomer where costomer_id='$_GET[costomer_id]'";
$result=mysqli_query($con,$sql) or die(mysqli_error());
while($row=mysqli_fetch_array($result))
{
	$costomer_id=$row['costomer_id'];
	$full_name=$row['full_name'];
	$son_of=$row['son_of'];
	$status=$row['status'];
	$date_of_birth=$row['date_of_birth'];
	$place_of_birth=$row['place_of_birth'];
	$previous_nationality=$row['previous_nationality'];
	$present_nationality=$row['present_nationality'];
	$sex=$row['sex'];
	$marital_status=$row['marital_status'];
	$sect=$row['sect'];
	$religion =$row['religion'];
	$place_of_issue=$row['place_of_issue'];
	$qualification=$row['qualification'];
	$profession=$row['profession'];
	$home_address=$row['home_address'];
	$telephone_no=$row['telephone_no'];
	$purpose_of_travel=$row['purpose_of_travel'];
	$date_of_passport=$row['date_of_passport'];
	$passport_no=$row['passport_no'];
	$date_of_passport_expiry=$row['date_of_passport_expiry'];
	$duration_of_stay_in_kindom=$row['duration_of_stay_in_kindom'];
	$date_of_arrival =$row['date_of_arrival'];
	$date_of_departure=$row['date_of_departure'];
	$mode_of_payment=$row['mode_of_payment'];
	$relationship=$row['relationship'];
	$destination=$row['destination'];
	$carriers_name=$row['carriers_name'];
	$visa_no=$row['visa_no'];
	$date_of_insertion=$row['date_of_insertion'];
	$inserted_by=$row['inserted_by'];
}
?>

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <form name="form1" method="post" action="update.php" enctype="multipart/form-data" onsubmit="return validate1();">
<input type="hidden" name="hiden" value="<?php echo $costomer_id; ?>" />


 
   <label>Full Name</label>
    <input type="text" class="form-control" name="full_name"  value="<?php echo $full_name ;?>"/>
    
  
    <label>S/O</label>
    <input type="text" class="form-control" name="son_of" value="<?php echo $son_of ;?>"/>
    
    
    <label>Status</label>
    <select name="status" class="form-control"><OPTION  <?php if($status=='-1'){echo 'selected="selected"'; }?> value="-1">STATUS</OPTION><option <?php if($status=='APPENDED'){echo 'selected="selected"'; }?> value="APPENDED">APPENDED</option><option  <?php if($status=='APPROVED'){echo 'selected="selected"'; }?>value="APPROVED">APPROVED</option><option <?php if($status=='REJECTED'){echo 'selected="selected"'; }?> value="REJECTED">REJECTED</option></select>
    
    <label>Date Of Birth</label>
    <input type="text" name="date_of_birth"  class="datepicker form-control" value="<?php echo $date_of_birth;?>"/>
    
    <label>Place Of Birth</label>
    <input type="text" class="form-control" name="place_of_birth" value="<?php echo $place_of_birth;?>"/>
   
    <label>Previous Nationality</label>
    <input type="text" class="form-control" name="previous_nationality" value="<?php echo $previous_nationality;?>"/>
   
    <label>Present Nationality</label>
    <input type="text" class="form-control" name="present_nationality" value="<?php echo $present_nationality;?>"/>
    
    <label>Sex</label>
    <select name="sex" class="form-control"><option <?php if($sex=='-1'){echo 'selected="selected"'; }?> value="-1"> Gender</option><option  <?php if($sex=="MALE"){echo 'selected="selected"'; }?> value="MALE">Male</option><option <?php if($sex=='FEMALE'){echo 'selected="selected"'; }?>value="FEMALE">Female</option></select>
    
    <label>Marital Status</label>
    <select name="marital_status" class="form-control">
    <option   value="-1">marital status</option>
    <option  <?php if($marital_status=='SINGLE'){echo 'selected="selected"'; }?> value="SINGLE">single</option>
    <option  <?php if($marital_status=='MARREID'){echo 'selected="selected"'; }?> value="MARRIED">married</option>
    <option  <?php if($marital_status=='DIVORCED'){echo 'selected="selected"'; }?> value="DIVORCED">divorced</option>
    <option   <?php if($marital_status=='WIDOWED'){echo 'selected="selected"'; }?>value="WIDOWED">widowed</option></select>
  
  
    <label>Sect</label>
    <input type="text" name="sect" class="form-control" value="<?php echo $sect;?>"/>
   
    <label>Religion</label>
    <input type="text" class="form-control" name="religion" value="<?php echo $religion;?>"/>
    
    <label>PLACE OF ISSUE:</label>
    <input type="text" class="form-control" name="place_of_issue" value="<?php echo $place_of_issue;?>"/> 
   
    <label>QUALIFICATION:</label>
    <select name="qualification" class="form-control"><option value="-1" >-Qualification-</option><option <?php if($qualification=='MATRIC'){echo 'selected="selected"'; }?> value="MATRIC" >Matric</option><option <?php if($qualification=='INTERMEDIATE'){echo 'selected="selected"'; }?> value="INTERMEDIATE">Intermediate</option><option <?php if($qualification=='GRADUATION'){echo 'selected="selected"'; }?> value="GRADUATION">Graduation</option><option <?php if($qualification=='MASTER'){echo 'seleted="selected"'; }?> value="MASTER">Master</option><option <?php if($qualification=='DOCTORATE'){echo 'selected="selected"'; }?> value="DOCTORATE" >Doctorate</option><option <?php if($qualification=='NONE'){echo 'selected="selected"'; }?> value="NONE">None</option></select>
    
    <label>Profession:</label>
    <td><input type="text" name="profession" class="form-control" value="<?php echo $profession;?>"/></td>
    
  </table>
  
  <h3>Contact Info</h3>
  
    <label>HOME ADDRESS</label>
    <input type="text" class="form-control" name="home_address"  size="50" value="<?php echo $home_address;?>"/>
    
   <label>TELEPHONE NO:</label>
    <input type="text" class="form-control" name="telephone_no" value="<?php echo $telephone_no;?>"/> 
    
  
  <h3>TRavel Info</h3>
  
  
    <label>PURPOSE OF TRAVEL:</label>
    <select name="purpose_of_travel" class="form-control"><option value="-1">-purpose of travel-</option> <option <?php if($purpose_of_travel=='WORK'){echo 'selected="selected"'; }?> value="WORK">work</option><option <?php if($purpose_of_travel=='TRANSIT'){echo 'selected="selected"'; }?> value="TRANSIT">transit</option><option <?php if($purpose_of_travel=='VISIT'){echo 'selected="selected"'; }?> value="VISIT">visit</option><option<?php if($purpose_of_travel=='UMRAH'){echo 'selected="selected"'; }?> value="UMRAH">umrah</option><option <?php if($purpose_of_travel=='RESIDENCE'){echo 'selected="selected"'; }?> value="RESIDENCE">residence</option><option <?php if($purpose_of_travel=='HAJJ'){echo 'selected="selected"'; }?> value="HAJJ">hajj</option ><OPTION <?php if($purpose_of_travel=='DIPLOMACY'){echo 'selected="selected"'; }?> value="DIPLOMACY">diplomacy</option></select>
    <label>DATE OF PASSPORT:</label>
    <input type="text" name="date_of_passport" class="datepicker form-control" value="<?php echo $date_of_passport;?>"/> 
    <label>Passport No</label>
    <input type="text" class="form-control" name="passport_no"  value="<?php echo $passport_no;?>"/>
    
   
    <label>DATE OF PASSPORT EXPIRY:</label>
    <input type="text" class="form-control" name="date_of_passport_expiry" value="<?php echo $date_of_passport_expiry;?> " class="datepicker"/>
    <label>DURATION OF STAY IN KINDOM:</label>
    <input type="text" class="form-control" name="duration_of_stay_in_kindom" value="<?php echo $duration_of_stay_in_kindom;?>"/> 
   
    <label>Date Of Arrival</label>
    <input type="text" name="date_of_arrival" class="form-control"  value="<?php echo $date_of_arrival;?>" class="datepicker"/>
   
   <label> DATE OF DEPARTURE:</label>
    <input type="text" class="form-control" name="date_of_departure"  value="<?php echo $date_of_departure;?>" class="datepicker"/>
    
   <label>Mode Of Payment</label>
   <input type="text" name="mode_of_payment" class="form-control" value="<?php echo $mode_of_payment ;?>"/>
    
    <label>RELATIONSHIP:</label>
    <input type="text" class="form-control" name="relationship" value="<?php echo $relationship;?>"/></td>
    
    <label>DESTINATION:</label>
    <input type="text" class="form-control" name="destination" value="<?php echo $destination;?>"/>  
  
   <label>CARRIER'S NAME:</label>
    <input type="text" class="form-control" name="carriers_name" value="<?php echo $carriers_name;?>"/> 
   
    <label>VISA NO:</label>
    <input type="text" class="form-control" name="visa_no" value="<?php echo $visa_no;?>"/> <br>
    <button type="submit" name="costomerform" class="btn btn-primary">Submit</button>
   <a href="customer_view.php"><button type="button"  class="btn btn-info">Back TO List</button></a> 
    
   <!--  <input type="submit" value="submit" name="costomerform" /><a href="customer_view.php"><input type="button" value="back to list" /></a> -->
</form>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
