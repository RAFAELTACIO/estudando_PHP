<?php

$conta1 = [
    'titular' =>'Rafael',
    'saldo' => 1500
];
$conta2 = [
    'titular' =>'Raniele',
    'saldo' => 150000
];
$conta3 = [
    'titular' =>'Raissa',
    'saldo' => 5500
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] ," ", 
    $contasCorrentes[$i]['saldo'] . PHP_EOL;
}
 

