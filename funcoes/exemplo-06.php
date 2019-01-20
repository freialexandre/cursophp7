<?php


$pessoa = array(
	"nome"=>"João",
	"idade"=>20
);


//alterar quando passar pelo foreach
foreach ($pessoa as &$value) {
	//quando for numero (idade, no caso), soma 10
	if (gettype($value) === "integer") $value += 10;
	echo $value . "<br>";
}

print_r($pessoa);


?>