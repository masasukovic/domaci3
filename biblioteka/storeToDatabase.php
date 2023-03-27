<?php

include "./connection.php";
include "./getFromDatabase.php";
include "./bookOperations.php";
    
    function storeToDatabase($con){
        
    $bookName = $_POST['bookName'];
    $authorName = $_POST['authorName'];
    $description = $_POST['description'];
   

    $result = mysqli_prepare($con, "insert into books (book_name, author_name, description) values (?, ?, ?)");
    
    mysqli_stmt_bind_param($result, 'sss', $bookName, $authorName, $description);
    mysqli_stmt_execute($result);

    }
    
    storeToDatabase($con);
    header("location:./index.php")
?>