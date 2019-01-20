<?php


//jason - pega as variaveis e serializa
//jason encode - recebe um array e transforma em Jason
//Recebe Jason e transforma em array - é jason decode


$pessoas = array();

	array_push($pessoas, array(
		'nome'=>'Joao',
		'idade'=>20
	));
	array_push($pessoas, array(
		'nome'=>'Glaucio',
		'idade'=>25
	));


//tem que passar um array para "encodar"
$jsonencode =  json_encode($pessoas);
echo "json encode: " . "<br/>" . $jsonencode;



//DECODE
$json = '[{"nome":"Joao","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);

var_dump($data);


?>