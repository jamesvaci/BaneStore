<?php
include("../includes/db.php");

$id = $_GET['id'];
$u_id = $_GET['u_id'];
$name = $_GET['name'];

$cartRemove = "DELETE FROM cart WHERE user_id = {$u_id} AND product_id = {$id} limit 1";
              $queryRemove = mysqli_query($connection, $cartRemove);
              if(!$queryRemove){
                die("something went wrong" . mysqli_error($connection));
              }
?>