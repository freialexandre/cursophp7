<?php


//fread - precisa passar quantos bytes vc quer ler do arquivo (pega com filesize)
//fgets - le linha por linha de um arquivo

$filename = "usuarios.csv";

if(file_exists($filename)) {
	$file = fopen($filename, "r");
	$headers = explode(", ", fgets($file));
	var_dump($headers);

$data = array();

//percorre linha
while ($row = fgets($file)) {
	$rowData =  (explode(", ", $row));
	//percorre colunas
	$linha = array();
	for ($i = 0; $i < count($headers); $i++) {
		//array_push($data, $rowData);

		//coloca no array $linha, o key da coluna 0, até a última.
		$linha[$headers[$i]] = $rowData[$i];

	}

	array_push($data, $linha);
} //fecha while


fclose($file);

echo json_encode($data);


}





?>