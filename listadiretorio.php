<?php


$path = "variaveis/";

echo "<h2>Lista de arquivos</h2><br/>";

//abre a tabela, cria titulos
echo "<table>";
echo "<tr> <th>Nome</th></tr>";

foreach (new DirectoryIterator($path) as $fileInfo) {

	if ($fileInfo->isDot()) continue;
	//imprime linhas de registros
	echo "<tr>
            <td>
                <a href='".$path.$fileInfo->getFilename() ."'>".$fileInfo->getFilename()."</a><br/>
            </td>
          </tr>";
	}

	echo "</table>";







?>