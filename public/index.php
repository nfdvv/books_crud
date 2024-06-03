<?php

include '../cfg.php';

$sql = "SELECT * FROM `books_table`";
$books = mysqli_query($connect, $sql);
$books = mysqli_fetch_all($books);

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
<div class="p-5 w-75">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Автор</th>
            <th scope="col">Дата публикации</th>
            <th scope="col">Жанр</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($books as $book): ?>
        <tr>
            <th scope="row"><?= $book[0] ?></th>
            <td><?= $book[1] ?></td>
            <td><?= $book[2] ?></td>
            <td><?= $book[3] ?></td>
            <td><?= $book[4] ?></td>
            <td><a href="../app/show.php?id=<?= $book[0] ?>" class="btn btn-outline-warning">Редактировать</a></td>
            <td><a href="../app/delete.php?id=<?= $book[0] ?>" class="btn btn-outline-danger">Удалить</a></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="p-5">
    <h3>Добавить книгу</h3>
    <form action="../app/create.php" method="post" class="w-25">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Заголовок</label>
            <input class="form-control" name="title" placeholder="Moby Dick">
        </div>
        <div class="mb-3">
            <label class="form-label">Автор</label>
            <input class="form-control" name="author" placeholder="Herman Melville">
        </div>
        <div class="mb-3">
            <label class="form-label">Дата публикации</label>
            <input class="form-control" name="publication" type="number" max="2024" min="1700" placeholder="1851">
        </div>
        <div class="mb-3">
            <label class="form-label">Жанр</label>
            <input class="form-control" name="genre" placeholder="Adventure">
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>