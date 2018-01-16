<!DOCTYPE html>
<html lang="en">
<?php include "includes/head-scripts.php";?>

<body class="fix-header fix-sidebar card-no-border">
        <?php include "includes/side-nav.php";?>
        <div class="container">
            <div class="row">
            <?php 
            if(isset($_GET['cat'])){
              $cat = $_GET['cat'];
              $cat = mysqli_real_escape_string($connection, $cat);
            }else{
              $cat= '';
            }
            switch ($cat) {
              case 'add_cat':
                include 'includes/add_cat.php';
                break;
              case 'edit_cat':
                include 'includes/edit_cat.php';
                break;
              default:
                include "includes/view_cat.php";
                break;
            }
            ?>
              
            </div>
		</div>
<?php include "includes/footer-scripts.php"?>