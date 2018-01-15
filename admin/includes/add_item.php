            <?php 
                if(isset($_POST['add_product'])){
                    $create_the_product = $_POST['add_product'];
                    $post_proizvod = $_POST['proizvod'];
                    $post_description = $_POST['description'];
                    $post_cena = $_POST['cena'];
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

                    $query = "INSERT INTO products (pr_name, pr_desc, pr_price, pr_cat, pr_pic1, pr_pic2, pr_pic3) ";
                    $query .= "VALUES('{$post_proizvod}', '{$post_description}','{$post_cena}', '{$post_kategorija}', '{$post_image1}', '{$post_image2}', '{$post_image3}') ";

                    $create_product_query = mysqli_query($connection, $query);
              header("Refresh:0; proizvodi.php");
                }
?>
        <form action="" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <input type="text" class="form-control" id="proizvod" name="proizvod" placeholder="Ime proizvoda">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" id="Description" name="description" placeholder="Description">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" id="cena" name="cena" placeholder="Cena">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" id="kategorija" name="kategorija" placeholder="Kategorija">
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
		  <button type="submit" name="add_product" class="btn btn-primary">Dodaj</button>
		</form>