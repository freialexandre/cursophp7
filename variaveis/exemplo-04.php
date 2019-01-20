<?php


//VARIAVEIS SUPER GLOBAIS


$nome = (int)$_GET['a'];


//var_dump($nome);

$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;
echo "</br>";

//pega onome do arquivo
$nomearquivo = $_SERVER['SCRIPT_NAME'];
echo $nomearquivo



?>
