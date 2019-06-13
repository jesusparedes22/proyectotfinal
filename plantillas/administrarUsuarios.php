<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>

<script type="text/javascript" src="../js/administrarUsuarios.js"></script>
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


		<table class="table">
			<tr>
				<th>Usuario</th>
				<th>Email</th>
			</tr>
			<?php include '../php/mostrarUsuarios.php'; ?>
			

			<div id="modificar">

			</div>
		</table>
		



</body>
</html>