<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Game Market</title>

		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="css/estilo.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script type="text/javascript" src="js/validar.js"></script>

    </head>
	<body>
		
		<header>
			
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#">634987502</a></li>
						<li><a href="#">game_market_@gmail.com</a></li>
					</ul>
				</div>
			</div>
			
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
									
									<h2>Regístrate ahora!</h2>

								</div>
							</div>
						</div>
					
					</div>
				
				</div>
				
			</div>
		
		</header>

		<nav id="navigation">
			<div class="container">

				<div id="responsive-nav">

					<ul class="main-nav nav navbar-nav">
						<li><a href="index.php">Inicio</a></li>
						<li class="active"><a href="#">Registro</a></li>
						<li><a href="destacados.php">Destacados y Ofertas</a></li>
						<li><a href="valoraciones.php">Valoraciones</a></li>
						<li><a href="administrar.php">Administrar</a></li>
					</ul>

				</div>

			</div>
		</nav>

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
