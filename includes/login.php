<?php 
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$email = mysqli_real_escape_string($connection, $email);
	$password = mysqli_real_escape_string($connection, $password);

	$query0 = "SELECT * FROM users WHERE email = '{$email}' AND active='0' ";
	$checkIfVerify = mysqli_query($connection, $query0);
	if($checkIfVerify){
		$fmsg = "Doslo je do greske, molimo Vas potrvrdite da li ste verifikovali Vas mail";
	}

	$query = "SELECT * FROM users WHERE email = '{$email}' AND active='1' ";
	$select_user_from_query = mysqli_query($connection, $query);
	if(!$select_user_from_query){
		die("something went wrong" . mysqli_error($connection));
	}else{

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


		if(password_verify($password, $db_password)){

			$_SESSION['id'] = $db_id;
			$_SESSION['email'] = $db_email;
			$_SESSION['firstname'] = $db_firstname;
			$_SESSION['lastname'] = $db_lastname;
			$_SESSION['type'] = $db_type;
			header("Location: ./index");
			
		} else{
			$fmsg = "Pogresan mail ili password, ako ste zaboravili password kliknite <a href='http://banesu.rs/baneonline/resetujlozinku.php'> ovde </a>";
		}
		}
	}

}
?>