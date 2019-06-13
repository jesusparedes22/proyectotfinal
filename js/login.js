$(document).ready(function() {
	$(".inicio").addClass("active");
	$("#iniciar").click(function() {
		var usuario = $("#user").val();
		var contra = $("#contra").val();


		var datosLogin = {

			"usuario": usuario,
			"password": contra

		};


		//Aquí hacemos la llamada el fichero php login.php con ajax

		$.ajax({
			data: datosLogin,
			type: 'post',
			url: 'php/login.php',
			beforeSend: function() {
				$("#enviando").html("Enviando")
			}, 
			success: function(response) {
				console.log(response)
				if (response == "Iniciado") {
					$("#enviando").html("Correcto!")
					window.location.reload();
				} else {
					$("#enviando").html("Nombre de usuario o contraseña incorrecto")
				}
				
				
				
			}
		});
	})


	

})