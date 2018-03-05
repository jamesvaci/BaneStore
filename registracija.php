<?php include "includes/header.php"; ?>
<?php include "includes/header-nav.php"; ?>
<?php include "includes/register.php"; ?>
<div class='container'>
    <div class="row" style="justify-content: space-evenly; margin-top: 150px;">
        <form  action="" method='post' class="text-center" style="width: 400px;">
          <?php if(isset($emptyFeild)){ ?><div class='alert alert-warning' role='alert'> <?php echo $emptyFeild; ?> </div> <?php } ?>
          <?php if(isset($wrong)){ ?><div class='alert alert-warning' role='alert'> <?php echo $wrong; ?> </div> <?php } ?>
          <?php if(isset($successMail)){ ?><div class='alert alert-success' role='alert'> <?php echo $successMail; ?> </div> <?php } ?>
          <div class="form-group">
            <input type="text" class="form-control" id="first_name" aria-describedby="emailHelp" placeholder="Ime" name='firstname'>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="last_name" aria-describedby="emailHelp" placeholder="Prezime" name='lastname'>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name='email'>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Password" name='password'>
          </div>
          <button type="submit" class="btn btn-primary" name='submit'>Registruj me</button>
            <p>ili</p>
            <a href='prijavise.php'><p>Prijavi me</p></a>
        </form>
        </div>
</div>