<?php

$texto = 'TEXTO COM QUALQUER COISA POXA E CARAMBA';
var_dump(str_replace(
    ['POXA', 'CARAMBA',],
    ['***'],
    $texto
 )).PHP_EOL;

 echo strtr($texto, 'POXA', '****'). PHP_EOL;
 echo strtr($texto, ['POXA' => '***', 'CARAMBA' => '*******'], ). PHP_EOL;

