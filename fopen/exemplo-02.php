<?php


require_once("config.php");

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//print_r($usuarios);

//converter para o padrao CSV (itens separados por virgula)

$headers = array();

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));

}
//implode = adiciona um separador, a virgula nesse caso
$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(", ", $headers)  . "\r\n");

//Até aqui só inseriu os cabeçalhos, agora precisa inserir os usuarios

foreach ($usuarios as $row) {
	$data = array();
		foreach ($row as $key => $value) {
			array_push($data, $value);
		} //end foreach de coluna
		fwrite($file, implode(", ", $data) . "\r\n");
} //end foreach de linha
 





fclose($file);

?>