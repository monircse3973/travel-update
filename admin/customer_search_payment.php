
<?php include('header.php');?>
<?php include('connection/connection.php');?>
 <link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">SEARCH CUSTOMER</h2>
  <!-- <div class="ph2"><a href="customer_search.php">CUSTOMER SEARCH</a></div>
 -->
<div class="table-responsive">
	 <div class="container">
 	<div class="row">
 		<div class="col-md-6 col-md-offset-3">
 			<?php


if(isset($_POST['search']))

{
	$tab="<table class='table-bordered'><tr class='header-tr'><td align='center'>Action</td><td align='center'>Photo</td><td align='center'>Name</td><td align='center'>Son of</td><td align='center'>Passport No</td><td align='center'>Manipulation</td></tr>";
	$customer_name=$_POST["customer_name"];
	$a=trim($customer_name);//avoid extra spaces
	
$sql="select*from costomer where full_name like '$a%' or telephone_no like '$a%'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num>=1 and $a!="")	//avoid null condition
{
while($res=mysqli_fetch_array($result))
{
	$costomer_id=$res["costomer_id"];
	$uploadimage=$res["uploadimage"];
$name=$res["full_name"];
$son_of=$res['son_of'];
$passport_no=$res["passport_no"];


$tab.="<tr class='header-tr'><td ><table border='1'> <tr ><td>Payment</td><td><a href='payment.php?costomer_id=$costomer_id'><i class='fa fa-plus' title='Add Payment'></i></a><a href='payment_view.php?costomer_id=$costomer_id'><i class='fa fa-eye' title='View Payment'></i></td></tr> <tr></td></tr> </table></td><td width=100 height=100 align='center'><img src='$uploadimage' width=100 height=100/> </td><td align='center'>$name</td><td align='center'>$son_of</td><td align='center'>$passport_no</td><td><table><tr><td><a href='customer_detail.php?costomer_id=$costomer_id'><i class='fa fa-eye' title='View Customer'></i></a></td> <td align='left' valign='top'><a href='customer_edit.php?costomer_id= $costomer_id'><i class='fa fa-pencil' title='Edit Customer'></i></a></td> <td align='left' valign='top'><a href='delete.php?costomer_id= $costomer_id' onclick='return confirm('Are you sure you want to delete?')'><i class='fa fa-trash' title='Delete Customer'></i></td></tr></table></tr>";


}
$tab.='</table>';//table should be end othersise it will not work.
echo $tab;

}else
{
	echo'<div style="color:red" >not found</div>';
}
}
else
{
?>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<form name="form1" action="customer_search_payment.php" method="post">
			Customer Name Or Contact No:<input type="text" name="customer_name" class="form-control" />
			<input type="submit" value="search" style="position: absolute;
    top: 19px;
    /* left: 0; */
    /* bottom: 0; */
    right: -65px;
    padding: 6px 17px;
    border-radius: 3px;
    background-color: #fff;
    text-transform: uppercase;" name="search" />
			</form>
		</div>
	</div>
</div>

<?php }?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
 		</div>
 	</div>
 </div>
</div>


<?php include('footer.php');?>