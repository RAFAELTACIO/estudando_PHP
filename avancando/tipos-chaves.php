<?php

//PHP SÓ TRABALHA COM INT E STRING, O RESTO ELE TENTA CONVERTER
$array = [
    1 => 'a',
    '1' => 'B',
    1.5 => 'C',
    true => 'd',
    'qualquer coisa' => 'qualquer coisa'
];

foreach ($array as $item) {
    echo $item . PHP_EOL;

}