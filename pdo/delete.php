<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","12345678");


//forma tradicional
// $stmt = $conn->prepare("INSERT INTO tb_usuarios
//    (deslogin, dessenha) VALUES ('userX1', 'senhablabla') 
//");

//INSERT
//PDO DETECTA ONDE SAO PARAMETROS - OUTRA FORMA DE ESPECIFICAR OS PARAMETROS, SEPARADAMENTE, SEM ASPAS PARA EVITAR FALHA DE SEGURANÇA
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 1;

//ligar os valores com as variaveis 
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Registro apagado com sucesso!";


?>