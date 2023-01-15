<?php

$url = 'https://alura.com.br';

if (str_starts_with($url, 'https')){
    echo 'É UMA URL SEGURA';
} else{
    echo 'NÃO É UMA URL SEGURA';
}

echo PHP_EOL;

if (str_ends_with($url, '.br')){
    echo 'É UM DOMINIO DO BRASIL';
} else{
    echo 'NÃO É UM DOMINIO DO BRASIL';
}

