<?php

require ('funcoes.php');

$contasCorrentes = [
    [
        'titular' =>'Rafael',
        'cpf' => '15764564585',
        'saldo' => 1000
    ],
    [
        'titular' =>'Raniele',
        'cpf' => '26456546546',
        'saldo' => 50
    ],
    [
        'titular' =>'Raissa',
        'cpf' => '36456546546',
        'saldo' => 6000
    ]
];

$contasCorrentes[count($contasCorrentes)] = 
[
    'titular' =>'Robson',
    'cpf' => '46456546546',
    'saldo' => 120
];

unset ($contasCorrentes[3]);
//GOSTEI MAIS ASSIM, MAS NAO SE É CORRETO, PORQUE HA LINGUAGENS QUE PREZAM PELA COMPONENTIZAÇÃO, POR ISSO DEIXEI EM COMENTARIO
// $valorsaque = 2000;

// for ($i = 0; $i < count($contasCorrentes); $i++) {
//     if ($valorsaque > $contasCorrentes[$i]['saldo']){
//         echo "NÃO É POSSIVEL EXECUTAR A TRANSAÇÃO, POIS O VALOR DO SAQUE É MAIOR QUE O SALDO EM CONTA" . "\n";
//     } else {
//         $contasCorrentes[$i]['saldo'] -= $valorsaque;
//         echo $contasCorrentes[$i]['saldo'] . ' ' . 'É O VALOR RESTANDO DA CONTA DO CLIENTE: '. $contasCorrentes[$i]['titular'] . PHP_EOL;
//     }
// }

// $contasCorrentes[1] = retiraSaldo($contasCorrentes[1], 500);

$contasCorrentes[1] = depositarDeneros($contasCorrentes[1], 5000);

// titularLetrasMaiusculas($contasCorrentes['1']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $conta) {?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $conta['cpf']; ?></h3>
        </dt>
        <dd>
            Saldo:<?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>