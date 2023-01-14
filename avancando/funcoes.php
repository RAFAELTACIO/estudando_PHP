<?php

function exibeMensagem ($mensagem)
{
    echo $mensagem . '<br>';
}

function retiraSaldo ( array $conta, float $valorsaque):array
{
    if ($valorsaque > $conta['saldo']){
        exibeMensagem("VOCE NAO PODE SACAR");
    } else {
        $conta['saldo'] -= $valorsaque;
    }
    return $conta;
}

function depositarDeneros(array $conta, float $valordeposito):array
{
    if($valordeposito < 0){
        exibeMensagem("DEPOSITO INVALIDO");
    } else{
        $conta['saldo'] += $valordeposito;
    }
    return $conta;
}

function titularLetrasMaiusculas(array &$conta)
{

    $conta['titular'] = strtoupper($conta['titular']);
    echo $conta['titular'] . PHP_EOL;
    return $conta;
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'cpf' => $cpf, 'saldo' => $saldo]=$conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}
