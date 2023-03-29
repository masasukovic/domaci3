<?php

    include "./getFromDatabase.php";
    include "./bookOperations.php";
    include "./connection.php";
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style1.css">
</head>
<body>
    <div class="container">
    
    <h1 class="mt-5 text-center" id="title1">Online biblioteka</h1>

    <a href="./registration.php"><button class="btn btn-warning">Registruj se</button></a>

    <div class="container text-center mt-5">
            <nav class="navbar bg-warning col-12">
                <div class="container-fluid">
                <form action="index.php" method="GET" class="d-flex" role="search">
                
                    <input name="term" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" 
                    value=<?php if(key_exists('term', $_GET))  echo $_GET['term']?>>
                <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
                </div>
            </nav>
            <table class="table table-light">
                <thead>
                    <th>ID</th>
                    <th>Ime knjige</th>
                    <th>Autor</th>
                    <th>Opis knjige</th>
                    <th>Uredi</th>
                    <th>Dostupna</th>
                </thead>
                <tbody>
                <?php
                        $term = "term";
                    if (key_exists('term', $_GET)) {
                        $data = getFromDatabase($con, $_GET['term']);
                    }
                    else
                        $data = getFromDatabase($con);

                    if ($data === null)
                        echo '<tr> 
                                <td>/</td><td>/</td><td>/</td><td>/</td><td>/</td><td>/</td>
                              </tr>';
                    else {
                        foreach($data as $currentElement){
                            $id = $currentElement["id"];
                            $bookName = $currentElement["book_name"];
                            $authorName = $currentElement["author_name"];
                            $description = $currentElement["description"];
                            echo "<tr>
                                    <td id=\"id-$id\" value=\"$id\">$id</td>
                                    <td id=\"name-$id\">$bookName</td>
                                    <td id=\"author-$id\">$authorName</td>
                                    <td id=\"description-$id\">$description</td>
                                    <td>
                                        <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" 
                                        onclick=\"getCurrentRowData($id)\" data-target=\"#exampleModal\">
                                            Edit
                                        </button>                                    
                                    </td>
                                    <td>
                                        <input type=\"checkbox\" class=\"form-check-input\" id=\"checkbox-input\">
                                        <label class=\"form-check-label\" for=\"checkbox-input\"></label>
                                    </td>
                                    </tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
            <form action="storeToDatabase.php" method="POST">
                <div class="row m-5">
                    <div class="col-3">
                        <input type="text" required name = "bookName" class="form-control" placeholder="Unesite naziv knjige...">
                    </div>
                    <div class="col-3">
                        <input type="text" required name = "authorName" class="form-control" placeholder="Unesite autora...">
                    </div>
                    <div class="col-4">
                        <input type="text" required name = "description" class="form-control" placeholder="Dodajte opis...">
        
                    </div>
                    <button class="col-2 mb-3 btn btn-outline-warning">Dodaj novu knjigu</button>
            </form>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalBody">
                    Edituj
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./app.js"></script>
</body>
</html>
