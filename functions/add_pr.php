<?php
include("../includes/db.php");
$id = $_GET['id'];
$id = mysqli_real_escape_string($connection, $id);
$u_id = $_GET['u_id'];
$u_id = mysqli_real_escape_string($connection, $u_id);
$product_price = $_GET['price'];
$product_price = mysqli_real_escape_string($connection, $product_price);
$name = $_GET['name'];
$name = mysqli_real_escape_string($connection, $name);

$cartAdd = "INSERT INTO cart (user_id, product_id, product_name, product_quantity, pr_price) VALUES ({$u_id}, {$id}, '{$name}', 1, {$product_price})";
              $queryAdd = mysqli_query($connection, $cartAdd);
              if(!$queryAdd){
                die("something went wrong" . mysqli_error($connection));
              }
?>