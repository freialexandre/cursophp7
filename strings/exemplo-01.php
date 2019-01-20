<?php

$nome = "Hcode";
$sobrenome = 'Treinamentos';


echo "ABC $nome";


//transformar em maiusculo
echo "<br>";

$nome = "joao rangel";
echo "Normal: " . $nome;
echo "<br>";
$nome = strtoupper($nome);
echo "Caixa alta: " . $nome;

echo "<br>";

$nome = strtolower($nome);
echo "Caixa baixa: " . $nome;

echo "<br>";

//transforma maiusculo a primeira letra de cada palavra
echo ucwords($nome);
echo "<br>";
echo ucfirst($nome);


echo "<br>";

$empresa = "Hcode";
$empresa = str_replace("o", "0", $empresa);
echo $empresa;


echo "<br>";

//procurar na frase, mostra a posição na frase
$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";
$q = strpos($frase, $palavra);
var_dump($q);
echo "<br>";
$texto = substr($frase, 0, $q);
echo ($texto);

echo "<br>";

$texto2 = substr($frase, $q);
echo $texto2;

//tirando uma palavra, "mae"
echo "<br>";
$texto3 = substr($frase, $q + strlen($palavra), strlen($frase));
echo "<br>";
echo $texto3;


$frase2 = "Isto é um teste de frase em PHP.";
$palavra = "teste";
$posicao = mb_strpos($frase2, $palavra);
var_dump($posicao);


?>

