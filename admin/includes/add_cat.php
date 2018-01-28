            <?php 
                if(isset($_POST['add_cat'])){
                    $cat_name = $_POST['cat_name'];
                    $cat_name = mysqli_real_escape_string($connection, $cat_name);

                    $query = "INSERT INTO categories (cat_name) ";
                    $query .= "VALUES('{$cat_name}') ";

                    $create_product_query = mysqli_query($connection, $query);
              header("Refresh:0; kategorije.php");
                }
?>
        <form action="" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Ime kategorije">
		  </div>
		  <button type="submit" name="add_cat" class="btn btn-primary">Dodaj</button>
		</form>