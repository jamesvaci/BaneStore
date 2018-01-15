<?php include "includes/header.php"; ?>

<?php include "includes/header-nav.php"; ?>

<?php 

if (!isset($_SESSION['type'])) {
    header("Location: ../index.php");
}
if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] !== 'user') {
        header("Location: ../index.php");
    }
}?>

<?php 
            if(isset($_GET['user'])){
              $user = $_GET['user'];
              $user = mysqli_real_escape_string($connection, $user);
            }else{
              $user= '';
            }
            switch ($user) {
              case 'edit_profile':
                include 'includes/edit_profile.php';
                break;
              default:
                include "includes/viewProfile.php";
                break;
            }
            ?>

<?php include "includes/footer.php"; ?>