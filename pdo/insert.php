<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","12345678");


//forma tradicional
// $stmt = $conn->prepare("INSERT INTO tb_usuarios
//    (deslogin, dessenha) VALUES ('userX1', 'senhablabla') 
//");

//INSERT
//PDO DETECTA ONDE SAO PARAMETROS - OUTRA FORMA DE ESPECIFICAR OS PARAMETROS, SEPARADAMENTE, SEM ASPAS PARA EVITAR FALHA DE SEGURANÇA
$stmt = $conn->prepare("INSERT INTO tb_usuarios
    (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)
");

$login = "novoUser1";
$password = "1234";

//ligar os valores com as variaveis
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK!";


?>