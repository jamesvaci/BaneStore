<?php include "./test.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/send_messege.php"; ?>
<?php include "includes/header-nav.php"; ?>

<div class="container">
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1k5pBLXgfN8bJTeA9UjfAM7SqOSQ" width="100%" height="480" style="margin-top: 50px;"></iframe>
    <div class="container">
    <?php if(isset($success)){ ?><div class='alert alert-success' role='alert'> <?php echo $success; ?> </div> <?php } ?>
        <div class="row" style="margin-top: 50px;">
          <div class="col-sm-12 col-md-3 text-center">
            <div style="display: flex; flex-direction: column;">
            <div style="display: flex;">
                <i class="material-icons">location_on</i>
                <p>Novi Beograd - Zemunska 22</p>
            </div>
            <div style="display: flex;">
              <p><i class="material-icons">phone</i> 011 612-8-995, 011 612-8-996</p>
            </div>
            </div>
            <?php  if (!isset($_SESSION['type'])) {?> <a href="prijavise.php" class="btn btn-light"><i class="material-icons">mail_outline</i></a><?php }
              else{
                ?> <button type="button" class="btn btn-light" data-toggle="modal" data-target="#nBg"><i class="material-icons">mail_outline</i></button><?php
              }
            ?>
          </div>
          <div class="col-sm-12 col-md-3 text-center">
            <div style="display: flex; flex-direction: column;">
            <div style="display: flex;">
                <i class="material-icons">location_on</i>
                <p>Subotica - Batinska 34</p>
            </div>
            <div style="display: flex;">
              <p><i class="material-icons">phone</i> 024 456-1187, 456-1186</p>
            </div>
            </div>
            <?php  if (!isset($_SESSION['type'])) {?> <a href="prijavise.php" class="btn btn-light"><i class="material-icons">mail_outline</i></a><?php }
              else{
                ?> <button type="button" class="btn btn-light" data-toggle="modal" data-target="#su"><i class="material-icons">mail_outline</i></button><?php
              }
            ?>
            
          </div>
          <div class="col-sm-12 col-md-3 text-center">
            <div style="display: flex; flex-direction: column;">
            <div style="display: flex;">
                <i class="material-icons">location_on</i>
                <p>Subotica - Banijska 2</p>
            </div>
            <div style="display: flex;">
              <p><i class="material-icons">phone</i> 024 547-886</p>
            </div>
            </div>
            <?php  if (!isset($_SESSION['type'])) {?> <a href="prijavise.php" class="btn btn-light"><i class="material-icons">mail_outline</i></a><?php }
              else{
                ?><button type="button" class="btn btn-light" data-toggle="modal" data-target="#su2"><i class="material-icons">mail_outline</i></button><?php
              }
            ?>
            
          </div>
          <div class="col-sm-12 col-md-3 text-center">
            <div style="display: flex; flex-direction: column;">
            <div style="display: flex;">
                <i class="material-icons">location_on</i>
                <p>Novi Sad - Rumenički put 11</p>
            </div>
            <div style="display: flex;">
              <p><i class="material-icons">phone</i> 021 518-092</p>
            </div>
            </div>
            <?php  if (!isset($_SESSION['type'])) {?> <a href="prijavise.php" class="btn btn-light"><i class="material-icons">mail_outline</i></a><?php }
              else{
                ?> <button type="button" class="btn btn-light" data-toggle="modal" data-target="#ns"><i class="material-icons">mail_outline</i></button><?php
              }
            ?>
            
          </div>
        </div>
    </div>
    </div>
<?php include "includes/footer.php"; ?>