<!DOCTYPE html>
<html lang="en">
<?php include "includes/head-scripts.php";?>

<body class="fix-header fix-sidebar card-no-border">
        <?php include "includes/side-nav.php";?>
        <div class="container">
        <table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Ime</th>
		      <th scope="col">Prezime</th>
		      <th scope="col">Email</th>
		      <th scope="col">Grad</th>
		      <th scope="col">Ulica</th>
		      <th scope="col">Broj</th>
		      <th scope="col">Mobilni</th>
		      <th scope="col">Vrsta korisnika</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php 

		  $query = "SELECT * FROM users ";
		  $select_users = mysqli_query($connection, $query);
		  ?>
		    <?php 
		    // View all the users
		    while($row = mysqli_fetch_assoc($select_users)){
		    	$user_id = $row['id'];
		    	$user_name = $row['firstname'];
		    	$user_last = $row['lastname'];
		    	$user_email = $row['email'];
		    	$user_city = $row['city'];
		    	$user_address = $row['address'];
		    	$user_number = $row['number'];
		    	$user_phone = $row['phone'];
		    	$user_type = $row['type'];
		    	echo "<tr>";
		    	echo "<td>{$user_id}</td>";
		    	echo "<td>{$user_name}</td>";
		    	echo "<td>{$user_last}</td>";
		    	echo "<td>{$user_email}</td>";
		    	echo "<td>{$user_city}</td>";
		    	echo "<td>{$user_address}</td>";
		    	echo "<td>{$user_number}</td>";
		    	echo "<td>{$user_phone}</td>";
		    	echo "<td>{$user_type}</td>";
		    	echo "<td><a href='#'>Admin</a></td>";
		    	echo "<td><a href='#'>User</a></td>";
		    	echo "<td><a href='#'><button class='btn btn-danger'><i class='material-icons'>delete</i></button></a></td>";
		    	echo "<td><a href='#'><button class='btn btn-info'><i class='material-icons'>mode_edit</i></button></a></td>";
		    	echo "</tr>";
		    }
		    ?>
		    <tr>
		  </tbody>
		</table>
</div>
<?php include "includes/footer-scripts.php"?>