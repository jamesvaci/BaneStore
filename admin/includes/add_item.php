            <?php 
                if(isset($_POST['add_product'])){
                    $create_the_product = $_POST['add_product'];
                    $create_the_product = mysqli_real_escape_string($connection, $create_the_product);
                    $post_proizvod = $_POST['proizvod'];
                    $post_proizvod = mysqli_real_escape_string($connection, $post_proizvod);
                    $post_description = $_POST['description'];
                    $post_description = mysqli_real_escape_string($connection, $post_description);
                    $post_cena = $_POST['cena'];
                    $post_cena = mysqli_real_escape_string($connection, $post_cena);
                    $post_kategorija_id = $_POST['post_kategorija'];
                    $post_kategorija = mysqli_real_escape_string($connection, $post_kategorija);
                    $post_href = $_POST['href'];
                    $post_href = mysqli_real_escape_string($connection, $post_href);

                    $post_image1 = $_FILES['slika1']['name'];
                    $post_image_temp1 = $_FILES['slika1']['tmp_name'];

                    move_uploaded_file($post_image_temp1, "../images/$post_image1");

                    $query = "INSERT INTO products (pr_name, pr_desc, pr_price, pr_cat, pr_pic1, pr_href) ";
                    $query .= "VALUES('{$post_proizvod}', '{$post_description}','{$post_cena}', '{$post_kategorija_id}', '{$post_image1}', '{$post_href}') ";

                    $create_product_query = mysqli_query($connection, $query);
              if(!$create_product_query){
                die('query failed' . mysqli_error($connection));
              }
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
		    <input type="text" class="form-control" id="href" name="href" placeholder="Link">
		  </div>
		  <button type="submit" name="add_product" class="btn btn-primary">Dodaj</button>
		</form>