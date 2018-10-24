<?php 
function insertCash($amount, $debitCredit, $description){
$sqlCashInsert=mysqli_query("INSERT INTO cash(amount, debitCredit, description) values('$amount', '$debitCredit', '$description')") or die(mysqli_error());
}

//function get Max ID
function getMaxID($maxField, $table){
$sql=mysqli_query("SELECT MAX(".$maxField.") as maxID  FROM ".$table);
$result=mysqli_fetch_array($sql);
return $result['maxID'];
}



?>