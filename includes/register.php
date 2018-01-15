<?php include("db.php");?>
<?php session_start(); ?>
<?php 
if(isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$lastname = mysqli_real_escape_string($connection, $lastname);
	$firstname = mysqli_real_escape_string($connection, $firstname);
	$email = mysqli_real_escape_string($connection, $email);
	$password = mysqli_real_escape_string($connection, $password);

	if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
		echo "Molimo Vas popunite sva polja";
	}else{
	$queryE = "SELECT * FROM users WHERE email = '{$email}' ";
	$countQuery = mysqli_query($connection, $queryE);
	$count = mysqli_num_rows($countQuery);
	if(!$countQuery){
		die("something went wrong" . mysqli_error($connection));
	}else{
	        if ($count === 0) {
	        		$password = password_hash($password, PASSWORD_BCRYPT, array('potato' => 10));

					$query = "INSERT INTO users(firstname, lastname, email, password, type) VALUES('$firstname', '$lastname','$email','$password', 'user')";
					$register_user = mysqli_query($connection, $query);
					if(!$register_user){
						die("something went wrong" . mysqli_error($connection));
					}else{

				        header("Location: ../prijavise.php");
				    }
	        }else{
	        	 header("Location: ../register-f.php");
	        }
	    }
	}


}
?>