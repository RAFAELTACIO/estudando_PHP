<?php

$anoNascimento = '2001';

$idade = 2022 - $anoNascimento;

echo $idade . PHP_EOL;

if($anoNascimento == 2001) {
    echo 'SIM';
}else{
    echo 'NÃO';
}