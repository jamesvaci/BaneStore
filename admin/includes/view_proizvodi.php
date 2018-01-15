        <a href="proizvodi.php?source=add_item">
        	<button class="btn btn-info" style="display: flex; margin-top: 10px;">
        		<i class="material-icons">add_circle_outline</i>
        			Dodaj novi proizvod
        	</button>
        </a>
        <table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Proizvod</th>
		      <th scope="col">Description</th>
		      <th scope="col">Cena</th>
		      <th scope="col">Nova Cena</th>
		      <th scope="col">Kategorija</th>
		      <th scope="col">Image 1</th>
		      <th scope="col">Image 2</th>
		      <th scope="col">Image 3</th>
		    </tr>
		  </thead>
		  <tbody>
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
		    	echo "<tr>";
		    	echo "<td>{$pr_id}</td>";
		    	echo "<td>{$pr_name}</td>";
		    	echo "<td>{$pr_desc}</td>";
		    	echo "<td>{$pr_price}</td>";
		    	echo "<td>{$pr_newPrice}</td>";
		    	echo "<td>{$pr_cat}</td>";
		    	echo "<td><img src='../images/{$pr_img1}' style='width:100px;'></td>";
		    	echo "<td><img src='../images/{$pr_img2}' style='width:100px;'></td>";
		    	echo "<td><img src='../images/{$pr_img3}' style='width:100px;'></td>";
		    	echo "<td><a href='proizvodi.php?delete={$pr_id}'><button class='btn btn-danger'><i class='material-icons'>delete</i></button></a></td>";
		    	echo "<td><a href='proizvodi.php?source=edit_item&pr_id={$pr_id}'><button class='btn btn-info'><i class='material-icons'>mode_edit</i></button></a></td>";
		    	echo "</tr>";
		    }
		    ?>
		    <tr>
		  </tbody>

		  <!-- Delete the item -->
		  <?php 
		  if (isset($_GET['delete'])) {
		  	global $connection;
		  	$pr_id = $_GET['delete'];
            $pr_id = mysqli_real_escape_string($connection, $pr_id);
		  	$query = "DELETE FROM products WHERE pr_id = {$pr_id} ";
		  	$delete_item = mysqli_query($connection, $query);
		  	header("Refresh:0; proizvodi.php");
		  }

		   ?>
		</table>