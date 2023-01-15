<?php

$notas =[
    'Breno' => 10,
    'Ana' => null,
    'Denise' => 9,
    'Carla' => 7,
    'Estefano' => 6
];
//rsort ordena de ordem decrescente
//asort == sort que mantem as chaves
//arsort == rsort que mantem as chaves
//ksort == ordenar pelas chaves 
//krsort == ordenar inversamente pelas chaves
//uksort == usort que usa as chaves como parametros

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'SIM, É UM ARRAY'. PHP_EOL;
}
//PRA CHECAR SE O ARRAY É NUMERICO E SEQUENCIAL(NAO PULA NENHUMA CHAVE )
var_dump(array_is_list($notas));
//PRA CHECAR SE A CHAVE EXISTE
var_dump(key_exists('Ana', $notas));
//PRA CHECAR SE A CHAVE EXISTE E NAO É NULO
var_dump(isset($notas['Ana']));
//PRA CHECAR SE O VALOR ESTÁ DENTRO DO ARRAY
echo 'ALGUEM TIROU 10' . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'QUEM TIROU 10?' .PHP_EOL;
echo array_search(10, $notas, true);