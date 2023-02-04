<?php
include_once 'config.php';

$id = $_GET['id'];

$result = mysqli_query($mysqli,"delete from todo where id=$id");
header("location:todo.php");
?>