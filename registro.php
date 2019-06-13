<!DOCTYPE html>

<html>
	<?php include 'plantillas/header.php'; ?>
    	<script type="text/javascript" src="js/validar.js"></script>
    	<script type="text/javascript" src="js/registro.js"></script>

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

								<div>
									
									<h2 class="registrate">Regístrate ahora!</h2>

								</div>
							</div>
						</div>
					
					</div>
				
				</div>
				
			</div>
		
		</header>

		<?php include 'plantillas/navTMP.php'; ?>


		<br>
		<br>

		<div class="container">
			
			<form method="POST" class="form-horizontal" id="myform">

				<h3>¡Regístrate!</h3><br>
				
				<div class="container">

					<div class="form-group">
						<label for="nombre" class="col-xs-12 col-sm-12 col-md-4 col-bg-4 col-xl-4"> Usuario: <input type="text" name="usuario" class="form-control" id="usuario" name="usuario" placeholder="Usuario(sólo letras):" required></label>
						<div id="divusuario"></div>
					</div>
					
					<div class="form-group">
						<label for="nombre" class="col-xs-12 col-sm-12 col-md-4 col-bg-4 col-xl-4"> Correo electrónico: <input type="text" name="correo" class="form-control" id="correo" placeholder="Correo electrónico:" required> </label>
						<div id="divcorreo"></div>
					</div>

					<div class="form-group">
						<label for="nombre" class="col-xs-12 col-sm-12 col-md-4 col-bg-4 col-xl-4"> Contraseña: <input type="password" name="contra" class="form-control" id="contra" minlength="5" placeholder="Al menos una mayúscula, 1 minúscula y 1 número:" required> </label>
						<div id="divcontra"></div>
					</div>

					<input type="button" class="btn btn-info btn-sm my-1 my-sm-0" id="registro" value="Regístrate">

				</div>

			</form>

		</div>

				</div>
				
			</div>
			
		</footer>
		
	</body>
</html>
