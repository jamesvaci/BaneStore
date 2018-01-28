<?php include "includes/header.php"; ?>

<?php include "includes/header-nav.php"; ?>

<div class="container">
            <?php 
            if(isset($_GET['phase'])){
              $phase = $_GET['phase'];
              $phase = mysqli_real_escape_string($connection, $phase);
            }else{
              $phase= '';
            }
            switch ($phase) {
              case 'phaseOne':
                include 'includes/phaseOne.php';
                break;
              case 'phaseTwo':
                include 'includes/phaseTwo.php';
                break;
              case 'phaseThree':
                include 'includes/phaseThree.php';
                break;
              case 'phaseFour':
                include 'includes/phaseFour.php';
                break;
              case 'success':
                include 'includes/success.php';
                break;
              default:
                include 'includes/phaseOne.php';
                break;
            }
            ?>
</div>

    <div >
<?php include "includes/footer.php"; ?>
</div>