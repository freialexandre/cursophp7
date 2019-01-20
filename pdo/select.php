<?php

//data source manager
//PDO tmb permite trabalhar com transacoes
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "12345678");


//se fosse conectar no banco SQL SERVER:  (SQLEXPRESS é o nome da INSTÂNCIA)
// ConnectionPooling=0 faz o banco conectar, executar e encerrar a conexão. =1 ele não desconecta do banco
//$conn = new PDO("sqlsrv:database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "12345678");



$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


var_dump($results);


//opcao de varrer o array principal (com todos os registros), lendo cada registro no foreach interno
foreach ($results as $row) {

	foreach ($row as $key => $value) {

		echo "<strong>" . $key . ": </strong>" . $value ."<br/>";
	}

	echo "______________________________________ <br>";


}




?>