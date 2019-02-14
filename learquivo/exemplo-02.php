<?php

$filename = "logo.png";

$imagem = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileinfo->file($filename);
echo $mimetype . "<br>";

//CONVERTE BINARIO EM TEXTO:

$imagem64Encode =  "data:" . $mimetype . ";base64," . $imagem;


?>

<a href="<?php echo $imagem64Encode ?> target="blank"> Link para imagem </a>

<img src="<?=$imagem64Encode?>">