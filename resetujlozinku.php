<?php include "includes/header.php"; ?>

<?php include "includes/header-nav.php"; ?>

<div class='container'>
    <div class="row" style="justify-content: space-evenly; margin-top: 150px;">
        <form  action="includes/register.php" method='post' class="text-center" style="width: 400px;">
          <div class="form-group">
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name='email'>
          </div>
          <button type="submit" class="btn btn-primary" name='submit'>Resetuj lozinku</button>
        </form>
        </div>
</div>
