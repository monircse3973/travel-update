<?php 
include ('connection/connection.php');
function insertCash($amount, $debitCredit, $description){
$sqlCashInsert=mysqli_query($con,"INSERT INTO cash(amount, debitCredit, description) values('$amount', '$debitCredit', '$description')");
}

//function get Max ID
function getMaxID($maxField, $table){
$sql=mysqli_query($con,"SELECT MAX(".$maxField.") as maxID  FROM ".$table);
$result=mysqli_fetch_array($con,$sql);
return $result['maxID'];
}



?>