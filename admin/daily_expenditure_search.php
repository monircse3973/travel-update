
<?php include('header.php');?>
<?php include('connection/connection.php');?>
 <link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph search_heading">SEARCH VOUCHER</h2>
 

<?php


if(isset($_POST['search']))

{
  $tab="<table width=800 border=0 background-color:blue  >

  <tr>
    
    <td> ID</td>
    <td>VOUCHER NO</td>
    <td>TITLE</td>
    <td>DESCRIPTION</td>
    <td>AMOUNT</td>
    <td>DATE</td>
    
    <td>INSERTED BY</td>
    <td>ACTION</td>
  </tr>";
  $voucher_no=$_POST["voucher_no"];
  $a=trim($voucher_no);//avoid extra spaces
  
$sql="select*from daily_expenditure where voucher_no like $a";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num>=1 and $a!="")  //avoid null condition
{
while($res=mysqli_fetch_array($result))
{
  
$tab.= "<tr >
    
    <td> $res[id]</td>
    <td>$res[voucher_no]</td>
    <td> $res[title]</td>
    <td>$res[description]</td>
    <td>$res[amount]</td>
    <td>$res[date]</td>
     <td>$res[inserted_by]</td>
     <td><a href='daily_expenditure_edit.php?id=$res[id]'><img src='images/edit.png' title='Edit document' /></a>&nbsp;&nbsp;<a href='delete.php?id=$res[id]' onclick='return confirm('Are you sure you want to delete?')'><img src='images/delete.png' title='Delete document' /></a></td>
  </tr>";
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
  <div class="row ">
    <div class="col-md-4 col-md-offset-4 " style="background-color:#3390FF; margin-top:5px;color:white; line-height:10px;padding:15px;">
      <form name="form1" action="daily_expenditure_search.php" method="post">
        <label> Enter Voucher No:</label>
       <input type="text" name="voucher_no" class="form-control" />
        <input type="submit"  value="search" class="btn btn-info button_1" style="margin-top:3px;"name="search" />
      </form>
    </div>
  </div>
</div>
<?php }?>
<br><br><br><br><br><br><br><br><br><br><br>
<?php include('footer.php');?>