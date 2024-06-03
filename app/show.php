<?php
include '../cfg.php';

$id = $_GET['id'];

$sql = "SELECT * FROM `books_table` WHERE `id` = '$id'";

$book = mysqli_query($connect, $sql);

$book = mysqli_fetch_assoc($book);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="p-5">
    <h3>Обновить информацию о книге</h3>
    <form action="update.php" method="post" class="w-25">
        <input type="hidden" name="id" value="<?= $book['id'] ?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Заголовок</label>
            <input class="form-control" name="title" value="<?= $book['title'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Автор</label>
            <input class="form-control" name="author" value="<?= $book['author'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Дата публикации</label>
            <input class="form-control" name="publication" type="number" max="2024" min="1700" value="<?= $book['publication'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Жанр</label>
            <input class="form-control" name="genre" value="<?= $book['genre'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
