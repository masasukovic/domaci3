<?php

    include "./getFromDatabase.php";

    $id = $_POST["id"];
    $bookName = $_POST['bookName'];
    $authorName = $_POST['authorName'];
    $description = $_POST['description'];

    $result = mysqli_prepare($con, "update books set book_name = ?, author_name = ?, description = ? where id = ?");
    mysqli_stmt_bind_param($result, 'sssi', $bookName, $authorName, $description, $id);
    mysqli_stmt_execute($result);
    header("location:./index.php")
?>