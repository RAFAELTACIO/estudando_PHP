<?php

$notasBimestre1 =[
    'Breno' => 10,
    'Ana' => 3,
    'Denise' => 9,
    'Carla' => 7,
    'Estefano' => 6
];

$notasBimestre2 =[
    'Ana' => 2,
    'Breno' => 5,
    'Denise' => 9,
    'Carla' => 7,
];
//array_diff = MOSTRA QUAL ELEMENTO DO PRIMEIRO ARRAY, NÃO ESTA NOS ARRAYS SEGUINTES
//array_diff_key = CHECA SE AS CHAVES DO PRIMEIRO ARRAY EXISTEM NOS ARRAYS SEGUINTES
//array_diff_assoc = ELEMENTOS DO PRIMEIRO ARRAY QUE NÃO ESTÃO NOS ARRAYS SEGUINTES

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_keys($alunosFaltantes);

//ARRAY_COMBINE PRECISA QUE OS DOIS ARRAYS TENHAM O MESMO TAMANHO

var_dump(array_combine($notasAlunos, $notasAlunos));

//ARRAY_FLIP = INVERTE FUNÇÃO E CHAVES DO ARRAY

var_dump(array_flip($alunosFaltantes));
