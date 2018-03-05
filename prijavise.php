<?php include "includes/header.php"; ?>
<?php error_reporting(E_ALL);
ini_set('display_errors', 1); ?>
<?php include "includes/header-nav.php"; ?>
<div class='container'>
    <div class="row" style="justify-content: space-evenly; margin-top: 150px;">
    <?php include "includes/login.php"; ?>
        <form method="post" action="" class="text-center" style="width: 400px;">
          <?php if(isset($fmsg)){ ?><div class='alert alert-warning' role='alert'> <?php echo $fmsg; ?> </div> <?php } ?>
          <div class="form-group">
            <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" name='password' class="form-control" id="password" placeholder="Password">
          </div>
          <button type="submit" name='submit' class="btn btn-primary">Prijavi me</button>
            <p>ili</p>
            <a href='registracija.php'><p>Registruj me</p></a>
        </form>
        </div>
</div>