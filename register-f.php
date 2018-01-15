<?php include "includes/header.php"; ?>

<?php include "includes/header-nav.php"; ?>

<div class='container'>
    <div class="row" style="justify-content: space-evenly; margin-top: 150px;">
        <form  action="includes/register.php" method='post' class="text-center" style="width: 400px;">
          <div class='alert alert-warning' role='alert'>Email vec postoji, ako ste zaboravili lozinku molim Vas idite u <a href="resetujlozinku.php">Resetuj lozinku</a></div>
          <div class="form-group">
            <input type="text" class="form-control" id="first_name" aria-describedby="emailHelp" placeholder="Prvo ime" name='firstname'>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="last_name" aria-describedby="emailHelp" placeholder="Zadnje ime" name='lastname'>
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
