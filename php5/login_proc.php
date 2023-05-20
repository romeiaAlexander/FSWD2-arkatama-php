<?php

include 'database.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1){
    echo "Login Successful";
    echo "<script>window.location.href = 'index.php';</script>";
}else {
    echo "Invalid email or password";
    echo "<script>window.location.href = 'login.php';</script>";
}

session_start();
$_SESSION['loggedin'] = true;

header("Location: index.php");
exit();