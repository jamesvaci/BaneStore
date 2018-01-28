<?php 

// Contact the saloni
function sendMail($msg, $email){
$email - mysqli_real_eskape_string($connection, $email);
$msg - mysqli_real_eskape_string($connection, $msg);
$msg = wordwrap($msg,70);
mail($email,"New Messege",$msg);
}

// send Registration Mail
function regMail($msg, $email){
$email - mysqli_real_eskape_string($connection, $email);
$name - mysqli_real_eskape_string($connection, $msg);
$msg = wordwrap($msg,70);
mail($email,"New Messege",$msg);
}

?>