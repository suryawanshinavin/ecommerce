<?php

$con = mysqli_connect('localhost', 'root', 'root', 'ecommerce');

if (!$con) 
{
    die("Database connection failed");
}

session_start();
?>