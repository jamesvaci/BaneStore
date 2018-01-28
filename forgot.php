<?php include "includes/header.php"; ?>

<?php include "includes/header-nav.php"; ?>
<?php
$forgot = $_GET['forgot'];
$email = $_GET['email'];
// ;
$sql = "SELECT * FROM users WHERE forgot='{$forgot}' AND email='{$email}' ";

$res = mysqli_query($connection, $sql);
$count = mysqli_num_rows($res);
if ($count === 0) {
  header('Location: index.php');
}

if(isset($_POST['submit'])){
  $newPass = $_POST['password'];
  $forgotPass = password_hash($newPass, PASSWORD_BCRYPT, array('forgot' => 2));
  $query = "UPDATE users SET password='{$forgotPass}' WHERE email='{$email}' ";
      $passQuery = mysqli_query($connection, $query);
      if (!$passQuery) {
    $fMsg = 'Doslo je do greske molimo pokusajte ponovo';
        die("something went wrong" . mysqli_error($connection));
      };
  header('Location: prijavise.php');
}
?>

<div class='container'>
    <div class="row" style="justify-content: space-evenly; margin-top: 150px;">
        <form  action="" method='post' class="text-center" style="width: 400px;">
        <?php if(isset($fMsg)){ ?><div class='alert alert-warning' role='alert'> <?php echo $fMsg; ?> </div> <?php } ?>
          <?php if(isset($successMail)){ ?><div class='alert alert-success' role='alert'> <?php echo $successMail; ?> </div> <?php } ?>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Novi password" name='password'>
          </div>
          <button type="submit" class="btn btn-primary" name='submit'>Promeni lozinku</button>
        </form>
        </div>
</div>
<!-- $2y$10$i2fc9TlJtTWupp4ES0B4huITmO5jxH8ZgsgzuAf8w9N -->