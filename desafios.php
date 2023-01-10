<?php

// for($contador = 1; $contador <=20; $contador++){
//     if ($contador % 2 == 1) {
//         echo $contador . PHP_EOL;
//     }
// }

// $numero = 10;

// for($contador = 1; $contador <=10; $contador++){
//     echo $numero * $contador . PHP_EOL;
// }

$altura = 1.80;
$peso = 70;
$imc = $peso / ($altura ** 2);

if ($imc >= 25){
    echo "VOCE ESTA ACIMA DO PESO, SEU IMC É $imc";
}else if ($imc >=18){
    echo "VOCE ESTA NO PESO CORRETO, SEU IMC É $imc";
} else {
    echo "VOCE ESTA ABAIXO DO PESO, SEU IMC É $imc";
}