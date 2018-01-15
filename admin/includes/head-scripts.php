<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
    <title>Admin Page</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/perfect-scrollbar.css" rel="stylesheet">
    <link href="./css/chartist.min.css" rel="stylesheet">
    <link href="./css/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="./css/c3.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/dashboard2.css" rel="stylesheet">
    <link href="./css/default-dark.css" id="theme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php include "./../includes/db.php"; ?>
    <?php ob_start(); ?>
    <?php session_start(); ?>
    <?php

if (!isset($_SESSION['type'])) {
    header("Location: ../index.php");
}
if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] !== 'admin') {
        header("Location: ../index.php");
    }else if ($_SESSION['type'] === 'admin') {
        
    }else{
        echo "potato timer";
    }
}


    ?>
</head>