  <body>
      <nav class="navbar navbar-dark bg-dark" style="background-color: #3853D8!important;">
        <div class=" collapse navbar-collapse container d-flex justify-content-between">
          <a href="index.php" class="navbar-brand"><i class="fa fa-shopping-bag profile_icons" aria-hidden="true"></i>Bane Online</a>
          <ul class="nav justify-content-end ">
            <li class="nav-item">
              <a class="nav-link text-white" href="kontakt.php"><i class="fa fa-map-marker profile_icons" aria-hidden="true"></i>Kontakt</a>
            </li>
            <?php
            // $id = $_SESSION["id"];

            // $cartQuantity = "SELECT * FROM cart WHERE user_id = {$id} ";

            // $queryFinal = mysqli_query($connection, $cartQuantity);

            // $num_rows = mysqli_num_rows($queryFinal);
            
            // $totalProducts = $num_rows;

            // if (isset($_GET['product_id_add'])) {
            //   $product_id = $_GET['product_id_add'];
            //   $product_id = mysqli_real_escape_string($connection, $product_id);
            //   $loc = $_GET['loc'];
            //   $loc = mysqli_real_escape_string($connection, $loc);
            //   $product_price = $_GET['product_price'];
            //   $product_price = mysqli_real_escape_string($connection, $product_price);
            //   $product_name = $_GET['product_name'];
            //   $product_name = mysqli_real_escape_string($connection, $product_name);
            //   $cartAdd = "INSERT INTO cart (user_id, product_id, product_name, product_quantity, pr_price) VALUES ({$id}, {$product_id}, '{$product_name}', 1, {$product_price})";
            //   $queryAdd = mysqli_query($connection, $cartAdd);
            //   if(!$queryAdd){
            //     die("something went wrong" . mysqli_error($connection));
            //   }
            //   header("Refresh:0; prodavnica.php");
            // }



            // if (isset($_GET['product_id_subtract'])) {
            //   $product_id = $_GET['product_id_subtract'];
            //   $product_id = mysqli_real_escape_string($connection, $product_id);
            //   $loc = $_GET['loc'];
            //   $loc = mysqli_real_escape_string($connection, $loc);
            //   $cartErase = "DELETE FROM cart ";
            //   $cartErase .= "WHERE user_id = {$id} AND product_id = {$product_id} limit 1";
            //   $queryErase = mysqli_query($connection, $cartErase);
            //   if(!$queryErase){
            //     die("something went wrong " . mysqli_error($connection));
            //   }
            //   switch ($loc) {
            //     case 2:
            //       header("Refresh:0; cart.php");
            //       break;
                
            //     default:
            //       header("Refresh:0; prodavnica.php");
            //       break;
            //   }
            // }

            ?>
            <?php

            if (!isset($_SESSION['type'])) {
              echo '
            <li class="nav-item">
              <a class="nav-link text-white" href="prijavise.php"><i class="fa fa-sign-in profile_icons" aria-hidden="true"></i>Prijavi se</a>
            </li>';
            }
            ?>
            <?php
            if (isset($_SESSION['type'])) {
              if (isset($_SESSION['type']) === 'admin') {
              echo '<li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          '. $_SESSION['firstname'].' '. $_SESSION['lastname'] .'
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="admin/index.php">Admin</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="includes/logout.php">Odjavi se</a>
        </div>
      </li>';
              }else{
            $id = $_SESSION["id"];

            $cartQuantity = "SELECT * FROM cart WHERE user_id = {$id} ";

            $queryFinal = mysqli_query($connection, $cartQuantity);

            $num_rows = mysqli_num_rows($queryFinal);
            
            $totalProducts = $num_rows;

            // Moved to AJAX add_pr

            // if (isset($_GET['product_id_add'])) {
            //   $product_id = $_GET['product_id_add'];
            //   $product_id = mysqli_real_escape_string($connection, $product_id);
            //   $loc = $_GET['loc'];
            //   $loc = mysqli_real_escape_string($connection, $loc);
            //   $product_price = $_GET['product_price'];
            //   $product_price = mysqli_real_escape_string($connection, $product_price);
            //   $product_name = $_GET['product_name'];
            //   $product_name = mysqli_real_escape_string($connection, $product_name);
            //   $cartAdd = "INSERT INTO cart (user_id, product_id, product_name, product_quantity, pr_price) VALUES ({$id}, {$product_id}, '{$product_name}', 1, {$product_price})";
            //   $queryAdd = mysqli_query($connection, $cartAdd);
            //   if(!$queryAdd){
            //     die("something went wrong" . mysqli_error($connection));
            //   }
            //   header("Refresh:0; index.php");
            // }


            // Moved to AJAX remove_pr

            // if (isset($_GET['product_id_subtract'])) {
            //   $product_id = $_GET['product_id_subtract'];
            //   $product_id = mysqli_real_escape_string($connection, $product_id);
            //   $loc = $_GET['loc'];
            //   $loc = mysqli_real_escape_string($connection, $loc);
            //   $cartErase = "DELETE FROM cart ";
            //   $cartErase .= "WHERE user_id = {$id} AND product_id = {$product_id} limit 1";
            //   $queryErase = mysqli_query($connection, $cartErase);
            //   if(!$queryErase){
            //     die("something went wrong " . mysqli_error($connection));
            //   }
            //   switch ($loc) {
            //     case 2:
            //       header("Refresh:0; cart.php");
            //       break;
                
            //     default:
            //       header("Refresh:0; index.php");
            //       break;
            //   }
            // }

            $cartQuantity = "SELECT * FROM cart WHERE user_id = {$id} ";

            $queryFinal = mysqli_query($connection, $cartQuantity);

            $num_rows = mysqli_num_rows($queryFinal);
            
            $totalProducts = $num_rows;

            $query = "SELECT * FROM users WHERE user_id = {$id}";
            $edit_the_user_by_id = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($edit_the_user_by_id)){
                $id = $row['user_id'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $city = $row['city'];
                $address = $row['address'];
                $number = $row['number'];
                $phone = $row['phone'];
          }
                echo '<li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user profile_icons" aria-hidden="true"></i>
          '. $firstname .' '. $lastname .'
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="userProfile.php"><i class="fa fa-user-circle-o profile_icons" aria-hidden="true"></i>Profil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="includes/logout.php"><i class="fa fa-sign-out profile_icons" aria-hidden="true"></i>Odjavi se</a>
        </div>
      </li>
      <li class="nav-item">
              <a id="totalValue" class="nav-link text-white" href="cart.php"><i class="fa fa-shopping-cart profile_icons" aria-hidden="true"></i>' . $totalProducts . '</a>
            </li>
      ';
              }
            }
            ?>
            
          </ul>
        </div>
      </nav>