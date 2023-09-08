<?php

function len($str) {
    $len = 0;
    while(isset($str[$len])) {
        $len++;
    }
    return $len;
}

function my_str_reverse(string $string) : string { // : string | Une string st attendu en sorti de fonction
    $str_reverse = '';

    for ($i = len($string) - 1; $i >= 0; $i--) {
        $str_reverse .= $string[$i];
    }

    return $str_reverse;
};

$original_str = "Hello";
$reversed_str = my_str_reverse($original_str);
echo $reversed_str;