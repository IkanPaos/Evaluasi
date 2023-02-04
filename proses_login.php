<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($mysqli,"SELECT * FROM user WHERE nama='$username' and password='$password'");
    $cek = mysqli_num_rows($login);

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($login);

        if ($data['role']=="user") {
            
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['status'] = "login";
            $_SESSION['username'] = $username;

            header("location:todo.php");
        } else {
            header("location:index.php?pesan=gagal");
            $pesan = "Username atau Password anda Salah";
        }
    } else {
        header("location:index.php?pesan=gagal");
        $pesan = "Data tidak Ditemukan";
    }
}
?>