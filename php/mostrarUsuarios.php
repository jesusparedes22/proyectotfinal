<?php 



require_once 'conexion.php';

$sql = "SELECT * FROM usuarios";

$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td> " . $row['usuario'] ." </td>";
		echo "<td> " . $row['email'] . "</td>";?>
		<td>
			<button class='btn btn-primary' onclick="modificar('<?php echo $row['usuario']; ?>')"> Modificar </button>
		 	<button class='btn btn-primary' onclick="eliminar('<?php echo $row['usuario']; ?>')"> Eliminar	 </button>
		</td>
		</tr>
		<?php 
	}
	
	

}

?>