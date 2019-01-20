<?php




function __autoload($nomeClasseChamada) {

require_once("$nomeClasseChamada.php");

}



$carro = new DelRey();

$carro->acelerar(80);




?>