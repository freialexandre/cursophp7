<?php

//pede 2 parametros: 1 - caminho do arquivo/nomeDoarquivo; 2 - como vc vai usar esse arquivo (ler, alterar, inserir, substituir conteudo...)
//$file é uma variavel do tipo resource;
$nomeArquivo = "log.txt";
$file = fopen($nomeArquivo, "w+");
//w+ = apaga o arquivo se existir, e escreve;
//a+ acrescenta texto, conteudo preservado 

//espera 2 parametros: resource (variavel que contem o arquivo) 2 - dados que eu quero inserir
fwrite($file, date("d-m-Y H:i:s"));
fclose($file);

if (file_exists($nomeArquivo))  {
	echo "Arquivo criado com sucesso";
}

//a+ - adiciona texto no final do arquivo
$texto2 = "\n Boa noite. \n Teste de escrita em arquivo PHP. \n Teste bem sucedido.";
$file = fopen($nomeArquivo, "a+");
fwrite($file, $texto2);
fclose($file);


?>