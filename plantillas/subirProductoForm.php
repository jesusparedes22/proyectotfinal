<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<script type="text/javascript" src="../js/administrarProductos.js"></script>
<body>

	<?php include 'topHeader.php'; ?>

	<div class="container">
		<form  class="form-horizontal" id="formulario">

				<h3>Subir nuevo Producto</h3><br>
				

					<div class="form-group">
						<label for="titulo"> Titulo: 
						<input type="text"  class="form-control" id="titulo" placeholder="Titulo(sólo letras):" required></label>
					</div>
					
					<div class="form-group">
						<label> Descripcion: <input type="text" class="form-control" id="descripcion" placeholder="Descripcion:" required> </label>
					</div>

					<div class="form-group">
						<label> Precio: <input type="number"  class="form-control" id="precio" minlength="5" placeholder="Precio:" required> </label>
					</div>

					<div class="form-group">
						<label> Imagen: 
							<input type="file"  class="form-control" id="imagen" minlength="5"  required> </label>
					</div>

					<input type="button" class="btn btn-info btn-sm my-1 my-sm-0" id="subirProducto" value="Subir">

				

			</form>

		</div>
	</div>

	

</body>
</html>