<?php

$host = "localhost";
$username   = "root";
$password   = "";
$database   = "arkatama_store";

//OOP
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error){
    die('koneksi gagal: ' . $conn->connect_error);
}
echo 'koneksi berhasil';

echo '<br>';



//insert data products


//Procedural
/* $conn = mysqli_connect($host, $username, $password);

if (mysqli_error($conn)){
    die('koneksi gagal: ' . mysqli_error($conn));
}
echo 'koneksi berhasil'; */
