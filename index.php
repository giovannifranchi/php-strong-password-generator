<?php
// $up_chars = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'Z'];
// $low_chars = [];
// $numbers = [];
// $symbols = ['?', '!', '#', '|', '*', '§', '£', '$', '%', '%'];

// foreach ($up_chars as $char) {
//     $low_chars[] = strtolower($char);
// }

// for ($i = 0; $i < 10; $i++) {
//     $numbers[] = "$i";
// }

// function generatePassword($length, $up_chars, $low_chars, $numbers, $symbols){
//     $passwordArray = [];
//     for($i = 0; $i < $length; $i++){
//         $random_selector = rand(1, 4);
//         if($random_selector == 1){
//             $passwordArray[] = $up_chars[rand(0, count($up_chars) - 1)];
//         }else if($random_selector == 2){
//             $passwordArray[] = $low_chars[rand(0, count($low_chars) - 1)];
//         }else if($random_selector == 3){
//             $passwordArray[] = $symbols[rand(0, count($symbols) - 1)];
//         }else{
//             $passwordArray[] = $numbers[rand(0, count($numbers) - 1)];
//         }
//     }
//     return join('', $passwordArray);
// }


// $_GET['length'];

require_once __DIR__. '/data/functions.php';
require_once __DIR__. '/data/variables.php';


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
                    <?php echo empty($_GET['length']) ? 'nessun valore' : generatePassword($_GET['length'], $up_chars, $low_chars, $numbers, $symbols); ?>
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
                    <input type="text" name='length'>
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