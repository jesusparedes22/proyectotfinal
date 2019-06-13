<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Game Market</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="css/estilo.css"/>
		<link type="text/css" rel="stylesheet" href="css/etiqueta.css"/>

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
								<a href="#" class="logo">
									<img src="img/logo.png" alt="">
								</a>
							</div>
						</div>
					
						<div class="col-md-8 clearfix">
							<div class="header-ctn">

								<div>

									<form method="post" id="miformulario" style="">

							            <label for="name">Nombre de usuario:</label><br>
							            <input type="text" name="user_name" placeholder="Nombre de usuario" id="user">
							            <br>
							            <label for="username">Contraseña:</label><br>
							            <input type="password" name="password" placeholder="Introduzca la contraseña" id="contra">

							            <div id="lower"><br>
							               <input type="button" value="Iniciar Sesión" id="iniciar">
							               <input type="button" onclick="location.href='registro.php'" value="Registro" id="registro">
							            </div>
		            				</form>
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
						<li class="active"><a href="#">Inicio</a></li>
						<li><a href="registro.php">Registro</a></li>
						<li><a href="destacados.php">Destacados y Ofertas</a></li>
						<li><a href="valoraciones.php">Valoraciones</a></li>
						<li><a href="administrar.php">Administrar</a></li>
					</ul>
					
				</div>
				
			</div>
		
		</nav>
		
		</div>

		
		<footer id="footer">
			
			<div class="section">
				
				<div class="container">
					
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Sobre nosotros</h3>
								<ul class="footer-links">

								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informacion y contacto</h3>
								<ul class="footer-links">
									<li><a href="#"></a></li>
								</ul>
							</div>
						</div>

				</div>
				
			</div>
			
		</footer>

	</body>
</html>
