
<?php

$nome = 'Rafael Tacio';
$email = 'rafaeltacio@email.com   ';
$senha = '123';

if (strlen($senha)<8){
    echo 'senha is too short'.PHP_EOL;
}

//STRPOS PASSA A POSICAO DO STRING PROCURADO
$posicaoArroba = strpos($email, '@');

//SUBSTR(DE ONDE VAI PEGAR, DE ONDE COMEÇA, QUAL O TAMANHO)

$usuario = substr($email, 0, $posicaoArroba);

//STRTOUPPER NAO MODIFICA A VARIAVEL ORIGINAL
echo strtoupper($usuario).PHP_EOL;

echo $dominio = substr($email,$posicaoArroba+1).PHP_EOL;

list($primeiroNome, $sobreNome) = explode(' ', $nome);

echo 'NOME:' . $primeiroNome . PHP_EOL;
echo 'SOBRENOME:' . $sobreNome . PHP_EOL;

$csv = 'RAFAEL TACIO, 21, RAFAELTACIO@EMAIL.COM';
var_dump(explode(',', $csv));

echo trim($email).PHP_EOL;