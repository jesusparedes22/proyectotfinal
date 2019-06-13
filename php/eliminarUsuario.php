<?php 

require_once 'conexion.php';

$usuario = $_POST['usuario'];

$sql = "DELETE FROM usuarios WHERE usuario = '$usuario'";

if (mysqli_query($conn, $sql)) {
	echo "Eliminado";
} else {
	echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}

?>