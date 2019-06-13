<?php 

require_once 'conexion.php';

$id = $_POST['id'];

$sql = "DELETE FROM videojuegos WHERE id_juego = '$id'";

if (mysqli_query($conn, $sql)) {
	echo "Eliminado";
} else {
	echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}

?>