<?php

function findUser($con, string $name)
{
    $query = "SELECT * FROM `admin_user` WHERE username = '$name'";
    $result = mysqli_query($con, $query);

    if (!$result) {
        die('Query failed ' . mysqli_error($con));
    }

    $row = mysqli_fetch_assoc($result);
    return $row;
}


