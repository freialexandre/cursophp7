<?php


$a = 10;

function trocaValor($a) {

	$a += 50;
	return $a;

}


echo trocaValor($a);

echo "<br>";

echo $a;

echo "<br>";
echo "----------------";
echo "<br>";

//Passagem de parâmetro por referência:

$b = 10;

function trocaValor2(&$b) {
	$b += 50;
	return $b;
}

echo trocaValor2($b);
echo "<br>";
echo $b;

echo "<br>";

echo trocaValor2($b);
echo "<br>";
echo $b;




?>