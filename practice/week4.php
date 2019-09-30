<?php

$phrases = [
    'hola',
    'adios',
    'hasta luego',
    'por favor',
    'de nada',
];


foreach($phrases as $english => $spanish) {
$spanish = strtoupper($spanish);  
var_dump($spanish);
}


var_dump(date('d') == 'Sat'); 

var_dump(date('d') == 'Sat' and date('d') == 'Sun'); 

var_dump(1 == 1 && 5 < 2);