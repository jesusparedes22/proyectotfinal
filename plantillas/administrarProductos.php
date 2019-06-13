<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>

<script type="text/javascript" src="../js/administrarProductos.js"></script>
<body>

	<header>
			
			<?php include 'topHeader.php'; ?>
			
			<div id="header">
				
				<div class="container">
					
					<div class="row">
						
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="../img/logo.png" alt="">
								</a>
							</div>
						</div>
					
						<?php include 'loginTMP.php' ?>	
					
					</div>
				
				</div>
				
			</div>
		
		</header>

		<?php include 'navTMP.php'; ?>

		<a href="subirProductoForm.php" class="btn btn-info">Subir nuevo producto</a>

		<table class="table">
			<tr>
				<th>Usuario</th>
				<th>Email</th>
				<th>Precio</th>
			</tr>
			<?php include '../php/mostrarProductos.php'; ?>
			

			<div id="modificar">

			</div>
		</table>
		



</body>
</html>