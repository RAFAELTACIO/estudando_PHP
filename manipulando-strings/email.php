<?php

function geraEmail(string $nome):void{
    //heredoc = EQUIVALENTE A ASPAS DUPLAS(PRA INTERPOLAÇÃO DE STRING)
    //nowdoc = EQUIVALENTE A ASPAS SIMPLES (SE NECESSARIO A INSERÇÃO DE SIMBOLOS COMO $)
    $conteudoEmail = <<<FINAL
    OLA, $nome!

    ESTAMOS ENTRANDO EM CONTATO PARA
    {motivo do contato}
    
    {assinatura}
    FINAL;

    echo $conteudoEmail;
}

geraEmail('RAFAEL TACIO');