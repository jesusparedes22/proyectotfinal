
<!DOCTYPE html>

<html>
	<?php include 'plantillas/header.php'; ?>
    	<script type="text/javascript" src="js/administrar.js"></script>

    </head>
	<body>
		
		<header>
			
			<?php include 'plantillas/topHeader.php'; ?>
			
			<div id="header">
				
				<div class="container">
					
					<div class="row">

						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="img/logo.png" href="index.php">
								</a>
							</div>
						</div>

						<div class="col-md-4 clearfix">
							<div class="header-ctn">

						</div>
					
					</div>
				
				</div>
				
			</div>
		
		</header>

		<?php include 'plantillas/navTMP.php'; ?>

		<br>
		<br>

		<div class="container">

			<h3 class="tituloadmin">¿Qué desea administrar?</h3>
			<br><br>

			<a href="plantillas/administrarProductos.php" id="administ">Administrar productos</a>	
			<a href="plantillas/administrarUsuarios.php"value="" id="administu">Administrar usuarios</a>

		</div>

				</div>
				
			</div>
			
		</footer>
		


	</body>
</html>