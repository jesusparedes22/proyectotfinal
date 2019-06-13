<nav id="navigation">
			
	<div class="container">
		
		<div id="responsive-nav">
			
			<ul class="main-nav nav navbar-nav">
				<li class="inicio"><a href="/proyecto/index.php">Inicio</a></li>
				<li class="registro"><a href="/proyecto/registro.php">Registro</a></li>
				<li class="destacados"><a href="/proyecto/destacados.php">Destacados y Ofertas</a></li>
				<li class="valoraciones"><a href="/proyecto/valoraciones.php">Valoraciones</a></li>
				<?php 
					if (isset($_SESSION['usuario'])) {
						if ($_SESSION['usuario'] === "jesus") {
							?><li class="administrar"><a href="/proyecto/administrar.php">Administrar</a></li><?php
							?><?php
						}
						
					}
				?>
				
			</ul>
			
		</div>
		
	</div>

</nav>