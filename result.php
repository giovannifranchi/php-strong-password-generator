<?php
session_start();

if(empty($_SESSION['length'])){
    header('Location: ./index.php');
}


require __DIR__ . '/data/functions.php';
require __DIR__ . '/data/variables.php';

$length = $_SESSION['length'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Your password is:</h1>
    
    <h2><?php echo generatePassword($length,$up_chars,$low_chars, $numbers,$symbols)?></h2>

    <a href="reset.php">Try Again</a>


</body>
</html>