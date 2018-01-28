<?php include "includes/header.php"; ?>

<?php include "includes/header-nav.php"; ?>
<?php
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
  $email = mysqli_real_escape_string($connection, $email);
	$forgot = password_hash($email, PASSWORD_BCRYPT, array('forgotFirst' => 2));

	$query = "UPDATE users SET forgot='{$forgot}' WHERE email='{$email}' ";
      $select_products = mysqli_query($connection, $query);
      if (!$select_products) {
		$fMsg = 'Doslo je do greske molimo pokusajte ponovo';
      	die("something went wrong" . mysqli_error($connection));
      };
	mail($email, 'Reset your password', 'to reset your password please click http://localhost:8080/BaneStore_Project/forgot.php?forgot=' . $forgot . '&email=' . $email);
	$sMsg = 'Link za resetovanje Vaseg passworda je poslat';
}

?>
<div class='container'>
    <div class="row" style="justify-content: space-evenly; margin-top: 150px;">
        <form  action="" method='post' class="text-center" style="width: 400px;">
        <?php if(isset($fMsg)){ ?><div class='alert alert-warning' role='alert'> <?php echo $fMsg; ?> </div> <?php } ?>
          <?php if(isset($sMsg)){ ?><div class='alert alert-success' role='alert'> <?php echo $sMsg; ?> </div> <?php } ?>
          <div class="form-group">
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name='email'>
          </div>
          <button type="submit" class="btn btn-primary" name='submit'>Resetuj lozinku</button>
        </form>
        </div>
</div>
