<?php


//copiando logo do Google
//endereco
$link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

//recebe tanto um arquivo que nossa estar no servidor, quanto um link
$content = file_get_contents($link);
echo "Contendo bruto do arquivo";
var_dump($content);

echo "<br>";

echo "Traz todas as informações do link - parse";
$parse = parse_url($link);
var_dump($parse);

echo "<br>";

echo "Pega o nome do arquivo de dentro do path";
$basename = basename($parse['path']);
var_dump($basename);

echo "<br>";

"Abre arquivo novo (cria) o arquivo para escrita, depois grava o conteudo $content dentro dele";
$file = fopen($basename, "w+");
fwrite($file, $content);
fclose($file);

echo "<br>";
echo "Imagem salva localmente:";
echo "<br>";
echo "<br>";
?>

<img src="<?=$basename?>">

