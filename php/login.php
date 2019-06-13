<?php 
session_start();
require_once 'conexion.php';
sleep(1.5);

$usuario = $_POST['usuario'];
$password = $_POST['password'];


$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($usuario === $row['usuario'] && password_verify($password, $row['password'])) {
	$_SESSION['usuario'] = $row['usuario'];
	echo "Iniciado";
} else {
	echo "Erro al iniciar sesion";
}







?>