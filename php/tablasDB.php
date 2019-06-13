<?php 

//CONEXION A LA BASE DE DATOS
$servername = "localhost";
$username = "root";
$password = "";

// CREAR LA CONEXION
$conn = mysqli_connect($servername, $username, $password);

// COMPROBAR LA CONEXION
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}







//SE BORRA LA BASE DE DATOS SI EXISTE CUYO NOMBRE ES tienda
$sql = "DROP DATABASE IF EXISTS tienda;";
mysqli_query($conn, $sql);



// Create database
$sql = "CREATE DATABASE IF NOT EXISTS tienda CHARACTER SET utf8 COLLATE utf8_unicode_ci;";
mysqli_query($conn, $sql);

//SELECCIONAR LA BASE DE DATOS
$dbname = "tienda";
mysqli_select_db($conn, $dbname);


//CREAR LA TABLa DE USUARIOS
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
usuario VARCHAR(20)  PRIMARY KEY,
email VARCHAR(50) NOT NULL,
password VARCHAR(255) NOT NULL,
fecha_creacion_usuario TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";


mysqli_query($conn, $sql);



$sql = "CREATE TABLE IF NOT EXISTS videojuegos (
id_juego INT(20) AUTO_INCREMENT PRIMARY KEY,
titulo VARCHAR(50) NOT NULL,
descripcion VARCHAR(255) NOT NULL,
imagen VARCHAR(255) NOT NULL,
precio INT(20) NOT NULL,
fecha_creacion_juego TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";


mysqli_query($conn, $sql);


$sql = "CREATE TABLE IF NOT EXISTS comentarios (
id_comentario INT(20) AUTO_INCREMENT PRIMARY KEY,
id_juego INT(20) NOT NULL,
usuario VARCHAR(20) NOT NULL,
descripcion VARCHAR(255) NOT NULL,
fecha_creacion_juego TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";


mysqli_query($conn, $sql);

$sql = "ALTER TABLE comentarios ADD FOREIGN KEY (id_juego) REFERENCES videojuegos(id_juego) ON DELETE CASCADE;";

mysqli_query($conn, $sql);

$sql = "ALTER TABLE comentarios ADD FOREIGN KEY (usuario) REFERENCES usuarios(usuario) ON DELETE CASCADE;";

mysqli_query($conn, $sql);

/*if (mysqli_query($conn, $sql)) {
	echo "Perfe <br>";
} else {
	echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}*/





?>