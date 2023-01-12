<?php

$idadelist = [21,23,15,28,26,72];

// for ($i = 0; $i < count($idadelist); $i++){
//     echo $idadelist[$i] . PHP_EOL;
// }

for ($i = 0; $i < 10; $i++){
    if ($i >= count($idadelist)){
        $idadelist[$i] = $i;
    }
echo $idadelist[$i] . PHP_EOL;
}