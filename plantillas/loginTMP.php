<div class="col-md-8 clearfix">
	<div class="header-ctn">

		<div>
			<?php 

			if (!isset($_SESSION['usuario'])) {
				
				?>
			<form id="miformulario" style="">

	            <label for="name">Nombre de usuario:</label><br>
	            <input type="text" name="user_name" placeholder="Nombre de usuario" id="user">
	            <br>
	            <label for="username">Contraseña:</label><br>
	            <input type="password" name="password" placeholder="Introduzca la contraseña" id="contra">
	            <p id="enviando"></p>
	            <div id="lower"><br>
	               <input type="button" value="Iniciar Sesión" id="iniciar">
	               <input type="button" onclick="location.href='registro.php'" value="Registro" id="registro">
	            </div>
			</form>

				<?php 
			}



			?>
			
		</div>
	</div>
</div>