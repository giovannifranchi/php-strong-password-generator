<?php

$up_chars = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'Z'];
$low_chars = [];
$numbers = [];
$symbols = ['?', '!', '#', '|', '*', '§', '£', '$', '%', '%'];

foreach ($up_chars as $char) {
    $low_chars[] = strtolower($char);
}

for ($i = 0; $i < 10; $i++) {
    $numbers[] = "$i";
}
