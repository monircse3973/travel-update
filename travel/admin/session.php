<?php
session_start();
$user=$_SESSION['user_id'];


if(!isset($_SESSION['user_id']))
{
 header('location:login.php');
}
?>