<?php 
$id= $_SESSION['id'];
$prQuery = "SELECT * FROM cart WHERE user_id = {$id} AND product_id = {$pr_id} ";
$numOfProduct = mysqli_query($connection, $prQuery);
$countProduct = mysqli_num_rows($numOfProduct);
$totalCount = $countProduct;
?>