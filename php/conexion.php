<?php 
//CONEXION A LA BASE DE DATOS
$servername = "localhost";
$username = "root";
$password = "";
$db = "tienda";

// CREAR LA CONEXION
$conn = mysqli_connect($servername, $username, $password, $db);

// COMPROBAR LA CONEXION
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}










?>