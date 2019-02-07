<?php

$images = scandir("images");

$data = array();




foreach ($images as $image) {
	if (!in_array($image, array(".", ".."))) {

		$filename = "images" . DIRECTORY_SEPARATOR . $image;
		//$info é um array
		$info = pathinfo($filename);
		$info["size"] = filesize($filename);
		$info["data"]  = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost/~frei/udemy/PHP/DIR/" . $filename;
		array_push($data, $info);

		//var_dump($data);
	}
}

//echo json_encode($data);

//var_dump($data[0]['dirname']);


foreach ($data as $value) {
	
	foreach ($value as $key => $value) {
		echo $key . " - ";
		echo $value . "; <br>";

	}
		echo "<br>";
}


?>