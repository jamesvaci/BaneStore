            <?php 
                if(isset($_POST['add_product'])){
                    $create_the_product = $_POST['add_product'];
                    $post_proizvod = $_POST['proizvod'];
                    $post_description = $_POST['description'];
                    $post_cena = $_POST['cena'];
                    $post_kategorija = $_POST['kategorija'];
                    $post_href = $_POST['href'];

                    $post_image1 = $_FILES['slika1']['name'];
                    $post_image_temp1 = $_FILES['slika1']['tmp_name'];

                    move_uploaded_file($post_image_temp1, "../images/$post_image1");

                    $query = "INSERT INTO products (pr_name, pr_desc, pr_price, pr_cat, pr_pic1, pr_href, pr_pic3) ";
                    $query .= "VALUES('{$post_proizvod}', '{$post_description}','{$post_cena}', '{$post_kategorija}', '{$post_image1}', '{$post_href}') ";

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
		    <input type="text" class="form-control" id="href" name="href" placeholder="Link">
		  </div>
		  <button type="submit" name="add_product" class="btn btn-primary">Dodaj</button>
		</form>