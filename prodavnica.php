<?php include "includes/header.php"; ?>

<?php include "includes/header-nav.php"; ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <main role="main" style=" ">

          <img src="images/background.jpg" style="width: 100%;">

      <div class="album text-muted">
        <div class="container">
          <div class="row">
          <?php 

      $query = "SELECT * FROM products ";
      $select_products = mysqli_query($connection, $query);
      ?>
        <?php 
        // View all the users
        while($row = mysqli_fetch_assoc($select_products)){
          $pr_id = $row['pr_id'];
          $pr_name = $row['pr_name'];
          $pr_desc = $row['pr_desc'];
          $pr_price = $row['pr_price'];
          $pr_newPrice = $row['pr_new_price'];
          $pr_cat = $row['pr_cat'];
          $pr_img1 = $row['pr_pic1'];
          $pr_img2 = $row['pr_pic2'];
          $pr_img3 = $row['pr_pic3'];
          $loc = 1;
          $id= $_SESSION['id'];
          $prQuery = "SELECT * FROM cart WHERE user_id = {$id} AND product_id = {$pr_id} ";
          $numOfProduct = mysqli_query($connection, $prQuery);
          $countProduct = mysqli_num_rows($numOfProduct);
          $totalCount = $countProduct;
          ?>
            <div class="col-sm-12 col-md-4" style="margin-top: 25px;">
            <div id="something" action=''></div>
              <div class="box">
                <div class="crop">
                  <img src="images/<?php echo $pr_img1; ?>">
                </div>
                <div style="display: flex;">
                  <div style="padding: 12px; float: left;">
                    <p><?php echo $pr_desc; ?></p>
                              <p><a href="">More info</a></p>
                              </div>
                  <div class="blue-box">
                    <div class="cena">
                      <h6 class="text-white">Cena</h6>
                      <h5 class="text-white stroke"><?php echo $pr_price . " rsd"; ?></h5>
                    </div>
                  <h3 class="text-white">
                    <b><?php echo number_format($pr_price, 0, '.', ' ') . ",00"; ?> rsd</b>
                  </h3>
                  <div class="text-white quantity">
                    <ul class="flex-container">
                    <?php 
                    if (!isset($_SESSION['type'])) {
                      echo '
                    <li class="flex-item"><a class="no-style" href="prijavise.php"><i class="material-icons" style="margin-top: 9px;">remove_circle</i></a></li>
                      <li class="flex-item"><h2>0</h2></li>
                      <li class="flex-item"><a class="no-style" href="prijavise.php"><i class="material-icons" style="margin-top: 9px;">add_circle</i></a></li>';
                    }else{
                      echo '<li id="remove" class="flex-item"><a class="no-style" href="prodavnica.php?product_id_subtract=' . $pr_id .'&product_price=' . $pr_price. '&product_name=' . $pr_name . '&loc=' . $loc . '"><i class="material-icons" style="margin-top: 9px;">remove_circle</i></a></li>
                      <li class="flex-item"><h2>' . $totalCount . '</h2></li>
                      <li pid='.$pr_id.' pprice='.$pr_price.' pname='.$pr_name.' class="flex-item add"><a class="no-style" href="prodavnica.php?product_id_add=' . $pr_id .'&product_price=' . $pr_price . '&product_name=' . $pr_name . '&loc=' . $loc .'"><i class="material-icons" style="margin-top: 9px;">add_circle</i></a></li>';
                    }
                    ?>
                      
                    </ul>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
        }
        ?>
          </div>

        </div>
      </div>

    </main>
<?php include "includes/footer.php"; ?>