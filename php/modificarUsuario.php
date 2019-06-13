<?php 
require_once 'conexion.php';
$usuario = $_POST['usuario'];

$email = $_POST['email'];

$sql = "UPDATE usuarios SET email = '$email' WHERE usuario = '$usuario'";


if (mysqli_query($conn, $sql)) {
	echo "Modificado";
} else {
	echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}




?>