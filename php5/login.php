<?php

include 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h1>Login</h1>

    <form action="login_proc.php" method="post">

    <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>

    <button type="submit" class="btn btn-primary" value="Login">Submit</button>
    </form>

</body>
</html>