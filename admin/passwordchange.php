<head><script language="javascript" type="text/javascript">
function change()
{
var a=document.form1.new_password.value;
document.write(a);
}
</script>
<style>
p{
	text-align:center;

	font-family:Georgia, "Times New Roman", Times, serif;
	size:10px;
}
</style>
</head>

<?php  include('header.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">ACCOUNT SETTINGS</h2>
  <!-- <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="passwordchange.php">account settings&gt;&gt;</a></p> -->
<?php
require_once('connection\connection.php');

 ?>
 <?php
 if(isset($_POST['change']))
 {
	 
	 $old=$_POST['old_password'];
	 $new=$_POST['new_password'];
	 $rnew=$_POST['r_password'];
$sql="select * from admin";
$result=mysqli_query($con,$sql) or die(mysqli_error());
while($row=mysqli_fetch_array($result))
{
	$password=$row['password'];

}
if($old!=$password)
{
	echo"<p>your old password does not match</p>";
}
else if($new!=$rnew)
{
	echo"<p>new passwords do not match</p>";
}
else if(strlen($new)<4)
{ 
	echo"<p>minimum length should be four characters</p>";
}
 else
 {
	$sql="update admin set password='$new' where user_id = '$user'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con)); 
if($result)
{
	echo "Password Changes";
}
else
{
	echo"An Error Occurred";
}
 }
    }//end of ifisset();
?>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <form name="form1" action="#" method="post" onSubmit="change();">
   
      
        <label>Old Password</label>
        <input type="text" name="old_password" class="form-control" />
        
      
      
  
        <label>New Password</label>
        <input type="text" name="new_password" class="form-control" />
        
      
      
        
      <label>Retype New Password</label>
        <input name="r_password"  type="text" class="form-control" /> <br>
      
      
      
       <!--  <input type="submit" value="save" name="change" /> -->
       <button type="submit" class="btn btn-primary" name="change">Save</button>
</form>
    </div>
  </div>
</div>


<?php include('footer.php'); ?>