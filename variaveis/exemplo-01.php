<?php


$nome = "Alexandre";
$sobreNome = "Martins";
//Concatenação
$nomeCompleto = $nome . " " . $sobreNome;


echo $nomeCompleto;
//var_dump mostra a quantidade de memória utilizada
var_dump($nome);

$anoNascimento = "1965";
echo $anoNascimento;
echo "</br>";

//unset - elimina a variavel
unset($anoNascimento);

//isset = testa se uma variavel existe
if (isset($anoNascimento)) {
	echo $anoNascimento;
} else {
	echo "Variavel nao existe";
}





?>