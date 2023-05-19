<?php

include 'database.php';

if(isset($_POST["submit"])){
    $name=$_POST['name'];
    $role=$_POST['role'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $avatar=$_POST['avatar'];

    $sql="insert into users(name, role, password, email, phone, address, avatar)
    values('$name', '$role', '$password', '$email', '$phone', '$address', '$avatar')";
    $result=mysqli_query($conn, $sql);
    if($result){
        echo "Data inserted successfully";
    }else{
        die(mysqli_error($conn));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>
</head>
<body>

    <h1>Tambah Pengguna</h1>
    
    <form method="post">
    
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="row">
        <div class="col">
            <label for="exampleInputEmail1" class="form-label">Role</label>
                <select class="form-control" aria-label="Default select example" id="role" name="role">
                    <option value="admin">Admin</option>
                    <option value="staff">Staff</option>
                </select>
        </div>
        <div class="col">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="col">
            <label for="exampleInputEmail1" class="form-label">Telp</label>
            <input type="text" class="form-control" name="phone">
        </div>
    </div>

    <br>

    <div class="form-floating">
        <label for="exampleInputEmail1" class="form-label">Alamat lengkap</label>
        <textarea class="form-control" name="address"></textarea>
    </div>

    <br>

    <div class="form-floating">
        <label for="exampleInputEmail1" class="form-label">Unggah foto</label>
        <input type="file" class="form-control" name="avatar"></input>
    </div>

    <br>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

    </form>

</body>
</html>