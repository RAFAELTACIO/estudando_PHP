<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'João',
        'nota' => 5,
    ],
    [
        'aluno' => 'Carlos',
        'nota' => 8,
    ],
];
//sort ordena do menor pro maior

function ordenaNotas(array $nota1, array $nota2):int
{
    //<=>operador espaçonave
    //ordem crescente por padrao
    return $nota1['nota'] <=> $nota2['nota'];

    // if ($nota1['nota'] > $nota2['nota']){
    //     return -1;
    // }

    // if ($nota2['nota'] > $nota1['nota']) {
    //     return 1;
    // }

    // return 0;
}
//usort precisa de um array e deu um funcao que passa como o array vai ser ordenado
// usort($notas, 'ordenaNotas');
usort($notas, function (array $nota1, array $nota2):int
{
    return $nota1['nota'] <=> $nota2['nota'];
});
var_dump($notas);