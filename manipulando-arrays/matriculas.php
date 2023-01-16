<?php

$alunos2022 =[
    'Breno',
    'Ana',
    'Denise',
    'Carla',
    'Estefano'
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];

// var_dump($alunos2023 = array_merge($alunos2022, $novosAlunos));

// O SINAL +(MAIS) MANTEM OS VALORES DAS CHAVES DO PRIMEIRO ARRAY
// $alunos2023 = $alunos2022 + $novosAlunos

//OS 3 PONTOS (SPREAD OPERATOR) DESEMPACOTAM UM ARRAY, 
//ESSA SINTAXE PERMITE INSERIR NOVOS ELEMENTOS NO MEIO DO ARRAY DE FORMA MAIS FACIL
//PORQUE O ARRAY MERGE SÓ PERMITE A JUNCAO DE ARRAYS

$alunos2023 = [...$alunos2022, ...$novosAlunos];

//ADICIONA UM ELEMENTO NO FINAL(É BOM PARA ADICIONAR VARIOS ELEMENTOS)
array_push($alunos2023,'Alice', 'Bob', 'Charlie');

//TAMBEM ADICIONA UM ELEMENTO NO FINAL
$alunos2023[] = 'Maicon';

sort($alunos2023);

//ADICIONA NO INICIO DO ARRAY
array_unshift($alunos2023, 'Stephany', 'Rafaela');

//ARRAY SHIFT = RETIRA E RETORNA O PRIMEIRO ELEMENTO DO ARRAY
echo array_shift($alunos2023);

//ARRAY POP = RETIRA E RETORNA O ULTIMO ELEMENTO DO ARRAY
echo array_pop($alunos2022);

var_dump($alunos2023);
