<?php

if(isset($_GET['cat_id'])){
$cat_id = $_GET['cat_id'];
$cat_id = mysqli_real_escape_string($connection, $cat_id);
}

            $query = "SELECT * FROM categories WHERE cat_id={$cat_id}";
            $edit_the_cat_by_id = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($edit_the_cat_by_id)){
                $cat_name = $row['cat_name'];
          }
?>

             <?php 
                if(isset($_POST['update_cat'])){
                    $update_cat = $_POST['update_cat'];
                    $update_cat = mysqli_real_escape_string($connection, $update_cat);
                    $cat_name = $_POST['cat_name'];
                    $cat_name = mysqli_real_escape_string($connection, $cat_name);

                    $query = "UPDATE categories SET ";
                    $query .= "cat_name = '{$cat_name}' ";
                    $query .= "WHERE cat_id = '{$cat_id}' ";
                    $update_categ = mysqli_query($connection, $query);

                    if(!$update_categ){
                      die('query failed' . mysqli_error($connection));
                    }
              header("Refresh:0; kategorije.php");
                }
?>
        <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Ime kategorije" value="<?php echo $cat_name; ?>">
      </div>
      <button type="submit" name="update_cat" class="btn btn-primary">Izmeni</button>
    </form>