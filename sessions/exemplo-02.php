<?php




require_once("config.php");


//limpa a variavel de sessao, para testar
session_unset($_SESSION["nome"]);



echo $_SESSION["nome"];


session_destroy();



?>

