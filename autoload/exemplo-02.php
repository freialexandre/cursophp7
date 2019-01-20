<?php


//Deprecated: __autoload() is deprecated, use spl_autoload_register() instead in

//USANDO MAIS DE UMA FUNCAO AUTOLOAD

function incluirClasses($nomeClasse) {
	//spl_autoload_extensions(".php");
	if (file_exists($nomeClasse . ".php") === true) {
			require_once($nomeClasse . ".php");
	}
}

	spl_autoload_register("incluirClasses");
	//criando outra função, diretamente dentro de outra chamada do spl_autoload_register - FUNCAO ANONIMA
	spl_autoload_register(function($nomeClasse) {
		if (file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true) {
			require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
		}
	});



$carro = new DelRey();
$carro->acelerar(80);








?>