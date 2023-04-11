<?php
session_start();

require_once __DIR__. '/data/functions.php';
require_once __DIR__. '/data/variables.php';

if(!empty($_GET['length']) && $_GET['length'] > 7){
    $_SESSION['length'] = $_GET['length'];
    header("Location: ./result.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-primary-subtle">


    <h1 class="text-center py-3">Strong Password Generator</h1>
    <h2 class="text-center py-3">Genera una password sicura</h2>


    <div class="container py-4">
        <div class="row bg-info py-3 rounded">
            <div class="col-12">
                <h3>
                   Fill the field below!
                </h3>
            </div>
        </div>
    </div>

    <div class="container py-5 bg-secondary rounded">
        <form action="index.php" method="GET">
            <div class="row py-4">
                <div class="col-8">
                    <h3>Lunghezza password:</h3>
                </div>
                <div class="col-4">
                    <input type="number" name='length'>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-8">
                    <h3>Consenti ripetizione di uno o più caratteri:</h3>
                </div>
                <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="repeat_char" id="repeat_char1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            YES
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="repeat_char" id="repeat_char2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            NO
                        </label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end pb-4">
                <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="letters" id="letters">
                        <label class="form-check-label" for="flexCheckDefault">
                            Lettere
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="numbers" id="numbers">
                        <label class="form-check-label" for="flexCheckChecked">
                            Numeri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="symbols" id="symbols">
                        <label class="form-check-label" for="flexCheckChecked">
                            Simboli
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </div>
            </div>
        </form>
    </div>


</body>

</html>