<!DOCTYPE html>

<html>
	<?php include 'plantillas/header.php'; ?>
	<script type="text/javascript" src="js/login.js"></script>
	<body>
		
		<header>
			
			<?php include 'plantillas/topHeader.php'; ?>
			
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
					
						<?php include 'plantillas/loginTMP.php' ?>	
					
					</div>
				
				</div>
				
			</div>
		
		</header>

		
		<?php include 'plantillas/navTMP.php'; ?>
		
		</div>
		<div class="container">
			<?php include 'php/productosPrincipal.php' ?>
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
