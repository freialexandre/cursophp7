<?php

//tipos de VARIAVEIS, DADOS

$nome = "Hcode";
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

///////////////////////////

//compostos - array e objetos

//array pode misturar texto, numero, etc
$frutas = array("abacaxi", "laranja", "manga", 500);

echo $frutas[2];

//objetosm  nesse caso, uma classe nativa
$nascimento = new DateTime();
//var_dump($nascimento);

$arquivo = fopen("exemplo-01.php", "r");
//var_dump("$arquivo");

//tipo Especial
$nulo = NULL;
//é diferente de :
$vazio = "";





?>