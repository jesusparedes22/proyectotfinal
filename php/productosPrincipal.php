<?php 

require_once 'conexion.php';

$sql = "SELECT * FROM videojuegos ";

$result = mysqli_query($conn, $sql);


?>

<div class="row">

	<?php 
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$path_image_sanitize = str_replace("C:fakepath","",$row['imagen']);
			?> 


			<div class="col-xs-12 col-sm-5 col-md-4 col-bg-4" id="imagenjuego">
				<img id="" src="/proyecto/img/<?php echo $path_image_sanitize; ?>">
				<p id="parrafojuego">Titulo: <?php echo $row['titulo']; ?></p>
				<p id="descripcionjuego">Desctipcion: <?php echo $row['descripcion']; ?></p>
				<p id="preciojuego">Precio: <?php echo $row['precio']; ?></p>
			</div>


			<?php 
		}
		
		

	}

	 ?>


	
</div>