<?php
include_once 'config.php';

$id = $_GET['id'];

$result = mysqli_query($mysqli,"update todo set status='selesai' where id=$id");
header("location:todo.php");
?>