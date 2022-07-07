<?php include_once "../db_config.php" ?>
<!-- <?php //include_once dirname(dirname(__DIR__)) . "/db_config.php" 
        ?>  second method -->

<?php

if (!isset($_SESSION['user_role'])) {

    header("Location: ../../../../index.php");
} else if ($_SESSION['user_role'] !== 'admin') {

    header("Location: ../../../../index.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>E-commerce · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- bootstrap icon cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>

<body>