<?php
include("../includes/db.php");

$id = $_GET['id'];
$id = mysqli_real_escape_string($connection, $id);
$u_id = $_GET['u_id'];
$u_id = mysqli_real_escape_string($connection, $u_id);
$name = $_GET['name'];
$name = mysqli_real_escape_string($connection, $name);

$cartRemove = "DELETE FROM cart WHERE user_id = {$u_id} AND product_id = {$id} limit 1";
              $queryRemove = mysqli_query($connection, $cartRemove);
              if(!$queryRemove){
                die("something went wrong" . mysqli_error($connection));
              }
?>