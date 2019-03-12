

<!-- sem action porque vai enviar para a propria pagina 
formulario vai enviar como dados binarios . Por padrão formulario só envia texto, nesse caso tudo 
que tiver dentro da tag FORM vai ser enviado como binario -->

<p><strong>ENVIO DE ARQUIVOS</strong></p>

<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">
	<button type="submit"> Send </button>

</form>


<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$file = $_FILES["fileUpload"]; 

		if($file["error"]) {
			throw new Exception("Erro: " . $file["error"]);
	}

	$dirUploads = "uploads";

	if (!is_dir($dirUploads)) {
		mkdir($dirUploads);
		chmod($dirUploads, 0777);
	}
	
	//tmp_name (chave/key do array) - diretorio temporario onde o arquivo fica durante o upload
	if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {
		echo "Upload realizado com sucesso! - poderia salvar no banco de dados, insert com nome do arquivo, data...";

	} else {
		throw new Exception("não foi possivel fazer o upload");
	}


	

}












?>