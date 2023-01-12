<?php

$contasCorrentes = [
    15764564585 => [
        'titular' =>'Rafael',
        'saldo' => 1500
    ],
    26456546546 =>[
        'titular' =>'Raniele',
        'saldo' => 150000
    ],
    36456546546 =>[
        'titular' =>'Raissa',
        'saldo' => 5500
    ]
];

// foreach ($contasCorrentes as $conta) {
//     echo $conta['titular'] ," ", 
//     $conta['saldo'] . PHP_EOL;
 
// }

$contasCorrentes[456789456789] = [
    'titular' =>'Robson',
    'saldo' => 55
];

foreach ($contasCorrentes as $indice => $conta) {
    echo $conta['titular'] . PHP_EOL;
}