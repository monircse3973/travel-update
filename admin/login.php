<html>
<head><title>ONLINE TRAVEL AGENCY SYSTEM::LOGIN </title>
<style>
body  {
    background-image: url("img/trav.jpg");
    background-color: #cccccc;
	background-size:cover;
}
</style>
<style>


#contentarea table {
    width: 75% !important;
}

.inputbox{
	border-radius:3px;
	box-shadow:-1px 1px 1px 3px;
	
	width:200px;
	
	}
</style>
</head>
<body>


<?php include('header1.php');?>
<h1 style="font-style: italic;
    text-align: center;">
	ATC tech Travel Agency Management System
</h1>
<p>&nbsp;</p>
<table  border="0" style="background-color: #9b6bed;">
  <tr> 
    <td   style="text-align:center; padding:10px; background:#036; color:#FFF; font-weight:bold;" width="100%" align="left">Login</td>
  </tr>
  </table>

<?php  include('connection\connection.php'); ?>
<?php 
session_start();            
if(isset($_POST['submit']))
{  
	$username=$_POST["username"];
	$password=$_POST["password"];
	$username1 = mysqli_real_escape_string($con,$username);
	$password1 = mysqli_real_escape_string($con,$password);
	$sql="select*from admin where username='$username1' and password='$password1'";//after where = means == as ic other language;
	$result=mysqli_query($con,$sql) or die(mysqli_query());
	$row=mysqli_fetch_array($result);//if $row is true then if will be executed otherwise else..
	if ($row)
	{
		$user_id=$row["user_id"];
	    $_SESSION['user_id']=$user_id;
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		
		header('location:index.php');
		
		}
	else 
	{
		echo"<h2 style='color:red'><center>-Password or username is incorret-</center></h2>";
	}
	}


?>
<script language="javascript" type="text/javascript">
function login()
{var valid=true;
	var a=/^[a-z-A-Z\0-9]+$/;
	var username=document.form1.username.value.trim();
	var password=document.form1.username.value.trim();
	if(username.match(a)==null)
	{<?php 
		echo"<h5 style='color:red'><center>-Password or username is incorret-</center></h5>";
?>
		valid=false
	}
	
	else
	{
 if(password.match(a)==null)
	{
		
	  <?php 
		echo"<h5 style='color:red'><center>-Password or username is incorret-</center></h5>";
	
?>
valid=false;
	}
	}
	
	return valid;
}
</script>

<form name="form1" action="login.php" method="post" onsubmit="return login();">
    <div class="loginForm">
  <table align="center"  class="loginTable">
  <tr>
    <td width="14%">Username</td>
    <td width="73%"><input type="text" name="username" size="30" class="inputbox"></td>

  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" size="30" class="inputbox"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="sign in"></td>
    <td>&nbsp;</td>
  </tr>

</table>
  </div>
</form>

<?php include('footer.php');?>
</body>
</html>