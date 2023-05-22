<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "khotimjob27";
$con = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_error()) {
    echo "Gagal terhubung MySQL: " . mysqli_connect_error();
}
?>