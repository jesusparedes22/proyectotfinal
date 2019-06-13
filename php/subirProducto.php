<?php 
require_once 'conexion.php';

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];

$sql = "INSERT INTO videojuegos (titulo, descripcion, imagen, precio) VALUES ('$titulo', '$descripcion', '$imagen', $precio)";


if (mysqli_query($conn, $sql)) {
	echo "OK";
} else {
	echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}






?>