<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <form action="OutputGet.php" method="get">
        <b>Nama</b> </br> <input type="text" name="Nama"> </br>
        <b>Umr</b> </br> <input type="text" name="Umur"> </br>
    </form>
</body>
</html>
=======
<?php

include 'database.php';

$sql = "SELECT * FROM users" ;

$result = $conn->query($sql);
if ($result->num_rows > 0){

echo '<h1>Data Pengguna</h1>';

    echo "<br>";
    echo "<td> <a class='btn btn-primary' href=detail_pengguna.php> Tambah_Pengguna </a>";


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



>>>>>>> 359df8012f6d7552ce6098040553e9150b75670e