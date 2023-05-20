<?php

echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">';

$host = "localhost";
$username   = "root";
$password   = "";
$database   = "arkatama_store";

//OOP
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error){
    die('koneksi gagal: ' . $conn->connect_error);
}


echo '<br>';