<?php
require_once "./functions.php";

if ($password != "") {

    // iniziamo la session così da recuperare un dato
    session_start();
    // salviamo la password sulla variabile di sessione
    $_SESSION["password"] = $password;
    // dirottiamo l'utente sulla schermata apposta della password
    header("Location: ./password.php");
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-STRONG-PASSWORD-GENERATOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <main>
        <div class="container my-5">
            <div class="card">
                <div class="card-header">
                    <!-- titel -->
                    <h2 class="card-title text-center">
                        Strong Password Generator
                    </h2>
                    <h3 class="card-subtitle mb-2 text-body-secondary text-center">
                        Genera una password sicura
                    </h3>
                </div>
                <div class="card-body">
                    <!-- banner -->
                    <!-- form -->
                    <form>
                        <div class="row mb-3">
                            <label for="password-lenght" class="col-sm-4 col-form-label">Lunghezza password</label>
                            <div class="col-sm-8">
                                <input type="number" min="8" max="19" class="form-control" id="password-lenght" name="password-lenght">
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-4 pt-0">Consenti ripetizione di uno o più caratteri</legend>
                            <div class="col-sm-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Si
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        No
                                    </label>
                                </div>

                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <div class="col-sm-8 offset-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Lettere
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Numeri
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Simboli
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Genera</button>
                    </form>
                </div>
            </div>
            <hr>
            <?php
            if ($password != "") {
            ?>
                <h2>La tua password di <?php echo $_GET["password-lenght"] ?> caratteri è:</h2>
                <pre> <?php echo $password ?> </pre>
            <?php
            }

            ?>
        </div>





    </main>

</body>

</html>