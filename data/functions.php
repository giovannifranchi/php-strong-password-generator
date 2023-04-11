<?php



function generatePassword($length, $up_chars, $low_chars, $numbers, $symbols){
    $passwordArray = [];
    for($i = 0; $i < $length; $i++){
        $random_selector = rand(1, 4);
        if($random_selector == 1){
            $passwordArray[] = $up_chars[rand(0, count($up_chars) - 1)];
        }else if($random_selector == 2){
            $passwordArray[] = $low_chars[rand(0, count($low_chars) - 1)];
        }else if($random_selector == 3){
            $passwordArray[] = $symbols[rand(0, count($symbols) - 1)];
        }else{
            $passwordArray[] = $numbers[rand(0, count($numbers) - 1)];
        }
    }
    return join('', $passwordArray);
}