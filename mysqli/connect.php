<?php


$conn = new mysqli("localhost", "root", "12345678", "dbphp7");

if ($conn->connect_error) {

	echo "Error: " . $conn->connect_error;
}





?>