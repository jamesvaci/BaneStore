<?php include("db.php");?>
<?php session_start(); ?>
<?php 
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$email = mysqli_real_escape_string($connection, $email);
	$password = mysqli_real_escape_string($connection, $password);

	$query = "SELECT * FROM users WHERE email = '{$email}' ";
	$select_user_from_query = mysqli_query($connection, $query);
	if(!$select_user_from_query){
		die("something went wrong" . mysqli_error($connection));
	}

	while ($row = mysqli_fetch_array($select_user_from_query)) {
		$db_id = $row['user_id'];
		$db_email = $row['email'];
		$db_password = $row['password'];
		$db_firstname = $row['firstname'];
		$db_lastname = $row['lastname'];
		$db_city = $row['city'];
		$db_address = $row['address'];
		$db_number = $row['number'];
		$db_phone = $row['phone'];
		$db_type = $row['type'];
	}

	if(password_verify($password, $db_password)){

		$_SESSION['id'] = $db_id;
		$_SESSION['email'] = $db_email;
		$_SESSION['firstname'] = $db_firstname;
		$_SESSION['lastname'] = $db_lastname;
		$_SESSION['type'] = $db_type;
		header("Location: ../admin/index.php");
		
	} else{
		header("Location: ../prijavise-f.php");
	}
}
?>