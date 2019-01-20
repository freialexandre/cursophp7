<?php

require_once "connect.php";

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

//while ($row = $result->fetch_array()) {
//var_dump($row);

//}

//ou

//preparar para mandar os dados para outro aplicativo, ou seja converter para Json

$data = array();

while ($row = $result->fetch_assoc())  {
	//inclui cada linha alimentada em $row, dentro do array $data
	array_push($data, $row);

}

//gerar Json a partir do banco de dados
echo json_encode($data);

?>