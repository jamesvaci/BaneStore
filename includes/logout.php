<?php session_start(); ?>
<?php

		$_SESSION['username'] = null;
		$_SESSION['firstname'] = null;
		$_SESSION['lastname'] = null;
		$_SESSION['type'] = null;

		header("Location: ../index.php");

?>