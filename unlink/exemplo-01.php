<?php

//APAGA TODOS OS ARQUIVOS DE UMA PASTA


if(!is_dir("images")) mkdir("images");


foreach (scandir("images") as $item) {
	if(!in_array($item, array(".", ".."))) {
		unlink("images/" . $item);
	}

}


$diretorio1 = "jogar";
$diretorio2 = "jogar/jogar2";

if(is_dir($diretorio1)) {

	foreach (scandir($diretorio1) as $item) {
		if(is_dir($diretorio2)) {
			rmdir($diretorio2);
		}


	}


}






?>