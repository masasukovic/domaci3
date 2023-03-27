<?php

    include "./connection.php";
    
    function storeUsers($con){
        
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
   

    $result = mysqli_prepare($con, "insert into users (email, username, password) values (?, ?, ?)");
    
    mysqli_stmt_bind_param($result, 'sss', $email, $username, $password);
    mysqli_stmt_execute($result);

    }
    
    storeUsers($con);
    header("location:./index.php")
?>