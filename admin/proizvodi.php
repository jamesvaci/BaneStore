<?php include "includes/head-scripts.php";?>

<body class="fix-header fix-sidebar card-no-border">
        <?php include "includes/side-nav.php";?>
        <div class="container" style="margin-top: 100px;">
            <div class="row">
            <?php 
            if(isset($_GET['source'])){
              $source = $_GET['source'];
              $source = mysqli_real_escape_string($connection, $source);
            }else{
              $source= '';
            }
            switch ($source) {
              case 'add_item':
                include 'includes/add_item.php';
                break;
              case 'edit_item':
                include 'includes/edit_item.php';
                break;
              default:
                include "includes/view_proizvodi.php";
                break;
            }
            ?>
              
            </div>
</div>
<?php include "includes/footer-scripts.php"?>