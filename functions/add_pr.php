<?php
include("../includes/db.php");
$id = $_GET['id'];
$u_id = $_GET['u_id'];
$product_price = $_GET['price'];
$name = $_GET['name'];
$loc = $_GET['loc'];

$cartAdd = "INSERT INTO cart (user_id, product_id, product_name, product_quantity, pr_price) VALUES ({$u_id}, {$id}, '{$name}', 1, {$product_price})";
              $queryAdd = mysqli_query($connection, $cartAdd);
              if(!$queryAdd){
                die("something went wrong" . mysqli_error($connection));
              }
?>