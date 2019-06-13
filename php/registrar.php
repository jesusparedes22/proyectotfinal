<?php 
require_once 'conexion.php';



$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$password = $_POST['password'];

$passCifrada = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (usuario, email, password)
VALUES ('$usuario', '$correo', '$passCifrada');";

if (mysqli_query($conn, $sql)) {
	echo "OK";
} else {
	echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}




mysqli_close($conn);











?>