<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style2.css">
</head>
<body>

    <div>
        <?php
        include './connection.php';
        ?>
    </div>
    
    <div class="container">
        <h1  class="text-center mt-5 mb-5" id="main_title">Registrujte se</h1>
            <form action="storeUsers.php" method="POST">
                <div class="offset-4 col-4 mb-3">
                    <label for="email" class="form-label">Email adresa</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Unesite email" required>
                </div>
                <div class="offset-4 col-4 mb-3">
                    <label for="username" class="form-label">Korisnicko ime</label>
                    <input type="username" class="form-control" name="username" id="username" placeholder="Unesite korisnicko ime" required>
                </div>
                <div class="offset-4 col-4 mb-3">
                    <label for="password" class="form-label">Sifra</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Unesite sifru" required>
                </div>
                <div class="mt-5 text-center">
                    <button type="submit" name="submit" id="submit_btn" class="btn btn-warning">Registruj se</button>
                </div>
            </form>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./app.js"></script>
</body>
</html>