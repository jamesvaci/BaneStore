			<a href="kategorije.php?cat=add_cat">
	        	<button class="btn btn-info" style="display: flex; margin-top: 10px;">
	        		<i class="material-icons">add_circle_outline</i>
	        			Dodaj novu kategoriju
	        	</button>
        	</a>
	        <table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Ime</th>
			    </tr>
			  </thead>
			  <tbody>
			  <?php 

			  $query = "SELECT * FROM categories ";
			  $select_users = mysqli_query($connection, $query);
			  ?>
			    <?php 
			    // View all the categories
			    while($row = mysqli_fetch_assoc($select_users)){
			    	$cat_id = $row['cat_id'];
			    	$cat_name = $row['cat_name'];
			    	echo "<tr>";
			    	echo "<td>{$cat_name}</td>";
			    	echo "<td><a href='kategorije.php?cat=edit_cat&cat_id={$cat_id}'><button class='btn btn-info'><i class='material-icons'>mode_edit</i></button></a></td>";
			    	echo "<td><a href='kategorije.php?delete={$cat_id}'><button class='btn btn-danger'><i class='material-icons'>delete</i></button></a></td>";
			    	echo "</tr>";
			    }
			    ?>
			    <tr>
			  </tbody>
			</table>

		  <!-- Delete the item -->
		  <?php 
		  if (isset($_GET['delete'])) {
		  	global $connection;
		  	$cat_id = $_GET['delete'];
            $cat_id = mysqli_real_escape_string($connection, $cat_id);
		  	$query = "DELETE FROM categories WHERE cat_id = {$cat_id} ";
		  	$delete_item = mysqli_query($connection, $query);
		  	header("Refresh:0; kategorije.php");
		  }

		   ?>