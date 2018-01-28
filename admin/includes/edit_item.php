<?php

if(isset($_GET['pr_id'])){
$id = $_GET['pr_id'];
$id = mysqli_real_escape_string($connection, $id);
}

            $query = "SELECT * FROM products WHERE pr_id={$id}";
            $edit_the_post_by_id = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($edit_the_post_by_id)){
                $pr_id = $row['pr_id'];
                $pr_name = $row['pr_name'];
                $pr_desc = $row['pr_desc'];
                $pr_price = $row['pr_price'];
                $pr_newPrice = $row['pr_new_price'];
                $pr_cat = $row['pr_cat'];
                $pr_img1 = $row['pr_pic1'];
                $pr_href = $row['pr_href'];
          }
?>

             <?php 
                if(isset($_POST['update_product'])){
                    $update_product = $_POST['update_product'];
                    $update_product = mysqli_real_escape_string($connection, $update_product);
                    $post_proizvod = $_POST['proizvod'];
                    $post_proizvod = mysqli_real_escape_string($connection, $post_proizvod);
                    $post_description = $_POST['description'];
                    $post_description = mysqli_real_escape_string($connection, $post_description);
                    $post_cena = $_POST['cena'];
                    $post_cena = mysqli_real_escape_string($connection, $post_cena);
                    $post_new_cena = $_POST['new_cena'];
                    $post_new_cena = mysqli_real_escape_string($connection, $post_new_cena);
                    $post_kategorija_id = $_POST['post_kategorija'];
                    $post_kategorija_id = mysqli_real_escape_string($connection, $post_kategorija_id);
                    $post_href = $_POST['href'];
                    $post_href = mysqli_real_escape_string($connection, $post_href);

                    $post_image1 = $_FILES['slika1']['name'];
                    $post_image_temp1 = $_FILES['slika1']['tmp_name'];

                    move_uploaded_file($post_image_temp1, "../images/$post_image1");

                    $query = "UPDATE products SET ";
                    $query .= "pr_name = '{$post_proizvod}', ";
                    $query .= "pr_desc = '{$post_description}', ";
                    $query .= "pr_price = '{$post_cena}', ";
                    $query .= "pr_new_price = '{$post_new_cena}', ";
                    $query .= "pr_href = '{$post_href}', ";
                    $query .= "pr_cat = '{$post_kategorija_id}' ";
                    $query .= "WHERE pr_id = '{$pr_id}' ";
                    $update_item = mysqli_query($connection, $query);
              if(!$update_item){
                die('query failed' . mysqli_error($connection));
              }
              header("Refresh:0; proizvodi.php");
                }
?>
        <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <input type="text" class="form-control" id="proizvod" name="proizvod" placeholder="Ime proizvoda" value="<?php echo $pr_name; ?>">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="Description" name="description" placeholder="Description" value="<?php echo $pr_desc; ?>">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="cena" name="cena" placeholder="Cena" value="<?php echo $pr_price; ?>">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="cena" name="new_cena" placeholder="Cena" value="<?php echo $pr_newPrice; ?>">
      </div>
       <div class="form-group">
        <label for="sel1">Izaberi kategoriju</label>
        <select class="form-control" name="post_kategorija">
        <?php 

      $query = "SELECT * FROM categories ";
      $select_cat = mysqli_query($connection, $query);
      ?>
        <?php 
        // View all the users
        while($row = mysqli_fetch_assoc($select_cat)){
          $cat_id = $row['cat_id'];
          $cat_name = $row['cat_name'];
          echo "<option value='$cat_name'>{$cat_name}</option>";
        }
        ?>
        </select>
      </div> 
      <div class="form-group">
        <input type="file" class="form-control-file" id="slika1" name="slika1" placeholder="Glavna slika">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="href" name="href" placeholder="Link" value="<?php echo $pr_href; ?>">
      </div>
      <button type="submit" name="update_product" class="btn btn-primary">Izmeni</button>
    </form>