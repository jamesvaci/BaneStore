<?php
if (isset($_SESSION['type'])) {
    $id = $_SESSION["id"];
	$query = "SELECT * FROM users WHERE user_id = {$id}";
            $edit_the_user_by_id = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($edit_the_user_by_id)){
                $id = $row['user_id'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
          }
if (isset($_POST['nBg'])) {
	$textNbg = $_POST['textNbg'];
	$sender = $firstname . " " . $lastname . " - " . $email;
	salonMail("asheton.lucan@arockee.com", $sender, $textNbg);
	$success = "Uspesno poslata poruka";
}

if (isset($_POST['su'])) {
	$textSu = $_POST['textSu'];
	$sender = $firstname . " " . $lastname . " - " . $email;
	salonMail("asheton.lucan@arockee.com", $sender, $textSu);
	$success = "Uspesno poslata poruka";
}

if (isset($_POST['su2'])) {
	$textSu2 = $_POST['textSu2'];
	$sender = $firstname . " " . $lastname . " - " . $email;
	salonMail("asheton.lucan@arockee.com", $sender, $textSu2);
	$success = "Uspesno poslata poruka";
}

if (isset($_POST['ns'])) {
	$textNs = $_POST['textNs'];
	$sender = $firstname . " " . $lastname . " - " . $email;
	salonMail("asheton.lucan@arockee.com", $sender, $textNs);
	$success = "Uspesno poslata poruka";
}
}

?>

<div class="modal fade" id="nBg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nova poruka za salon AquaHome</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="" method="post">
	      <div class="modal-body">
	          <div class="form-group">
	            <label for="message-text" class="col-form-label">Poruka:</label>
	            <textarea class="form-control" id="text" name='textNbg'></textarea>
        		<?php if(isset($fMsg)){ ?><div class='alert alert-warning' role='alert'> <?php echo $fMsg; ?> </div> <?php } ?>
	          </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="material-icons">close</i></button>
	        <button name='nBg' type="submit" class="btn btn-primary"><i class="material-icons">send</i></button>
	      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="su" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nova poruka za salon Bane</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="" method="post">
	      <div class="modal-body">
	          <div class="form-group">
	            <label for="message-text" class="col-form-label">Poruka:</label>
	            <textarea class="form-control" id="text" name='textSu'></textarea>
        		<?php if(isset($fMsg)){ ?><div class='alert alert-warning' role='alert'> <?php echo $fMsg; ?> </div> <?php } ?>
	          </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="material-icons">close</i></button>
	        <button name='su' type="submit" class="btn btn-primary"><i class="material-icons">send</i></button>
	      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="su2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nova poruka za salon Subotica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="" method="post">
	      <div class="modal-body">
	          <div class="form-group">
	            <label for="message-text" class="col-form-label">Poruka:</label>
	            <textarea class="form-control" id="text" name='textSu2'></textarea>
        		<?php if(isset($fMsg)){ ?><div class='alert alert-warning' role='alert'> <?php echo $fMsg; ?> </div> <?php } ?>
	          </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="material-icons">close</i></button>
	        <button name='su2' type="submit" class="btn btn-primary"><i class="material-icons">send</i></button>
	      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="ns" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nova poruka za salon Novi San</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="" method="post">
	      <div class="modal-body">
	          <div class="form-group">
	            <label for="message-text" class="col-form-label">Poruka:</label>
	            <textarea class="form-control" id="text" name='textNs'></textarea>
        		<?php if(isset($fMsg)){ ?><div class='alert alert-warning' role='alert'> <?php echo $fMsg; ?> </div> <?php } ?>
	          </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="material-icons">close</i></button>
	        <button name='ns' type="submit" class="btn btn-primary"><i class="material-icons">send</i></button>
	      </div>
      </form>
    </div>
  </div>
</div>