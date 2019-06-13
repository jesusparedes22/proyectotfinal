<?php 



require_once 'conexion.php';

$sql = "SELECT * FROM videojuegos";

$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td> " . $row['titulo'] ." </td>";
		echo "<td> " . $row['descripcion'] . "</td>";
		echo "<td> " . $row['precio'] . "</td>";?>

		<td>
			
		 	<button class='btn btn-primary' onclick="eliminar('<?php echo $row['id_juego']; ?>')"> Eliminar	 </button>
		</td>
		</tr>
		<?php 
	}
	
	

}

?>