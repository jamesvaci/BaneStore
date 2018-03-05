<?php 
if(isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$verify = md5($email);
	$lastname = mysqli_real_escape_string($connection, $lastname);
	$firstname = mysqli_real_escape_string($connection, $firstname);
	$email = mysqli_real_escape_string($connection, $email);
	$password = mysqli_real_escape_string($connection, $password);

	if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
		$emptyFeild = "Molimo Vas popunite sva polja";
	}else{
	$queryE = "SELECT * FROM users WHERE email = '{$email}' ";
	$countQuery = mysqli_query($connection, $queryE);
	$count = mysqli_num_rows($countQuery);
	if(!$countQuery){
		$wrong = 'Doslo je do greske, molimo Vas da pokusate ponovo';
		die("something went wrong" . mysqli_error($connection));
	}else{
	        if ($count === 0) {
	        		$password = password_hash($password, PASSWORD_BCRYPT, array('potato' => 10));

					$query = "INSERT INTO users(firstname, lastname, email, password, type, verify, active) VALUES('$firstname', '$lastname','$email','$password', 'user', '$verify', '0')";
					$register_user = mysqli_query($connection, $query);
					if(!$register_user){
						$wrong = 'Doslo je do greske, molimo Vas da pokusate ponovo';
						die("something went wrong" . mysqli_error($connection));
					}else{
						$query = "SELECT * FROM users WHERE email = '{$email}' ";
						$select_user_from_query = mysqli_query($connection, $query);
						if(!$select_user_from_query){
							die("something went wrong" . mysqli_error($connection));
						}

						while ($row = mysqli_fetch_array($select_user_from_query)) {
							$id = $row['user_id'];
						}
						$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>  <title>Registracija</title></head><body<p>Za potvrdu registracije kliknite <a href="http://banesu.rs/baneonline/verify.php?key=' . $verify . '&id=' . $id . '">ovde</a> Ukoliko niste zahtevali ovu verifikaciju, molimo Vas ignorisite ovaj mail</p>
						</body>
						</html>
						';
						$successMail = 'Uspesna registracija, molimo Vas da proverite Vas email';
						mail($email,"Registracija za BaneOnline", $message );
				    }
	        }else{
	        	 header("Location: ./register-f.php");
	        }
	    }
	}


}
?>