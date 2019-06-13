<?php session_start(); ?>
<div id="top-header">
	<div class="container">
		<ul class="header-links pull-left">
			<li><a href="#">634987502</a></li>
			<li><a href="#">game_market_@gmail.com</a></li>
			<?php if (isset($_SESSION['usuario'])) {
				?>
				<li href="" id="nombreUser"><?php echo $_SESSION['usuario'] ?></li>
				<a href="/proyecto/plantillas/perfil.php" id="irPerfil" style="color:white">Perfil</a>
				<a href="/proyecto/plantillas/perfil.php" id="irPerfilIcon"><img src="img/logoperfil.png" id="logoperfil"></img></a>
				<a href="/proyecto/php/cerrarsession.php" id="irCerrarSession" style="color: white">Cerrar sesion</a>
				<a href="/proyecto/php/cerrarsession.php" id="irCerrarSessionIcon"><img src="img/logoFuera.jpg" id="logofuera"></img></a>
				<?php 
			} ?>
		</ul>
	</div>
</div>