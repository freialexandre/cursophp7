<?php

//array de 1 dimensao,  ou  VETOR
$frutas = array("laranja", "abacaxi", "melancia");

print_r($frutas);

echo "<br/>";

echo "<br/>";

//array tem mais de 1 dimensao, bidimensional ou tridimensional
//php versoes antigas
echo "Array bidimensional";
echo "<br/>";
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "EcoSport";

echo $carros[0][3];
echo "<br/>";
//mostra ultimo da posicao
echo end($carros[1]);


echo "<br/>";

//bidimensional tmb
$pessoas = array();
array_push($pessoas, array(
	'nome'=>'Joao',
	'idade'=>20
));
array_push($pessoas, array(
	'nome'=>'Glaucio',
	'idade'=>25
));

print_r($pessoas);

echo "<br/>";

print_r($pessoas[0]['nome']);

echo "<br/>";
echo "<br/>";

$carros = array();
array_push($carros, array(
	'Ford1'=>'Fiesta',
	'Ford2'=>'Fusion',
	'Ford3'=>'EcoSport'
));
array_push($carros, array(
	'GM1'=>'Cobalt',
	'GM2'=>'Onix',
	'GM3'=>'Camaro'
));
print_r($carros);





?>