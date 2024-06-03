<?php

include '../cfg.php';

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$publication = $_POST['publication'];
$genre = $_POST['genre'];

$sql = "UPDATE `books_table` SET `title` = '$title', `author` = '$author', `publication` = '$publication', `genre` = '$genre' WHERE `books_table`.`id` = '$id'";

if ($title && $author && $publication && $genre !== ''){
    mysqli_query($connect, $sql);
    header('Location: ../public/index.php');
} else {
    echo 'Строка не должна быть пустой';
}

