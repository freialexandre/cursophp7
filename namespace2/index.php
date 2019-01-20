<?php

include_once("config.php");
 
use classes\Usuario;
use classes\util\Conexao;
use classes\util\Timer;
use classes\util\util2\chamaFrei;


 
$usuario = new Usuario();
$con = new Conexao();
$timer = new Timer();
$frei = new chamaFrei();
 
echo $con->getConnection() . "<br />";
echo $usuario->getIdade() . "<br />";
echo $usuario->getIdade() . "<br />";
$timer->getNow();
echo $frei->chama() ."<br />";
//classe Frei (estendeu classe Timer) chamando metodo da classe Timer
echo $frei->getNow(). "<br />";
echo "<br />";
echo $frei->chama2(). "<br />";
 

 
?>