<?php

require_once "connect.php";


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

//indica o tipo de dado, ss  (string, string)
$stmt->bind_param("ss", $login, $pass);

$login = "mane2";
$pass = "123";

if ($stmt->execute()) {
echo "Dados inseridos com sucesso";
}










?>