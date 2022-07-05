<?php

$con = mysqli_connect('localhost', 'root', '', 'e-commers');

if (!$con) 
{
    die("Database connection failed");
}

session_start();
?>