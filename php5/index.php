<?php

include 'database.php';

session_start();
if (!isset($_SESSION['loggedin'])) {

    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM users" ;

$result = $conn->query($sql);
if ($result->num_rows > 0){

echo '<h1>Data Pengguna</h1>';

    echo "<br>";
    echo "<a class='btn btn-primary' href=tambah_pengguna.php> Tambah_Pengguna </a>";
    
    echo "<br>";
    echo "<a class='btn btn-primary' href=login.php> Login </a>";

    echo "<br>";
    echo "<a class='btn btn-danger' href=login.php> Logout </a>";

    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col"> # </th>';
    echo '<th scope="col"> Aksi </th>';
    echo '<th scope="col"> Avatar </th>';
    echo '<th scope="col"> Name </th>';
    echo '<th scope="col"> Email </th>';
    echo '<th scope="col"> Phone </th>';
    echo '<th scope="col"> Role </th>';
    echo '</tr>';
    echo '</thead>';



    while($row = $result->fetch_assoc()){
        
        $id=$row['id'];
        $avatar=$row['avatar'];
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
        $role=$row['role'];



        echo '<tbody>';
        echo '<tr>';
        echo '<th scope="row">' .$id. '</th>';
        echo "<td> <a class='btn btn-primary' href=detail_pengguna.php> Detail </a> 
        <a class='btn btn-warning' href=edit_pengguna.php?updateid=$id> Edit </a> 
        <a class='btn btn-danger' href=hapus_pengguna.php?deleteid=$id> Hapus </a>
        </td>";
        echo '<td>' . $avatar. '</td>';
        echo '<td>' . $name. '</td>';
        echo '<td>' . $email. '</td>';
        echo '<td>' . $phone. '</td>';
        echo '<td>' . $role. '</td>';
        echo '</tbody>';
        echo '</tr>';
    }
    echo '</table>';


}


