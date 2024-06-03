<?php
include '../cfg.php';

$id = $_GET['id'];

$sql = "DELETE FROM `books_table` WHERE `id` = '$id'";

mysqli_query($connect, $sql);

header('Location: ../public/index.php');