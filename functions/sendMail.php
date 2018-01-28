<?php
include("../includes/db.php");

$email = $_GET['email'];
$email = mysqli_real_escape_string($connection, $email);
$msg =  $_GET['msg'];
$msg = mysqli_real_escape_string($connection, $msg);
mail($email,"New Messege",$msg);
?>