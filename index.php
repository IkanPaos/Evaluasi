<?php
include 'proses_login.php';

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
    <center>
        <form method="POST">
            <h2>Halaman Login</h2>
            <br>
            <br>
            Username : <br>
            <input type="text" name="username"><br>
            Password : <br>
            <input type="password" name="password"><br>
            <br>
            <button type="submit" name="login">Login</button>
        </form>
    </center>
</body>

</html>