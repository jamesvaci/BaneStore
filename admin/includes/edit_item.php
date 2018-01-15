<?php

if(isset($_GET['pr_id'])){
$id = $_GET['pr_id'];
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
                $pr_img2 = $row['pr_pic2'];
                $pr_img3 = $row['pr_pic3'];
          }
?>

             <?php 
                if(isset($_POST['update_product'])){
                    $update_product = $_POST['update_product'];
                    $post_proizvod = $_POST['proizvod'];
                    $post_description = $_POST['description'];
                    $post_cena = $_POST['cena'];
                    $post_new_cena = $_POST['new_cena'];
                    $post_kategorija = $_POST['kategorija'];

                    $post_image1 = $_FILES['slika1']['name'];
                    $post_image_temp1 = $_FILES['slika1']['tmp_name'];

                    $post_image2 = $_FILES['slika2']['name'];
                    $post_image_temp2 = $_FILES['slika2']['tmp_name'];

                    $post_image3 = $_FILES['slika3']['name'];
                    $post_image_temp3 = $_FILES['slika3']['tmp_name'];

                    move_uploaded_file($post_image_temp1, "../images/$post_image1");
                    move_uploaded_file($post_image_temp2, "../images/$post_image2");
                    move_uploaded_file($post_image_temp3, "../images/$post_image3");

                    $query = "UPDATE products SET ";
                    $query .= "pr_name = '{$post_proizvod}', ";
                    $query .= "pr_desc = '{$post_description}', ";
                    $query .= "pr_price = '{$post_cena}', ";
                    $query .= "pr_new_price = '{$post_new_cena}', ";
                    $query .= "pr_cat = '{$post_kategorija}' ";
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
        <input type="text" class="form-control" id="kategorija" name="kategorija" placeholder="Kategorija" value="<?php echo $pr_cat; ?>">
      </div>
      <div class="form-group">
        <input type="file" class="form-control-file" id="slika1" name="slika1" placeholder="Glavna slika">
      </div>
      <div class="form-group">
        <input type="file" class="form-control-file" id="slika2" name="slika2" placeholder="Druga slika">
      </div>
      <div class="form-group">
        <input type="file" class="form-control-file" id="slika3" name="slika3" placeholder="Treca slika">
      </div>
      <button type="submit" name="update_product" class="btn btn-primary">Izmeni</button>
    </form>