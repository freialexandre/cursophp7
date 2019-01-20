

<?php


//spl_autoload_extensions(".php");
//spl_autoload_register();


function __autoload($nomeClasseChamada) {

require_once("$nomeClasseChamada.php");

}



$carro = new DelRey();

$carro->acelerar(80);




?>