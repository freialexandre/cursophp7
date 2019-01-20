<?php


//define uma constante, USAR EM LETRA MAIUSCULA
define("SERVIDOR", "127.0.0.1");
echo SERVIDOR;

echo "<br>";
//recurso do PHP 7
//Constante de Array

//poderia usar para conectar no Banco de Dados, por exemplo
define("BANCO_DE_DADOS", [
	"127.0.0.1",
	"root",
	"password",
	"test"
]);

print_r(BANCO_DE_DADOS);

echo "<br>";

echo PHP_VERSION;

echo "<br>";

echo DIRECTORY_SEPARATOR;

echo "<br>";

echo PHP_OS;

echo "<br>";


?>
