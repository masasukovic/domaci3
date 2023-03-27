<?php

    include('./connection.php');
    // citanje iz fajla
function getFromDatabase($con, $term = ""){
        $query = "SELECT * FROM books where 
        book_name like '%$term%'
         or author_name like '%$term%'";
        $result = mysqli_query($con, $query);
    
    if ($result) {
        $assocArray = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $assocArray;
        }
    } 

    getFromDatabase($con);
?>
