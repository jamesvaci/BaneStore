<?php

$db['db_host'] = "db1.cpanel.yu.net";
$db['db_user'] = "banesu_online";
$db['db_pass'] = "Cemd?wWnq)08";
$db['db_name'] = "banesu_store";

foreach($db as $key => $value){
	define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
/*
if(!$connection){
    echo "please show the error ";
}*/
?>
