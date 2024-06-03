<?php
include '../cfg.php';

$title = $_POST['title'];
$author = $_POST['author'];
$publication = $_POST['publication'];
$genre = $_POST['genre'];

$sql = "INSERT INTO `books_table` (`id`, `title`, `author`, `publication`, `genre`) VALUES (NULL, '$title', '$author', '$publication', '$genre')";

if ($title && $author && $publication && $genre !== '') {
    mysqli_query($connect, $sql);
    header('Location: ../public/index.php');
} else {
    echo 'Строка не должна быть пустой';
}