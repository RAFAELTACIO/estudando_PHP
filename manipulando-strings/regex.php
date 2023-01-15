<?php

$telefones = [
    '(16) 99999 - 9999',
    '(16) 98888 - 9999',
    '(16) 97777 - 9999',
    '(16) 6666 - 9999',
    '(16) 5555 - 9999',
    '(16) 94444 - 9999'
];

foreach ($telefones as $telefone){
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';
    $telefoneValido = preg_match(
        $regex, 
        $telefone,
        $verificacoes
    );

    var_dump($verificacoes);

    if ($telefoneValido) {
        echo 'Telefone Valido' . PHP_EOL;
    }else{
        echo 'Telefone Invalido' . PHP_EOL; 
    }

    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone
    ).PHP_EOL;
}