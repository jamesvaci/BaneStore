<?php

include('includes/db.php');
$key = $_GET['key'];
$key = mysqli_real_escape_string($connection, $key);
$id = $_GET['id'];
$id = mysqli_real_escape_string($connection, $id);

$sql = "SELECT * FROM users WHERE user_id='{$id}' AND verify='{$key}' ";

$res = mysqli_query($connection, $sql);

$count = mysqli_num_rows($res);
if ($count == 1) {
	$usql = "UPDATE users SET active='1' WHERE user_id='{$id}' ";

	$usqlT = mysqli_query($connection, $usql);

	header('Location: prijavise.php');
}else{
	echo "Something went wrong please turn your brain";
}
?>