<?php

$nome = 'Rafael Rocha Ribeirao Preto Sp';

$isRocha = str_contains($nome, 'Rocha');

var_dump(str_contains($nome, 'Rocha'));

if($isRocha){
    echo 'TEM ROCHA NO NOME!'.PHP_EOL;
}else{
    echo 'NAO TEM ROCHA NO NOME!'.PHP_EOL;
}

