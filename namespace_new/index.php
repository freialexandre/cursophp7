<?php


require_once("config.php");
use Cliente\Cadastro;



$cad = new Cadastro();
$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");  

$cad->registrarVenda();
echo "<br/>";

//echo nao mostra objeto, so texto, a nao ser use o metodo tostring
echo $cad;







?>