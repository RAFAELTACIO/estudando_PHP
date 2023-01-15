<?php

 $dados = ['vinicius',10,24];


//CRIA VARIAVEIS DE ACORDO COM OS DADOS QUE FOREM PASSADOS
list($nome, $nota, $idade) = $dados; 

//PEGA AS CHAVES DE UM ARRAY E TRANSFORMA EM VARIAVEIS
//(PROPICIO PARA CHAVES STRING)
//APENAS EM DADOS CONFIAVEIS
extract($dados);

compact('nome', 'nota', 'idade');

var_dump($nome, $nota, $idade);
